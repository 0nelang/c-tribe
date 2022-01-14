<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PartnerController;

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
Route::put('/admin/general/{general:id}', [GeneralController::class, 'update']);

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

Route::get('/admin/inspiration', function () {
    return view('dashboard.welcome',[
        "page" => "inspiration"
    ]);
});

Route::get('/admin/project', function () {
    return view('dashboard.welcome',[
        "page" => "project"
    ]);
});

Route::resource('/admin/partners', PartnerController::class);