<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\FlagshipController;
use App\Http\Controllers\InspirationController;
use Illuminate\Support\Facades\Artisan;

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





Auth::routes();
Route::get('register', function () {return abort(500);});
Route::get('/password/reset', function () {return abort(500);});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AuthController::class, 'visitor']);
    Route::get('/admin/general', [GeneralController::class, 'general']);
Route::put('/admin/general/{general:id}', [GeneralController::class, 'update']);

Route::resource('/admin/inspiration', InspirationController::class);
Route::post('/admin/inspiration/position', [InspirationController::class, 'position']);


Route::resource('/admin/project', ProjectController::class);
Route::post('/admin/project/image/{id}', [ProjectController::class, 'imgdel']);
Route::post('/admin/project/position', [ProjectController::class, 'position']);



Route::resource('/admin/flagship', FlagshipController::class);
Route::post('/admin/flagship/image/{id}', [FlagshipController::class, 'imgdel']);
Route::post('/admin/flagship/position', [FlagshipController::class, 'position']);


Route::resource('/admin/service', ServiceController::class);
Route::post('/admin/service/position', [ServiceController::class, 'position']);


Route::get('/admin/partners', [PartnerController::class, 'index'])->name('partner.index');
Route::get('/admin/partners/create', [PartnerController::class, 'create'])->name('partners.create');
Route::post('/admin/partners', [PartnerController::class, 'store'])->name('partners.store');
Route::get('/admin/partners/{partner:id}', [PartnerController::class, 'edit'])->name('partner.edit');
Route::put('/admin/partners/update/{partner:id}', [PartnerController::class, 'update'])->name('partner.update');
Route::post('/admin/partners/delete/{partner:id}', [PartnerController::class, 'destroy'])->name('partner.delete');
Route::post('/admin/partners/position', [PartnerController::class, 'position'])->name('partner.position');

Route::resource('/admin/page', PageController::class);

Route::resource('admin/people', PeopleController::class);
Route::post('/admin/people/position', [PeopleController::class, 'position']);


Route::resource('/admin/partners', PartnerController::class);

Route::get('/admin/setting',[AuthController::class,'index']);
Route::put('/admin/reset',[AuthController::class,'password']);
});

//frontend
Route::get('/', [HomeController::class, 'landing']);

Route::get('/flagship', [HomeController::class,'flagship']);

Route::get('/landing', [HomeController::class,'homepage']);
Route::get('/inspiration',[HomeController::class,'inspiration']);
Route::get('/our-people', [HomeController::class,'our_people']);

Route::get('/project', [HomeController::class,'project']);

Route::get('/tribes',[HomeController::class,'tribes']);
Route::get('/storage/link', function ()
{
    Artisan::call('storage:link');

});

// single page
Route::get('/tribe/detail/{service:slug}',[HomeController::class,'tribe_single']);
Route::get('/project/detail/{project:slug}',[HomeController::class,'project_single']);
Route::get('/inspiration/detail/{inspiration:slug}',[HomeController::class,'inspiration_single']);
Route::get('/flagship/detail/{flagship:slug}/{index}',[HomeController::class,'flagship_single']);
// end single page
