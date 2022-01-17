<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.partner.index',[
            "page" => "partners",
            "partner" => Partner::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.partner.create',[
            "page" => "partners"
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
        // dd(Partner::all()->count() + 1);
        $img = Image::make($request->file('logo'));
        $img->resize(89, null,  function ($constraint)
        {
            $constraint->aspectRatio();
        });

        $filename = time().'.'.$request->file('logo')->getClientOriginalExtension();
        $img_path = 'logo/'.$filename;
        Storage::put($img_path, $img->encode());

        $rule = [
            "logo" => "required|image|file"
        ];

        $validated = $request->validate($rule);

        
        $validated['index'] = Partner::all()->count() + 1;
        $validated['logo'] = $request->file('logo')->store('partners-images',[
            'disk' => 'public'
        ]);

        Alert::success('Success', 'Succesfully add new data');

        Partner::create($validated);

        return redirect('/admin/partners');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd(Partner::all()->count() - 1);
        if (Partner::all()) {
            # code...
        }
        Storage::delete($id);
        Partner::destroy($id);
        return redirect('/admin/people');
    }
}
