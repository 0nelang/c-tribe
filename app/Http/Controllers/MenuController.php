<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        if ($request->disabled) {
            $disabled = true;
        }else {
            $disabled = false;
        }
        if ($request->custom) {
            $custom = true;
            $request->validate([
                "custom_url" => [Rule::unique('menu')->ignore($this->menu->id, 'id'), 'not_in:project,our-people,tribes,flagship,shop,inspiration', 'regex:/^[\pL\s\-]+$/u']
            ]);
            Menu::findOrFail($menu->id)->update([
                'custom' => $custom,
                'disabled' => $disabled,
                'custom_name' => $request->custom_name,
                'custom_url' => $request->custom_url,
            ]);
        }else{
            Menu::findOrFail($menu->id)->update(['custom' => false, 'disabled' => $disabled,]);
        }
        return redirect(route('menu.index'));
    }
}