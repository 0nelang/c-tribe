<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
    public function index() {
        return view('dashboard.menu.index', [
            'menu' => Menu::orderBy('index', 'asc')->get(),
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
            $request->custom_url = str_replace(' ','-', $request->custom_url);
            $request->validate([
                "custom_url" => ['nullable','sometimes', Rule::unique('menus')->ignore($menu->id, 'id'), 'not_in:project,our-people,tribes,flagship,shop,inspiration', 'regex:/^[\pL\s\-]+$/u']
            ]);
            // $request->validate([
            //     "custom_url" => 'unique:table_name,column_name,'.$this->id.',id'
            // ]);
            Menu::findOrFail($menu->id)->update([
                'custom' => $custom,
                'disabled' => $disabled,
                'custom_name' => $request->custom_name,
                'custom_url' => $request->custom_url,
            ]);
        }else{
            Menu::findOrFail($menu->id)->update(['custom' => false, 'disabled' => $disabled,]);
        }
        Alert::success('Success', 'Succesfully Update Data');
        return redirect(route('menu.index'));
    }

    public function position(Request $request)
    {
        foreach ($request->id as $index => $id) {
            Menu::find($id)->update(['index' => $index + 1]);
        }

        return response()->json('success');

    }

    public function reset()
    {
        $reset = Menu::all();
        foreach ($reset as $menu) {
            // dd($menu);
            $menu->update(['index' => $menu->id]);
        }
        return redirect('/admin/menu');
    }
}
