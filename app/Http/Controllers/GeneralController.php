<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function general(General $general)
    {
        return view('dashboard.general',[
        "page" => "general",
        "general" => $general
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            "brand_image_n" => "required|mimes:jpg,jpeg,png" 
        ]);
        
        return redirect('/admin/general');
    }
}
