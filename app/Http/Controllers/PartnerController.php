<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Models\People;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Intervention\Image\Facades\Image;
class partnerController extends Controller
{
    public function index()
    {
        return view('dashboard.partner.index', [
            'page' => 'Partners',
            'partner' => Partner::orderBy('index', 'asc')->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.partner.create', [
            'page' => 'Partners'
        ]);
    }

    public function store(Request $request)
    {
        $img = Image::make($request->file('logo'));
        $img->resize(null, 200,  function ($constraint)
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
        $validated['logo'] = $img_path;

        Alert::success('Success', 'Succesfully add new data');

        Partner::create($validated);

        return redirect('/admin/partners');

    }

    public function edit(Partner $partner)
    {
        return view('dashboard.partner.edit', [
            'page' => 'Partners',
            'logo' => $partner->logo,
            'id' => $partner->id
        ]);
    }

    public function update(Request $request, Partner $partner)
    {
        if ($request->hasFile('logo')) {

            Storage::delete($partner->logo);

            $img = Image::make($request->file('logo'));
            $img->resize(null, 200,  function ($constraint)
            {
                $constraint->aspectRatio();
            });

            $filename = time().'.'.$request->file('logo')->getClientOriginalExtension();
            $img_path = 'logo/'.$filename;
            Storage::put($img_path, $img->encode());

            $rule = [
                "logo" => "image|file"
            ];

            $validated = $request->validate($rule);
            $validated['logo'] = $img_path;

            Partner::where('id', $partner->id)->update($validated);
        }
        return redirect('/admin/partners');
    }

    public function destroy(Partner $partner)
    {
        Storage::delete($partner->logo);
        Partner::destroy($partner->id);
        $notdel = Partner::orderBy('index', 'desc')->get();
        if ($notdel != null) {
            foreach ($notdel as $key => $value) {
                Partner::find($value->id)->update(['index' => $key + 1]);
            }
        }
        return redirect('admin/partners');
    }

    public function position(Request $request)
    {
        foreach ($request->id as $index => $id) {
            Partner::find($id)->update(['index' => $index + 1]);
        }

        return response()->json('success');

    }
}
