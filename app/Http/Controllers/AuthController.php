<?php

namespace App\Http\Controllers;

use App\Charts\DailyUsersChart;
use App\Models\Flagship;
use App\Models\Project;
use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard.admin',[
            "page" => "Setting",
            ]);
    }

    public function password(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        User::find($request->id)->update($validated);
        return redirect()->back();
    }

    public function visitor(DailyUsersChart $chart)
    {
        return view('dashboard.visitor', [
            "page" => "Admin",
            "today" => Visitor::whereDate('created_at', Carbon::today())->count(),
            "all_visitor" => Visitor::all()->count(),
            "project" => Project::all()->count(),
            "flagship" => Flagship::all()->count(),
            "chart" => $chart->build()
        ]);
    }
}
