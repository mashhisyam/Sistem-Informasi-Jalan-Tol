<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// use App\Http\Livewire\MapLocation;

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

// auth route
Auth::routes();

// Route::get('/login', [UserController::class, 'index']);
// Route::get('/register', [UserController::class, 'register']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/taksirtol', [HomeController::class, 'calcTol'])->name("taksirtol");
Route::post('/taksirtol', [HomeController::class, 'calcTol'])->name("taksirtol");
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/edit-profile/{id}', [HomeController::class, 'edit'])->name('edit');
Route::post('/update-profile/{id}', [HomeController::class, 'update'])->name('update');
Route::get('/contact', [HomeController::class, 'showContactForm']);
Route::post('/contact', [HomeController::class, 'sendMail']);
Route::prefix('/beritatol')->group(function () {
    Route::get('/', [HomeController::class, 'newsTol'])->name('newstol');
    Route::get('/{id}', [HomeController::class, 'loadnews'])->name('shownews');    
});
Route::get('/create-berita', [HomeController::class, 'createNews'])->name('createNews');
Route::post('/simpan-berita', [HomeController::class, 'storeNews'])->name('storeNews');
Route::get('/harga', 'HomeController@hargaTol');
Route::get('/harga/{id}', 'HomeController@kotaAjax');
Route::get('/gate/out/{id}', [HomeController::class, 'gerbangKeluar']);


// Route::get('/map', MapLocation::class);
