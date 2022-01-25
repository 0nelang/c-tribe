<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
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
        $agent = Visitor::pluck('user_agent')->toArray();
        $ip = Visitor::pluck('ip_address')->toArray();
        if (in_array($_SERVER['HTTP_USER_AGENT'], $agent) && in_array($_SERVER['SERVER_ADDR'], $ip) ) {
            Visitor::create([
                'user_agent' => $_SERVER['HTTP_USER_AGENT'],
                'ip_address' => $_SERVER['SERVER_ADDR']
            ]);
        }
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
