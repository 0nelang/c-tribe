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

    public function update(Request $request, $id)
    {
        $rules = [
            "brand_navbar" => "image|file",
            "title" => "required",
            "background_footer" => "image|file",
            "brand_footer" => "image|file",
            "email_footer" => "required",
            "phone_footer" => "required",
            "social_footer" => "required",
            "addres_footer" => "required",
            "cursor_image" => "image|file",
            "hover_image" => "image|file",
        ];

        $validated = $request->validate($rules);

        if ($request->file('brand_navbar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['brand_navbar'] = $request->file('brand_navbar')->store('general-images',[
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

        // if ($request->file('brand_footer')) {
        //     Storage::delete($general->brand_footer);
        //     $validated['brand_footer'] = $request->file('brand_footer')->store('general-image', [
        //         'disk' => 'public'
        //     ]) ;
        // }

        // if ($request->file('brand_navbar')) {
        //     Storage::delete($general->brand_navbar);
        //     $validated['brand_navbar'] = $request->file('brand_navbar')->store('general-image', [
        //         'disk' => 'public'
        //     ]) ;
        // }

        // if ($request->file('cursor_image')) {
        //     Storage::delete($general->cursor_image);
        //     $validated['cursor_image'] = $request->file('cursor_image')->store('general-image', [
        //         'disk' => 'public'
        //     ]) ;
        // }

        // if ($request->file('hover_image')) {
        //     Storage::delete($general->hover_image);
        //     $validated['hover_image'] = $request->file('hover_image')->store('general-image', [
        //         'disk' => 'public'
        //     ]) ;
        // }

        // if ($request->file('hover_image')) {
        //     Storage::delete($general->background_footer);
        //     $validated['background_footer'] = $request->file('background_footer')->store('general-image', [
        //         'disk' => 'public'
        //     ]) ;
        // }

        // $validated['brand_navbar'] =  $request->file('brand_navbar')->store('general-image', [
        //     'disk' => 'public'
        // ]) ;
        // $validated['cursor_image'] =  $request->file('cursor_image')->store('general-image', [
        //     'disk' => 'public'
        // ]) ;
        // $validated['hover_image'] =  $request->file('hover_image')->store('general-image', [
        //     'disk' => 'public'
        // ]) ;
        // $validated['background_footer'] =  $request->file('background_footer')->store('general-image', [
        //     'disk' => 'public'
        // ]) ;

        
        General::where('id', $id)->update($validated);
        
        Alert::success('Success', 'Data Updated Successfully');
        
        return redirect('/admin/general');
    }
}
