<?php

namespace App\Http\Controllers;

use App\Models\Flagship;
use Illuminate\Support\Str;
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
            "flag" => Flagship::orderBy('index', 'asc')->get()
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
        $title = $request->title;
        $desc = $request->description;
        $body = $request->body;
        if ($request->unpublished) {
            $disabled = true;
        }else {
            $disabled = false;
        }

        $request['title'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['title'])));
        $request['description'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['description'])));
        $request['body'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['body'])));
        $validated = $request->validate([
            'title' => 'required|min:1',
            'description' => 'required|min:1',
            'body' => 'required|min:1',
            'date' => 'required|max:255',
            'mainImage' => 'image|file',
            'detailImage' => 'image|file',
            'otherImage*' => 'image|file',
            'unpublished' => $disabled,
            'detail1' => 'min:0',
            'detail2' => 'min:0',
            'detail3' => 'min:0',
            'insta1' => 'min:0|max:255',
            'insta2' => 'min:0|max:255',
            'insta3' => 'min:0|max:255',
            'video' => 'mimetypes:video/avi,video/mp4',
        ]);

        $validated['title'] = $title;
        $validated['description'] = $desc;
        $validated['body'] = $body;
        // if ($title != '' && $desc != '' && $body != '') {
        //     $validated['title'] = $request->title;
        //     $validated['description'] = $request->description;
        //     $validated['body'] = $request->body;
        // }else {
        //     return redirect()->back()->withInput($request->all());
        // }

        if ($request->hasFile('video')) {
            $validated['video'] = $request->file('video')->store('flagship-video', ['disk' => 'public']);
        }

        if ($request->hasFile('mainImage'))
        {
            $validated['mainImage'] = $request->file('mainImage')->store('flagship-image', ['disk' => 'public']);
        }


        if ($request->hasFile('detailImage')) {
            $validated['detailImage'] = $request->file('detailImage')->store('flagship-image', ['disk' => 'public']);
        }

        if ($request->featured == true) {
            Flagship::whereNotNull('featured')->update(['featured' => null]);
            $request->validate(['layout' => 'required']);
            $validated['featured'] = $request->layout;
        }

        $validated['subTitle'] = $request->subTitle;
        $validated['index'] = Flagship::all()->count() + 1 ;
        $flagship = Flagship::create($validated);
        $flagship::find($flagship->id)->update(['slug' => self::slugify(strip_tags($title . strval($flagship->id) ))]);
        if ($request->hasFile('otherImage')) {
            foreach ($request->otherImage as $value) {
                $otherImage['otherImage'] = $value->store('flagship-image', ['disk' => 'public']);
                $otherImage['flagship'] = $flagship->id;
                FlagshipImage::create($otherImage);
            }
        }
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
            'otherImage' => FlagshipImage::where('flagship', $flagship->id)->get()
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
        $title = $request->title;
        $desc = $request->description;
        $body = $request->body;
        if ($request->unpublished) {
            $disabled = true;
        }else {
            $disabled = false;
        }
        $request['title'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['title'])));
        $request['description'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['description'])));
        $request['body'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['body'])));

        $validated = $request->validate([
            'title' => 'required|min:1',
            'unpublished' => $disabled,
            'description' => 'required|min:1',
            'body' => 'required|min:1',
            'date' => 'required|max:255',
            'mainImage' => 'image|file',
            'detailImage' => 'image|file',
            'otherImage*' => 'image|file',
            'detail1' => 'min:0',
            'detail2' => 'min:0',
            'detail3' => 'min:0',
            'video' => 'mimetypes:video/avi,video/mp4',
            'insta1' => 'min:0|max:255',
            'insta2' => 'min:0|max:255',
            'insta3' => 'min:0|max:255',
        ]);

        $validated['title'] = $title;
        $validated['description'] = $desc;
        $validated['body'] = $body;

        if ($request->hasFile('otherImage')) {
            foreach ($request->otherImage as $value) {
                $otherImage['otherImage'] = $value->store('flagship-image', ['disk' => 'public']);
                $otherImage['flagship'] = $flagship->id;
                FlagshipImage::create($otherImage);
            }
        }

        if ($request->hasFile('video')) {
            Storage::delete($flagship->video);
            $validated['video'] = $request->file('video')->store('flagship-video', ['disk' => 'public']);
        }

        if ($request->hasFile('mainImage')) {
            Storage::delete($flagship->mainImage);
            $validated['mainImage'] =  $request->file('mainImage')->store('flagship-image', ['disk' => 'public']);
        }

        if ($request->hasFile('detailImage')) {
            Storage::delete($flagship->detailImage);
            $validated['detailImage'] =  $request->file('detailImage')->store('flagship-image', ['disk' => 'public']);
        }

        if ($request->featured == true) {
            Flagship::whereNotnull('featured')->update(['featured' => null]);
            $request->validate(['layout' => 'required']);
            $validated['featured'] = $request->layout;
        }

        $validated['slug'] = self::slugify(strip_tags($title . strval($flagship->id) ));
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
        storage::delete($flagship->video);
        storage::delete($flagship->detailImage);
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
