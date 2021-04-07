<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::prefix('/beritatol')->group(function () {
    Route::get('/', [HomeController::class, 'newsTol'])->name('newstol');
    Route::get('/{id}', [HomeController::class, 'loadnews'])->name('shownews');
});
