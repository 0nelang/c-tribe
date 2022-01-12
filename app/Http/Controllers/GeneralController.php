<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function general()
    {
        return view('dashboard.general',[
        "page" => "general"
        ]);
    }
}
