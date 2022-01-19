<?php

namespace App\Http\Controllers;

use App\Models\Service;
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
            'page' => 'service',
            'service' => Service::all()
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
            'page' => 'service'
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
        $validated = $request->validate([
            'logo' => 'required|image|file',
            'service' => 'required',
            'description' => 'required',
            'body' => 'required',
            'image' => 'required|image|file'
        ]);

        $validated['logo'] = $request->file('logo')->store('service-image', ['disk' => 'public']);
        if ($request->hasFile('image')) {
            # code...
            $validated['image'] = $request->file('image')->store('service-image', ['disk' => 'public']);
        }
        $validated['index'] = Service::all()->count() + 1;
        Service::create($validated);
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
            'page' => 'service',
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
        $validated = $request->validate([
            'service' => 'required',
            'description' => 'required',
            'body' => 'required'
        ]);

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
