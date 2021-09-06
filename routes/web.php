<?php

use App\Http\Controllers\AdminController;
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
Route::get('/forget-password',[UserAuthController::class,'forgetpassword'])->name('forgetpassword');
Route::post('/user-forget-password', [UserAuthController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [UserAuthController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [UserAuthController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::post('contact',[HomeController::class,'contact'])->name('contact');
Route::get('/contacts',[AdminController::class,'contactindex'])->name('contacts');
Route::get('/delete-contact/{id}',[AdminController::class,'delete'])->name('contact.delete');
Route::get('/company',[AdminController::class,'company'])->name('company');
Route::get('/company/create',[AdminController::class,'companycreate'])->name('company.create');
Route::post('/company/insert',[AdminController::class,'companyinsert'])->name('company.insert');
Route::get('/company/delete/{id}',[AdminController::class,'companydelete'])->name('company.delete');
Route::get('/company/edit/{id}',[AdminController::class,'companyedit'])->name('company.edit');
Route::post('/company/update',[AdminController::class,'companyupdate'])->name('company.update');
Route::get('/services',[AdminController::class,'services'])->name('services');
Route::get('/service/create',[AdminController::class,'servicecreate'])->name('service.create');
Route::post('/service/insert',[AdminController::class,'serviceinsert'])->name('service.insert');
Route::get('/service/delete/{id}',[AdminController::class,'servicedelete'])->name('service.delete');
Route::get('/service/edit/{id}',[AdminController::class,'serviceedit'])->name('service.edit');
Route::post('/service/update/{id}',[AdminController::class,'serviceupdate'])->name('service.update');
Route::get('/map',[AdminController::class,'map'])->name('map');
Route::post('/map/insert',[AdminController::class,'mapinsert'])->name('map.insert');