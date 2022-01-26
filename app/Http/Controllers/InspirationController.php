<?php

namespace App\Http\Controllers;

use App\Models\Inspiration;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class InspirationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.Inspiration.index-inspiration', [
            'page' => 'Inspiration',
            'inspiration' => Inspiration::orderBy('index', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.Inspiration.create-inspiration', [
            'page' => 'Inspiration',
            'inspiration' => Inspiration::all()
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
        $request['title'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['title'])));
        $request['description'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['description'])));
        $validated = $request->validate([
            'title' => 'required|min:1',
            'description' => 'required|min:1',
            'mainImage' => '|image|file',
            'video' => 'mimetypes:video/avi,video/mp4',
            'date' => 'max:255'
        ]);

        $validated['date'] = $request->date;
        if ($request->hasFile('mainImage')) {
          $validated['mainImage'] = $request->file('mainImage')->store('inspiration-images', ['disk' => 'public']);
        }


        if ($request->file('video')) {
            $validated['video'] = $request->file('video')->store('inspire-video', ['disk' => 'public']);
        }

        if ($request->featured == true) {
            Inspiration::whereNotNull('featured')->update(['featured' => null]);
            $request->validate(['layout' => 'required']);
            $validated['featured'] = $request->layout;
        }

        $validated['index'] = Inspiration::all()->count() + 1;
        $validated['subTitle'] = $request->subTitle;
        $validated['slug'] = Str::slug(strip_tags($request->title));
        Inspiration::create($validated);
        Alert::success('Success', 'Data create succesfully');

        return redirect(route('inspiration.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inspiration  $inspiration
     * @return \Illuminate\Http\Response
     */
    public function show(Inspiration $inspiration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inspiration  $inspiration
     * @return \Illuminate\Http\Response
     */
    public function edit(Inspiration $inspiration)
    {
        return view('dashboard.Inspiration.edit-inspiration', [
            'page' => 'Inspiration',
            'inspiration' => $inspiration
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inspiration  $inspiration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inspiration $inspiration)
    {
        $request['title'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['title'])));
        $request['description'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['description'])));
        $validated = $request->validate([
            'title' => 'required|min:1',
            'description' => 'required|min:1',
            'mainImage' => 'image|file',
            'video' => 'mimetypes:video/avi,video/mp4',
            'date' => 'max:255'
        ]);
        $validated['date'] = $request->date;
        if ($request->hasFile('mainImage')) {
            Storage::disk('public')->delete($inspiration->mainImage);
            $validated['mainImage'] = $request->file('mainImage')->store('inspiration-images', ['disk' => 'public']);
        }

        if ($request->hasFile('video')) {
            Storage::disk('public')->delete($inspiration->video);
            $validated['video'] = $request->file('video')->store('inspire-video', ['disk' => 'public']);
        }

        if ($request->featured == true) {
            Inspiration::whereNotNull('featured')->update(['featured' => null]);
            $request->validate(['layout' => 'required']);
            $validated['featured'] = $request->layout;
        }

        $validated['slug'] = Str::slug(strip_tags($request->title));
        $validated['subTitle'] = $request->subTitle;
        Inspiration::where('id', $inspiration->id)->update($validated);
        Alert::success('Success', 'Update Data Succesfully');

        return redirect(route('inspiration.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inspiration  $inspiration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inspiration $inspiration)
    {
        Storage::disk('public')->delete($inspiration->video);
        Storage::disk('public')->delete($inspiration->image);
        Inspiration::destroy($inspiration->id);
        $notdel = Inspiration::all();
        foreach ($notdel as $key => $value) {
            $value->update(['index' => $key + 1]);
        }
        return redirect(route('inspiration.index'));
    }

    public function position(Request $request)
    {
        foreach ($request->id as $index => $id) {
            Inspiration::find($id)->update(['index' => $index + 1]);
        }

        return response()->json('success');

    }
}
