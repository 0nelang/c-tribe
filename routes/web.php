<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\FlagshipController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\InspirationController;


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
Route::resource('/admin/people', PeopleController::class);
Route::resource('/admin/inspiration', InspirationController::class);

Route::resource('/admin/project', ProjectController::class);
Route::post('/admin/project/image/{id}', [ProjectController::class, 'imgdel']);

Route::get('/admin/partners', [PartnerController::class, 'index'])->name('partner.index');
Route::get('/admin/partners/create', [PartnerController::class, 'create'])->name('partner.create');
Route::post('/admin/partners', [PartnerController::class, 'store'])->name('partner.store');
Route::get('/admin/partners/{partner:id}', [PartnerController::class, 'edit'])->name('partner.edit');
Route::put('/admin/partners/update/{partner:id}', [PartnerController::class, 'update'])->name('partner.update');
Route::post('/admin/partners/delete/{partner:id}', [PartnerController::class, 'destroy'])->name('partner.delete');
Route::post('/admin/partners/position', [PartnerController::class, 'position'])->name('partner.position');

Route::get('/', function () {
    return view('dashboard.welcome',[
        "page" => "main"
    ]);
});

Route::resource('/admin/page', PageController::class);

Route::resource('admin/people', PeopleController::class);

Route::resource('/admin/partners', PartnerController::class);


// Route::get('/admin/partners', function () {
//     return view('dashboard.welcome',[
//         "page" => "partners"
//     ]);
// });

Route::get('/frontend/flagship', [HomeController::class,'flagship']);

Route::get('/frontend/homepage', [HomeController::class,'homepage']);

Route::get('/frontend/index', function (){
    return view('frontend.index');
});

Route::get('/frontend/inspiration',[HomeController::class,'inspiration']);

Route::get('/frontend/landing', [HomeController::class,'landing']);

Route::get('/frontend/our-people', [HomeController::class,'our_people']);

Route::get('/frontend/project', [HomeController::class,'project']);

Route::get('/frontend/tribes',[HomeController::class,'tribes']);

Route::get('/admin/service', function () {
    return view('dashboard.welcome',[
        "page" => "service"
    ]);
});

Route::resource('/admin/flagship', FlagshipController::class);

