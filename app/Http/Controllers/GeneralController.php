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
}
