<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.our-people.index-people',[
            "page" => "People",
            "people" => People::orderBy('index', 'asc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.our-people.create-people', [
            "page" => "People"
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

        $request['description'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['description'])));
        $validated = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'photo' => 'required|image|file',
            'description' => 'required|min:1'
        ]);
        $img = Image::make($request->file('photo'));
        $img->resize(521, null,  function ($constraint)
        {
            $constraint->aspectRatio();
        });

        $filename = time().'.'.$request->file('photo')->getClientOriginalExtension();
        $img_path = 'people-photo/'.$filename;
        Storage::put($img_path, $img->encode());
        $validated['photo'] = $img_path;

        $validated['index'] = People::all()->count() + 1 ;

        People::create($validated);
        Alert::success('Success', 'Data create succesfully');
        return redirect('/admin/people');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(People $people)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $person)
    {
        return view('dashboard.our-people.edit-people',[
            'page' => 'Person',
            'people' => $person
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $person)
    {
        $request['description'] = str_replace(' ', '', str_replace('&nbsp;', '', strip_tags($request['description'])));
        $validated = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'photo' => 'image|file',
            'description' => 'required|min:1'
        ]);

        Alert::success('Success', 'Update Data Succesfully');

        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($person->photo);
            $img = Image::make($request->file('photo'));
            $img->resize(521, null,  function ($constraint)
            {
                $constraint->aspectRatio();
            });

            $filename = time().'.'.$request->file('photo')->getClientOriginalExtension();
            $img_path = 'people-photo/'.$filename;
            Storage::put($img_path, $img->encode());
            $validated['photo'] = $img_path;
        }

        People::where('id', $person->id)
        ->update($validated);

        return redirect('/admin/people');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $person)
    {
        Storage::delete($person->photo);
        People::destroy($person->id);
        $notdel = People::all();
        foreach ($notdel as $key => $value) {
            $value->update(['index' => $key + 1]);
        }
        return redirect('/admin/people');
    }

    public function position(Request $request)
    {
        foreach ($request->id as $index => $id) {
            People::find($id)->update(['index' => $index + 1]);
        }

        return response()->json('success');

    }
}
