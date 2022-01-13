<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
        $validated = $request->validate([
            "brand_image_navbar" => "required|mimes:jpg,jpeg,png,svg",
            "description" => "required",
            "background_image" => "required|mimes:jpg,jpeg,png,svg",
            "brand_image_footer" => "required|mimes:jpg,jpeg,png,svg",
            "email" => "required",
            "phone" => "required",
            "social" => "required",
            "addres" => "required",
            "cursor_image" => "required|mimes:jpg,jpeg,png,svg",
            "hover_image" => "required|mimes:jpg,jpeg,png,svg",
        ]);

        
        General::where($id)->update($validated);
        
        return redirect('/admin/general');
    }
}
