<?php

namespace App\Http\Controllers;

use App\Models\Flagship;
use Illuminate\Http\Request;
use App\Models\FlagshipImage;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class FlagshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.flagship.index',[
            "page" => 'Flagship',
            "flag" => Flagship::orderBy('index', 'asc')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.flagship.create',[
            "page" => 'Flagship'
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
            'title' => 'required',
            'date' => 'required',
            'description' => 'required',
            'body' => 'required',
            'mainImage*' => 'image|file',
            'detailImage' => 'image|file'
        ]);

        if ($request->hasFile('mainImage'))
        {
            foreach ($request->mainImage as $index => $value) {
                if ($index == 0) {
                    $validated['mainImage'] = $value->store('flagship-image', ['disk' => 'public']);
                } else {
                    $otherImage['otherImage'] = $value->store('flagship-image', ['disk' => 'public']);
                    $otherImage['flagship'] = $request->title;
                    FlagshipImage::create($otherImage);
                }
            }
        }

        if ($request->hasFile('detailImage')) {
            $validated['detailImage'] = $request->file('detailImage')->store('flagship-image', ['disk' => 'public']);
        }

        if ($request->featured == true) {
            Flagship::where('featured', true)->update(['featured' => false]);
            $validated['featured'] = true;
        }

        $validated['subTitle'] = $request->subTitle;
        $validated['index'] = Flagship::all()->count() + 1 ;
        Flagship::create($validated);
        Alert::success('Success', 'Data create succesfully');

        return redirect(route('flagship.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flagship  $flagship
     * @return \Illuminate\Http\Response
     */
    public function show(Flagship $flagship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flagship  $flagship
     * @return \Illuminate\Http\Response
     */
    public function edit(Flagship $flagship)
    {
        // dd($flagship);
        return view('dashboard.flagship.edit', [
            'page' => 'Flagship',
            'flagship' => $flagship,
            'otherImage' => FlagshipImage::where('flagship', $flagship->title)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flagship  $flagship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flagship $flagship)
    {
        $validated = $request->validate([
            'title' => 'required',
            'date' => 'required',
            'title' => 'required',
            'description' => 'required',
            'body' => 'required',
            'mainImage' => 'image|file',
            'detailImage' => 'image|file',
            'otherImage*' => 'image|file'
        ]);

        if ($request->hasFile('otherImage')) {
            foreach ($request->otherImage as $value) {
                $otherImage['otherImage'] = $value->store('flagship-image', ['disk' => 'public']);
                $otherImage['flagship'] = $request->title;
                FlagshipImage::create($otherImage);
            }
        }

        if ($request->hasFile('mainImage')) {
            Storage::delete($flagship->mainImage);
            $validated['mainImage'] =  $request->file('mainImage')->store('project-image', ['disk' => 'public']);
        }

        if ($request->hasFile('detailImage')) {
            Storage::delete($flagship->detailImage);
            $validated['detailImage'] =  $request->file('detailImage')->store('project-image', ['disk' => 'public']);
        }

        if ($request->featured == true) {
            Flagship::where('featured', true)->update(['featured' => false]);
            $validated['featured'] = true;
        }

        $validated['subTitle'] = $request->subTitle;
        Flagship::where('id', $flagship->id)->update($validated);
        Alert::success('Success', 'Data update succesfully');

        return redirect(route('flagship.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flagship  $flagship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flagship $flagship)
    {
        $otherImg = FlagshipImage::where('flagship', $flagship->title);
        if ($otherImg != null) {
            foreach ($otherImg as $value) {
                storage::delete($value->otherImage);
                FlagshipImage::destroy($value->id);
            }
        }
        storage::delete($flagship->mainImage);
        Flagship::destroy($flagship->id);
        $notdel = Flagship::all();
        foreach ($notdel as $key => $value) {
            $value->update(['index' => $key + 1]);
        }

        return redirect()->back();
    }

    public function imgdel($id)
    {
        $image = FlagshipImage::find($id);

        Storage::delete($image->otherImage);
        FlagshipImage::destroy($id);
        return response()->json("success");
    }

    public function position(Request $request)
    {
        foreach ($request->id as $index => $id) {
            Flagship::find($id)->update(['index' => $index + 1]);
        }

        return response()->json('success');

    }
}
