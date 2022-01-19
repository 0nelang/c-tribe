<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard.admin',[
            "page" => "admin",
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
}
