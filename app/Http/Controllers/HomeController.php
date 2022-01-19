<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\General;
use App\Models\Project;
use App\Models\Service;
use App\Models\Flagship;
use App\Models\Inspiration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct()
    {
        $this->general = General::all()->first();
    }

    function homepage()
    {
        return view('frontend.homepage',[
            "general" => $this->general
        ]);
    }

    function flagship()
    {
        return view('frontend.flagship',[
            "general" => $this->general,
            "flagship" => Flagship::all()
        ]);
    }

    function inspiration()
    {

        return view('frontend.inspiration',[
            "general" => $this->general,
            "inspiration" => Inspiration::all()
        ]);
    }

    function landing()
    {
        return view('frontend.landing',[
            "general" => $this->general
        ]);
    }

    function our_people()
    {
        return view('frontend.our-people',[
            "general" => $this->general,
            "people" => People::all()
        ]);
    }

    function project()
    {
        return view('frontend.project',[
            "general" => $this->general,
            "project" => Project::all()
        ]);
    }

    function tribes()
    {
        return view('frontend.tribes',[
            "general" => $this->general,
            "service" => Service::orderBy('index', 'desc')->get()
        ]);
    }

}
