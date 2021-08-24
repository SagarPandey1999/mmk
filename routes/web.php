<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;
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

Route::get('/',[HomeController::class,'index']);
Route::get('login',[UserAuthController::class,'login']);
Route::get('register',[UserAuthController::class,'register']);
Route::post('create',[UserAuthController::class,'create'])->name('auth.create');
Route::post('check',[UserAuthController::class,'check'])->name('auth.check');
Route::get('users',[UserAuthController::class,'profile'])->name('users');
Route::get('user/{id}',[UserAuthController::class,'delete'])->name('user.delete');
Route::get('logout',[UserAuthController::class,'logout']);