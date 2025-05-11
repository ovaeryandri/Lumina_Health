<?php


use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoggedInAdmin;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\userController;
use App\Http\Middleware\LoginCheckAdmin;
use App\Http\Controllers\adminController;
use App\Http\Controllers\aboutstaffController;
use App\Http\Controllers\blogcategoryController;
use App\Http\Controllers\BlogNewsController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\homeprogramController;
use App\Http\Controllers\formworkshopController;
use App\Http\Controllers\homeworkshopController;
use App\Http\Controllers\downloadebookController;
use App\Http\Controllers\galerydokumentasiController;
use App\Http\Controllers\galerytestimonivideoController;
use App\Http\Controllers\SearchController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/grafik', [PageController::class, 'grafik'])->name('page.grafik');

Route::middleware(LoginCheckAdmin::class)->group(function () {
    Route::get('/loginadmin', [DashboardAdmin::class, 'loginadmin'])->name('loginadmin');
    Route::post('/prosesloginadmin', [DashboardAdmin::class, 'prosesloginadmin'])->name('prosesloginadmin');
});

Route::middleware(LoggedInAdmin::class)->group(function () {
    Route::resource('formworkshop', formworkshopController::class);
    Route::resource('aboutstaff', aboutstaffController::class);
    Route::resource('admin', adminController::class);
    Route::resource('blogcategory', blogcategoryController::class);
    Route::resource('blognews', BlogNewsController::class);
    Route::resource('blogpost', BlogPostController::class);
    Route::resource('downloadebook', downloadebookController::class);
    Route::resource('galerydokumentasi', galerydokumentasiController::class);
    Route::resource('galerytestimonivideo', galerytestimonivideoController::class);
    Route::resource('homeprogram', homeprogramController::class);
    Route::resource('homeworkshop', homeworkshopController::class);
    Route::resource('user', userController::class);
    Route::get('/logoutadmin', [DashboardAdmin::class, 'logoutadmin'])->name('logoutadmin');
});

Route::post('program/{program}/join', [homeprogramController::class, 'join'])->name('program.join')->middleware('auth:akun_user');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');

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


Route::get('/blogSearch', [SearchController::class, 'search'])->name('blog.search');

