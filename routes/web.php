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
use App\Http\Controllers\konsultasiController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\userController;
use App\Http\Controllers\formworkshopController;
use App\Http\Controllers\Staff\LoginController;
use App\Http\Controllers\Staff\KonsultasisController;
use App\Models\center_history;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.layout');
});
Route::get('/', [homeprogramController::class, 'show'])->name('home');
Route::get('/login', [userController::class, 'login'])->name('login');

Route::get('/logindaftar', [UserController::class, 'showLoginForm'])->name('login.layout');

Route::post('/proseslogin', [userController::class, 'proseslogin'])->name('proseslogin');

Route::get('/register', [userController::class, 'register'])->name('register.layout');
Route::post('/prosesregister', [userController::class, 'daftar'])->name('prosesregister');
Route::get('/logout', [userController::class, 'logout'])->name('logoutuser');
Route::get('/kontak', [PageController::class, 'contact'])->name('page.contact');
Route::get('/workshop', [PageController::class, 'workshop'])->name('page.workshop');
Route::get('/progam-unggulan', [PageController::class, 'program'])->name('page.program');
Route::get('/konsultasi', [PageController::class, 'konsultasi'])->name('page.konsultasi');
Route::get('/tentang-kami', [PageController::class, 'aboutUs'])->name('page.aboutUs');
Route::get('/galeri', [PageController::class, 'galeri'])->name('page.galeri');
Route::get('/blog', [PageController::class, 'blog'])->name('page.blog');
Route::get('/e-books', [PageController::class, 'ebook'])->name('page.ebook');
Route::get('/grafik', [PageController::class, 'grafik'])->name('page.grafik');


    Route::get('/konsultasi/staff', [konsultasiController::class, 'daftarStaff'])->name('konsultasi.staff');
    Route::get('/konsultasi/mulai/{staff_id}', [konsultasiController::class, 'mulai'])->name('konsultasi.mulai');
    Route::get('/konsultasi/chat/{konsultasi}', [konsultasiController::class, 'chat'])->name('konsultasi.chat');
    Route::post('/konsultasi/chat/{konsultasi}/kirim', [konsultasiController::class, 'kirimPesan'])->name('konsultasi.kirim');


Route::prefix('staff')->name('staff.')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);

    Route::middleware('auth:staff')->group(function () {
        Route::get('/dashboard', [KonsultasisController::class, 'dashboard'])->name('dashboard');
        Route::get('/konsultasi/{konsultasi}', [KonsultasisController::class, 'chat'])->name('konsultasi.chat');
        Route::post('/konsultasi/{konsultasi}/kirim', [KonsultasisController::class, 'kirimPesan'])->name('konsultasi.kirim');
    });
});

// Route::middleware(['auth'])->group(function (){

// });

Route::get('/formworkshop/register/{id}', [formworkshopController::class, 'register'])->name('formworkshop.register');
Route::resource('formworkshop', formworkshopController::class)->middleware('auth');

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
