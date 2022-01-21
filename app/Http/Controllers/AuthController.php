<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard.admin',[
            "page" => "Admin",
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

    public function visitor()
    {
        return view('dashboard.visitor', [
            "page" => "Visitor",
            "today" => Visitor::whereDate('created_at', Carbon::today()),
            "all_visitor" => Visitor::all()->count()
        ]);
    }
}
