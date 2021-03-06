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

Route::get('/',[\App\Http\Controllers\Main\HomeController::class,'index'])->name('home');

Route::get('/register',[\App\Http\Controllers\Auth\RegisterController::class,'index'])->name('register');
Route::post('/register',[\App\Http\Controllers\Auth\RegisterController::class,'register'])->name('register');

Route::get('/login',[\App\Http\Controllers\Auth\LoginController::class,'index'])->name('login');
Route::post('/login',[\App\Http\Controllers\Auth\LoginController::class,'authenticate'])->name('login');



Route::middleware(['auth','role:basic|premium'])->group(function (){
    Route::get('/dashboard',[\App\Http\Controllers\Dashboard\DashboardController::class,'index'])->name('dashboard');

    Route::get('/my-profile',[\App\Http\Controllers\Dashboard\ProfileController::class,'profile'])->name('my.profile');
    Route::post('/my-profile/update',[\App\Http\Controllers\Dashboard\ProfileController::class,'update'])->name('update.profile');
    Route::get('/logout',[\App\Http\Controllers\Auth\LoginController::class,'logout'])->name('logout');

});
