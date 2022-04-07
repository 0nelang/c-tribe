<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.service.index-service', [
            'page' => 'Service',
            'service' => Service::orderBy('index', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.service.create-service', [
            'page' => 'Service'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $desc = $request->description;

        $request['title'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['title'])));
        $request['description'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['description'])));
        $request['body'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['body'])));
        $validated = $request->validate([
            'logo' => 'required|image|file',
            'service' => 'required|max:255',
            'title' => 'required|min:1',
            'description' => 'required|min:1',
            'body' => 'required|min:1',
            'image' => 'required|image|file'
        ]);
        $validated['title'] = $title;
        $validated['description'] = $desc;

        if ($request->unpublished == 'on') {
            $validated['unpublished'] = 1;
        }else {
            $validated['unpublished'] = 0;
        }

        $validated['logo'] = $request->file('logo')->store('service-image', ['disk' => 'public']);
        if ($request->hasFile('image')) {
            # code...
            $validated['image'] = $request->file('image')->store('service-image', ['disk' => 'public']);
        }
        $validated['index'] = Service::all()->count() + 1;
        $validated['slug'] = Str::slug(strip_tags($request->service));
        $service = Service::create($validated);
        $service::find($service->id)->update(['slug' => self::slugify(strip_tags($title . strval($service->id) ))]);
        Alert::success('success', 'data successfuly created');

        return redirect('admin/service');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('dashboard.service.edit-service', [
            'page' => 'Service',
            'service' => $service
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $title = $request->title;
        $desc = $request->description;

        $request['title'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['title'])));
        $request['description'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['description'])));

        $validated = $request->validate([
            'service' => 'required|max:255',
            'title' => 'required|min:1',
            'description' => 'required|min:1',
            'body' => 'required|min:1',
        ]);
        $validated['title'] = $title;
        $validated['description'] = $desc;

        if ($request->unpublished == 'on') {
            $validated['unpublished'] = 1;
        }else {
            $validated['unpublished'] = 0;
        }

        if ($request->hasFile('logo')) {
            $request->validate(['logo' => 'image|file']);
            Storage::delete($service->logo);
            $validated['logo'] = $request->file('logo')->store('service-image', ['disk' => 'public']);
        }

        if ($request->hasFile('image')) {
            $request->validate(['image' => 'image|file']);
            Storage::delete($service->image);
            $validated['image'] = $request->file('image')->store('service-image', ['disk' => 'public']);
        }

        $validated['slug'] = self::slugify(strip_tags($title . strval($service->id) ));
        Service::find($service->id)->update($validated);
        Alert::success('success', 'data update successfuly');

        return redirect('/admin/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        Storage::delete([$service->logo, $service->image]);
        Service::destroy($service->id);
        $notdel = Service::orderBy('index', 'desc')->get();
        if ($notdel != null) {
            foreach ($notdel as $key => $value) {
                Service::find($value->id)->update(['index' => $key + 1]);
            }
        }
        return redirect()->back();
    }

    public function position(Request $request)
    {
        foreach ($request->id as $index => $id) {
            Service::find($id)->update(['index' => $index + 1]);
        }

        return response()->json('success');
    }
}
