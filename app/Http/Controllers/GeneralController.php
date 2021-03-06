<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Price;
use App\Models\General;
use Illuminate\Support\Facades\Storage;
use App\Models\Metadata;
use Illuminate\Http\Request;
use App\Imports\MetadataImport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class GeneralController extends Controller
{
    public function general()
    {

        return view('dashboard.general',[
        "page" => "General",
        "general" => General::first(),
        ]);
    }

    public function update(Request $request, General $general)
    {
        $rules = [
            "brand_navbar1" => "image|file",
            "brand_navbar2" => "image|file",
            "title" => "max:255",
            "background_footer" => "image|file",
            "background_menu" => "image|file",
            "background_menu_sm" => "image|file",
            "brand_footer" => "image|file",
            "email_footer" => "required",
            "phone_footer" => "required",
            "social_footer" => "required",
            "addres_footer" => "required",
            "cursor_image" => "image|file",
            "hover_image" => "image|file",
            "video_background" => "mimetypes:video/avi,video/mp4",
            "link" => "min:0|max:255"
        ];

        $validated = $request->validate($rules);
        if ($request->hasFile('brand_navbar1')) {
            Storage::delete($general->brand_navbar1);
            $validated['brand_navbar1'] = $request->file('brand_navbar1')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->hasFile('brand_navbar2')) {
                Storage::delete($general->brand_navbar2);

            $validated['brand_navbar2'] = $request->file('brand_navbar2')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->hasFile('brand_footer')) {
                Storage::delete($general->brand_footer);

            $validated['brand_footer'] = $request->file('brand_footer')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->hasFile('cursor_image')) {
                Storage::delete($general->cursor_image);
            $validated['cursor_image'] = $request->file('cursor_image')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->hasFile('background_footer')) {
                Storage::delete($general->background_footer);
            $validated['background_footer'] = $request->file('background_footer')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->hasFile('background_menu')) {
                Storage::delete($general->background_menu);
            $validated['background_menu'] = $request->file('background_menu')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->hasFile('background_menu_sm')) {
                Storage::delete($general->background_menu_sm);
            $validated['background_menu_sm'] = $request->file('background_menu_sm')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->hasFile('hover_image')) {
                Storage::delete($general->hover_image);
            $validated['hover_image'] = $request->file('hover_image')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->hasFile('video_background')) {
            Storage::disk('public')->delete($general->video_background);
            $validated['video_background'] = $request->file('video_background')->store('general-video', ['disk' => 'public']);
        }

        General::where('id', $general->id)->update($validated);

        Alert::success('Success', 'Data Updated Successfully');

        return redirect('/admin/general');
    }

    public function change_metadata(Request $request)
    {
        $this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);

        Metadata::where('user_id', Auth::user()->id)->delete();

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_metadata',$nama_file);

		// import data
		Excel::import(new MetadataImport, public_path('/file_metadata/'.$nama_file));

		// notifikasi dengan session

		// alihkan halaman kembali
		return redirect('/metadata');
    }

    public function import_metadata(Request $request)
    {
        // dd($request);
        if (User::where('email', $request->email)->first() == null) {
            // return 'lol';
            $user = $this->validate($request, [
                'file' => 'required|mimes:csv,xls,xlsx',
                'email' => 'required',
                'phone' => 'nullable',
            ]);
            $user['role'] = 'user';
            $user['name'] = $user['email'];
            $user['password'] = bcrypt('password');
            $user = User::create($user);
            $credentials = ['email' => $user->email, 'password' => 'password'];
        }else{
            $user = User::where('email', $request->email)->first();
            $credentials = ['email' => $user->email, 'password' => 'password'];
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
        }

		// menangkap file excel
		$file = $request->file('file');

		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();

		// upload ke folder file_siswa di dalam folder public
		$file->move('file_metadata',$nama_file);

		// import data
		Excel::import(new MetadataImport, public_path('/file_metadata/'.$nama_file));

		// notifikasi dengan session

		// alihkan halaman kembali
		return redirect('/metadata/excel');
    }

    public function login_metadata()
    {
        return view('dashboard.upload');
    }

    public function metadata()
    {
        $price = 0;
        $metadata = Auth::user()->metadata;
        // foreach ($metadata as $value) {
        //     $volume = floatval(str_replace(" cubic m","",$value->entity_volume));
        //     $price = $price + $volume * floatval(preg_replace('/[^0-9]/', '', $value->price));
        // }
        // Price::find(1)->update(['price' => $price]);
        return view('dashboard.metadata', [
            'metadata' => $metadata,
            'price' => Price::find(1),
            'page' => 'lol'
        ]);
    }

    public function price(Request $request)
    {
        // dd($request);
        $price = 0;
        foreach ($request->data as $data) {
            $value = preg_replace('/[^0-9]/', '', $data['value']);
            // dd($value);
            $metadata = Metadata::find($data['id']);
            // dd($metadata);
            Metadata::find($data['id'])->update(['price' => $data['value']]);
            $volume = floatval(str_replace(" cubic m","",$metadata->entity_volume));
            $price = $price + $volume * $value;
        }
        // dd($price);
        // $metadata = Metadata::all();
        // foreach ($metadata as $value) {
        //     $volume = floatval(str_replace(" cubic m","",$value->entity_volume));
        //     $price = $price + $volume * $value->price;
        // }
        Price::find(1)->update(['price' => $price]);

        return response()->json($price);
    }
}
