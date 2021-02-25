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
    Route::get('/dashboard',function (){
        return view('layouts.dashboard');
    })->name('dashboard');
});
