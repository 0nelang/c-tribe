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

    public function update(Request $request, Menu $menu) {
        if ($request->custom) {
            $custom = true;
            $request->validate([
                "custom_url" => "nullable|sometimes|unique:menus|not_in:project,our-people,tribes,flagship,shop,inspiration"
            ]);
            Menu::findOrFail($menu->id)->update([
                'custom' => $custom,
                'custom_name' => $request->custom_name,
                'custom_url' => $request->custom_url,
            ]);
        }
        return redirect(route('menu.index'));
    }
}
