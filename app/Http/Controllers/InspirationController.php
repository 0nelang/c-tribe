<?php

namespace App\Http\Controllers;

use App\Models\Inspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            'page' => 'inspiration',
            'inspiration' => Inspiration::all()
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
            'page' => 'inspiration',
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
        $validated = $request->validate([
            'name' => 'required',
            'quote' => 'required',
            'description' => 'required',
            'image' => 'required|image|file',
            'video' => 'mimetypes:video/avi,video/mp4'
        ]);

        $validated['image'] = $request->file('image')->store('inspiration-images', ['disk' => 'public']);

        if ($request->file('video')) {
            $validated['video'] = $request->file('video')->store('inspire-video', ['disk' => 'public']);
        }

        Inspiration::create($validated);

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
            'page' => 'inspiration',
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
        $validated = $request->validate([
            'name' => 'required',
            'quote' => 'required',
            'description' => 'required',
            'image' => 'image|file',
            'video' => 'mimetypes:video/avi,video/mp4'
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($inspiration->image);
            $validated['image'] = $request->file('image')->store('inspiration-images', ['disk' => 'public']);
        }

        if ($request->hasFile('video')) {
            Storage::disk('public')->delete($inspiration->video);
            $validated['video'] = $request->file('video')->store('inspire-video', ['disk' => 'public']);
        }

        Inspiration::where('id', $inspiration->id)->update($validated);

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
        return redirect(route('inspiration.index'));
    }
}
