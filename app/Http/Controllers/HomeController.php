<?php

namespace App\Http\Controllers;

use App\Models\People;
use App\Models\General;
use App\Models\Project;
use App\Models\Service;
use App\Models\Flagship;
use App\Models\Inspiration;
use App\Models\Page;
use App\Models\Partner;
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
            "general" => $this->general,
            "home1" => Page::where('page','Home 1')->first(),
            "page" => "Home"
        ]);
    }

    function flagship()
    {
        return view('frontend.flagship',[
            "general" => $this->general,
            "flagship" => Flagship::all(),
            "page" => "Flagship"
        ]);
    }

    function inspiration()
    {

        return view('frontend.inspiration',[
            "general" => $this->general,
            "inspiration" => Inspiration::all(),
            "page" => "Insipiration"
        ]);
    }

    function landing()
    {
        return view('frontend.landing',[
            "general" => $this->general,
            "landing1" => Page::where('page' , 'Landing 1')->first(),
            "landing2" => Page::where('page','Landing 2')->first(),
            "page" => "Pelarian"
        ]);
    }

    function our_people()
    {
        return view('frontend.our-people',[
            "general" => $this->general,
            "people" => People::all(),
            "partner" => Partner::orderBy('index','desc')->get(),
            "page" => "Our People"
        ]);
    }

    function project()
    {
        return view('frontend.project',[
            "general" => $this->general,
            "project" => Project::all(),
            "page" => "Project"
        ]);
    }

    function tribes()
    {
        return view('frontend.tribes',[
            "general" => $this->general,
            "service" => Service::orderBy('index', 'desc')->get(),
            "page" => "Tribes"
        ]);
    }

}
