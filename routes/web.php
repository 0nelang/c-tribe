<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard.welcome',[
        "page" => "main"
    ]);
});

Route::get('/admin/page', function () {
    return view('dashboard.welcome',[
        "page" => "page"
    ]);
});

Route::get('/admin/general', function () {
    return view('dashboard.general',[
        "page" => "general"
    ]);
});

Route::resource('admin/people', PeopleController::class);

Route::get('/admin/partners', function () {
    return view('dashboard.welcome',[
        "page" => "partners"
    ]);
});

Route::get('/admin/service', function () {
    return view('dashboard.welcome',[
        "page" => "service"
    ]);
});

Route::get('/admin/project', function () {
    return view('dashboard.welcome',[
        "page" => "project"
    ]);
});