<?php

namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\URL;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveUser()
    {

        dd($_SERVER);
        // $agent = new Agent();
        // // dd($agent);

        // echo $_SERVER['HTTP_USER_AGENT'];
        // // print_r($agent);

        // exit;
        // $browser = $agent->platform();
        // dd($browser);
        // dd(get_browser(request()->header('User-Agent'), true));
        // dd(URL::current());
        // dd(request()->ip());
    }
}
