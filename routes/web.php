<?php

use App\Http\Controllers\GeneralController;
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

Route::get('/admin/general', [GeneralController::class, 'general']);
Route::post('/admin/general/{general:id}', [GeneralController::class, 'update']);

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

Route::get('/admin/people', [PeopleController::class, 'index']);

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