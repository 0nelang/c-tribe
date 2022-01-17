<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    function homepage()
    {
        return view('frontend.homepage');
    }   

    function flagship()
    {
        return view('frontend.flagship');
    }

    function inspiration()
    {
        return view('frontend.inspiration');
    } 

    function landing()
    {
        return view('frontend.landing');
    }

    function our_people()
    {
        return view('frontend.our-people');
    }

    function project()
    {
        return view('frontend.project');
    }

    function tribes()
    {
        return view('frontend.tribes');
    }

}
