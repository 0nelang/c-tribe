<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard.welcome');
});

Route::get('/admin/page', function () {
    return view('dashboard.welcome');
});

Route::get('/admin/general', function () {
    return view('dashboard.welcome');
});

Route::get('/admin/people', function () {
    return view('dashboard.welcome');
});

Route::get('/admin/partners', function () {
    return view('dashboard.welcome');
});

Route::get('/admin/service', function () {
    return view('dashboard.welcome');
});

Route::get('/admin/project', function () {
    return view('dashboard.welcome');
});