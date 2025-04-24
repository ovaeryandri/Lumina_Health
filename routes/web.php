<?php

use App\Http\Controllers\aboutstaffController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\blogcategoryController;
use App\Http\Controllers\blognewsController;
use App\Http\Controllers\blogpostController;
use App\Http\Controllers\centerfasilitasController;
use App\Http\Controllers\centerhistoryController;
use App\Http\Controllers\downloadebookController;
use App\Http\Controllers\galerydokumentasiController;
use App\Http\Controllers\galerytestimonivideoController;
use App\Http\Controllers\homeprogramController;
use App\Http\Controllers\homeworkshopController;
use App\Http\Controllers\userController;
use App\Models\center_history;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::resource('aboutstaff', aboutstaffController::class);
Route::resource('admin', adminController::class);
Route::resource('blogcategory', blogcategoryController::class);
Route::resource('blognews', blognewsController::class);
Route::resource('blogpost', blogpostController::class);
Route::resource('centerfasilitas', centerfasilitasController::class);
Route::resource('centerhistory', centerhistoryController::class);
Route::resource('downloadebook', downloadebookController::class);
Route::resource('galerydokumentasi', galerydokumentasiController::class);
Route::resource('galerytestimonivideo', galerytestimonivideoController::class);
Route::resource('homeprogram', homeprogramController::class);
Route::resource('homeworkshop', homeworkshopController::class);
Route::resource('user', userController::class);
