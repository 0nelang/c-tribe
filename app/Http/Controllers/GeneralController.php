<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class GeneralController extends Controller
{
    public function general()
    {

        return view('dashboard.general',[
        "page" => "general",
        "general" => General::first(),
        ]);
    }

    public function update(Request $request, General $general)
    {
        $rules = [
            "brand_navbar1" => "image|file",
            "brand_navbar2" => "image|file",
            "title" => "required",
            "background_footer" => "image|file",
            "brand_footer" => "image|file",
            "email_footer" => "required",
            "phone_footer" => "required",
            "social_footer" => "required",
            "addres_footer" => "required",
            "cursor_image" => "image|file",
            "hover_image" => "image|file",
            "video_background" => "mimetypes:video/avi,video/mp4"
        ];

        $validated = $request->validate($rules);

        if ($request->file('brand_navbar1')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['brand_navbar1'] = $request->file('brand_navbar1')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->file('brand_navbar2')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['brand_navbar2'] = $request->file('brand_navbar2')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->file('brand_footer')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['brand_footer'] = $request->file('brand_footer')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->file('cursor_image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['cursor_image'] = $request->file('cursor_image')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->file('background_footer')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['background_footer'] = $request->file('background_footer')->store('general-images',[
                'disk' => 'public'
            ]);
        }

        if ($request->file('hover_image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
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
}
