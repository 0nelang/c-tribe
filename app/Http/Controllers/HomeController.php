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
        $featured[0]->link = 'flagship';
        $featured[0]->tag = 'OUR ACTION';

        $featured[] = Inspiration::whereNotNull('featured')->first();
        $featured[1]->link = 'inspiration';
        $featured[1]->tag = 'INSPIRATION';

        $featured[] = Project::where('type', 'project')->whereNotNull('featured')->first();
        $featured[2]->link = 'project';
        $featured[2]->tag = 'PROJECTS';

        $featured[] = Project::where('type', 'person')->whereNotNull('featured')->first();
        $featured[3]->link = 'project';
        $featured[3]->tag = 'PARTNERS';

        // dd($featured);
        return view('frontend.homepage',[
            "general" => $this->general,
            "home1" => Page::where('page','Home 1')->first(),
            "page" => "Pelarian",
            "featured" => $featured
        ]);
    }

    function flagship()
    {
        $flagship = Flagship::orderBy('index','asc')->get();
        $count = $flagship->count();
        for ($i=0; $i < $count; $i++) {
            if ($flagship[$i]->mainImage != null) {
                $dummy = $flagship[$i];
                $flagship[$i] = $flagship[0];
                $flagship[0] = $dummy;
                $i = $flagship->count();
            }
        }

        return view('frontend.flagship',[
            "general" => $this->general,
            "flagship" => $flagship,
            "page" => "Flagship"
        ]);
    }

    function inspiration()
    {
        $Inspiration = Inspiration::orderBy('index','asc')->get();
        $count = $Inspiration->count();
        for ($i=0; $i < $count; $i++) {
            if ($Inspiration[$i]->mainImage != null) {
                $dummy = $Inspiration[$i];
                $Inspiration[$i] = $Inspiration[0];
                $Inspiration[0] = $dummy;
                $i = $Inspiration->count();
            }
        }
        return view('frontend.inspiration',[
            "general" => $this->general,
            "inspiration" => $Inspiration,
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
           "page" => "Detail Flagship",
           "f" => $flagship
       ]);
    }

    function tribe_single(Service $service)
    {
       return view('frontend.tribes-single',[
           "general" => $this->general,
           "page" => "Detail Tribe",
           "t" => $service
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
           "page" => "Detail Inspiration",
           "i" => $inspiration
       ]);
    }


}
