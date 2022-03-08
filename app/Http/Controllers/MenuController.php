<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index() {
        return view('dashboard.menu.index', [
            'menu' => Menu::all(),
            'page' => 'Menu'
        ]);
    }

    public function edit($id) {
        return view('dashboard.menu.edit', [
            'menu' => Menu::findOrFail($id),
            'page' => 'Menu'
        ]);
    }
}
