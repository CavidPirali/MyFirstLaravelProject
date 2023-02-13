<?php

use App\Http\Controllers\backend\Controllers\backend\AdminController;
use App\Http\Controllers\backend\Controllers\ProfileController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\BlogDetailController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\MainController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\ServiceDetailController;
use App\Http\Controllers\frontend\TeamController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return view('frontend.pages.home');
})->middleware(['auth'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/main', [MainController::class, 'index'])->name('main');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/service_details', [ServiceDetailController::class, 'index'])->name('service_details');
Route::get('/blog_details', [BlogDetailController::class, 'index'])->name('blog_details');
Route::get('/team', [TeamController::class, 'index'])->name('team');

//Route::get('/admin', [TeamController::class, 'index'])->name('admin');
//Route::get('/admin', [TeamController::class, 'create'])->name('team');
//Route::post('/admin', [TeamController::class, 'store'])->name('team');
//Route::get('/admin/{id}', [TeamController::class, 'edit'])->name('team');
//Route::post('/admin', [TeamController::class, 'update'])->name('team');
//Route::get('/admin/{id}', [TeamController::class, 'delete'])->name('team');


Route::resource('admin', AdminController::class);

require __DIR__ . '/auth.php';


