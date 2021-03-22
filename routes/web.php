<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/login', [UserController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);
Route::get('/taksirtol', [HomeController::class, 'calcTol']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::prefix('/beritatol')->group(function () {
    Route::get('/', [HomeController::class, 'newsTol']);
    Route::get('/{id}', [HomeController::class, 'loadnews']);
});

