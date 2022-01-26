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
        $this->saveUser();
        $featured[] = Flagship::whereNotNull('featured')->first();
        $featured[] = Inspiration::whereNotNull('featured')->first();
        $featured[] = Project::where('type', 'project')->whereNotNull('featured')->first();
        $featured[] = Project::where('type', 'person')->whereNotNull('featured')->first();
        return view('frontend.homepage',[
            "general" => $this->general,
            "home1" => Page::where('page','Home 1')->first(),
            "page" => "Home",
            "featured" => $featured
        ]);
    }

    function flagship()
    {
        return view('frontend.flagship',[
            "general" => $this->general,
            "flagship" => Flagship::orderBy('index','asc')->get(),
            "page" => "Flagship"
        ]);
    }

    function inspiration()
    {
        return view('frontend.inspiration',[
            "general" => $this->general,
            "inspiration" => Inspiration::orderBy('index','asc')->get(),
            "page" => "Insipiration"
        ]);
    }

    function landing()
    {
        $this->saveUser();
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
            "people" => People::orderBy('index','asc')->get(),
            "partner" => Partner::orderBy('index','asc')->get(),
            "page" => "Our People",
            "pege1" => Page::where('page', 'Our People 1')->first(),
            "pege2" => Page::where('page', 'Our People 2')->first(),
        ]);
    }

    function project()
    {
        return view('frontend.project',[
            "general" => $this->general,
            "project" => Project::where('type' , 'project')->orderBy('index','asc')->get(),
            "page" => "Project"
        ]);
    }

    function tribes()
    {
        return view('frontend.tribes',[
            "general" => $this->general,
            "service" => Service::orderBy('index', 'asc')->get(),
            "page" => "Tribes"
        ]);
    }

    function flagship_single(Flagship $flagship)
    {
       return view('frontend.flagship-single',[
           "general" => $this->general,
           "page" => "Detail Flagship"
       ]);
    }

    function tribe_single(Service $tribe)
    {
       return view('frontend.tribes-single',[
           "general" => $this->general,
           "page" => "Detail Tribe"
       ]);
    }

    function project_single(Project $project)
    {
       return view('frontend.project-single',[
           "general" => $this->general,
           "project" => $project,
           "page" => "Detail Project"
       ]);
    }

    function inspiration_single(Inspiration $inspiration)
    {
       return view('frontend.inspiration-single',[
           "general" => $this->general,
           "page" => "Detail Inspiration"
       ]);
    }


}
