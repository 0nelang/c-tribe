<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Page;
use App\Models\People;
use App\Models\General;
use App\Models\Partner;
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
        $this->menu = Menu::orderBy('index', 'asc')->get();
    }


    function homepage()
    {
        $this->saveUser();
        $featured[] = Flagship::whereNotNull('featured')->first();
        if ($featured[0] != null) {
            $featured[0]->link = 'flagship';
            $featured[0]->tag = 'OUR ACTION';
        }

        $featured[] = Inspiration::whereNotNull('featured')->first();
        if ($featured[1] != null){
            $featured[1]->link = 'inspiration';
            $featured[1]->tag = 'INSPIRATION';
        }

        $featured[] = Project::where('type', 'project')->whereNotNull('featured')->first();
        if ($featured[2] != null) {
            $featured[2]->link = 'project';
            $featured[2]->tag = 'PROJECTS';
        }


        $featured[] = Project::where('type', 'person')->whereNotNull('featured')->first();
        if ($featured[3] != null){
            $featured[3]->link = 'project';
            $featured[3]->tag = 'PARTNERS';
        }

        return view('frontend.homepage',[
            "general" => $this->general,
            "home1" => Page::where('page','Home 1')->first(),
            "page" => "Pelarian",
            "featured" => $featured,
            "menu" => $this->menu,
        ]);
    }

    function flagship($url = 'flagship')
    {
        $flagship = Flagship::where('unpublished', 0)->orderBy('index','asc')->get();
        $count = $flagship->count();
        for ($i=0; $i < $count; $i++) {
            if ($flagship[$i]->detailImage != null || $flagship[$i]->mainImage != null) {
                $dummy = $flagship[$i];
                $flagship[$i] = $flagship[0];
                $flagship[0] = $dummy;
                $i = $flagship->count();
            }
        }

        return view('frontend.flagship',[
            "general" => $this->general,
            "flagship" => $flagship,
            "page" => "Flagship",
            "url" => $url,
            "menu" => $this->menu,
        ]);
    }

    function inspiration($url = "inspiration")
    {
        $Inspiration = Inspiration::where('unpublished', 0)->orderBy('index','asc')->get();
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
            "page" => "Insipiration",
            "url" => $url,
            "menu" => $this->menu,
        ]);
    }

    function landing()
    {
        $this->saveUser();
        return view('frontend.landing',[
            "general" => $this->general,
            "landing1" => Page::where('page' , 'Landing 1')->first(),
            "landing2" => Page::where('page','Landing 2')->first(),
            "page" => "Pelarian",
            "menu" => $this->menu,
        ]);
    }

    function our_people()
    {
        return view('frontend.our-people',[
            "general" => $this->general,
            "people" => People::where('unpublished', 0)->orderBy('index','asc')->get(),
            "partner" => Partner::where('unpublished', 0)->orderBy('index','asc')->get(),
            "page" => "Our People",
            "pege1" => Page::where('page', 'Our People 1')->first(),
            "pege2" => Page::where('page', 'Our People 2')->first(),
            "menu" => $this->menu,
        ]);
    }

    function project($url = 'project')
    {
        return view('frontend.project',[
            "general" => $this->general,
            "project" => Project::where([['type' , 'project'],['unpublished', 0]])->orderBy('index','asc')->get(),
            "url" => $url,
            "page" => "Project",
            "menu" => $this->menu,
        ]);
    }

    function tribes($url = 'tribes')
    {
        return view('frontend.tribes',[
            "general" => $this->general,
            "service" => Service::where('unpublished', 0)-> orderBy('index', 'asc')->get(),
            "page" => "Tribes",
            "url" => $url,
            "menu" => $this->menu,
        ]);
    }

    function flagship_single($flagship,$index)
    {
        $flagship = Flagship::where('slug', $flagship)->first();
        return view('frontend.flagship-single',[
            "general" => $this->general,
            "page" => "Detail Flagship",
            "f" => $flagship,
            "index" => $index,
            "menu" => $this->menu,
        ]);
    }

    function tribe_single($service)
    {
        $service = Service::where('slug', $service)->first();
        return view('frontend.tribes-single',[
            "general" => $this->general,
            "page" => "Detail Tribe",
            "t" => $service,
            "menu" => $this->menu,
        ]);
    }

    function project_single( $project)
    {
        $project = project::where('slug', $project)->first();
        return view('frontend.project-single',[
            "general" => $this->general,
            "project" => $project,
            "page" => "Detail Project",
            "menu" => $this->menu,
        ]);
    }

    function inspiration_single($inspiration)
    {
        $inspiration = inspiration::where('slug', $inspiration)->first();
        return view('frontend.inspiration-single',[
            "general" => $this->general,
            "page" => "Detail Inspiration",
            "i" => $inspiration,
            "menu" => $this->menu,
        ]);
    }

    function custom(Menu $menu)
    {
        switch ($menu->id){
            case 1:
                return $this->project($menu->custom_url);
                break;
            case 2:
                return $this->our_people();
                break;
            case 3:
                return $this->tribes($menu->custom_url);
                break;
            case 4:
                return $this->flagship($menu->custom_url);
                break;
            case 5:
                return $this->shop();
                break;
            case 6:
                return $this->inspiration($menu->custom_url);
                break;
        }
    }

    function custom_single(Menu $menu, $single, $index = null)
    {
        switch ($menu->id){
            case 1:
                return $this->project_single($single);
                break;
            case 2:
                return $this->our_people();
                break;
            case 3:

                return $this->tribes_single($single);
                break;
            case 4:
                return $this->flagship_single($single, $index);
                break;
            case 5:
                return $this->shop();
                break;
            case 6:
                return $this->inspiration_single($single);
                break;
        }
    }

}
