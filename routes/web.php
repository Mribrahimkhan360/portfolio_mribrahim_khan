<?php

use App\Http\Controllers\BannerController;
use App\Http\Controllers\BiographyController;
use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    //admin
//    Route::post('/banner/create',[BannerController::class,'create'])->name('banner.create');
//    Route::get('/banner/add',[BannerController::class,'index'])->name('banner.add');
//    Route::get('/banner/manage',[BannerController::class,'manage'])->name('banner.manage');
//

    // Banner
    Route::get('/banner/add', [BannerController::class, 'index'])->name('banner.add');
    Route::post('/banner/create', [BannerController::class, 'create'])->name('banner.create');
    Route::get('/banner/manage', [BannerController::class, 'manage'])->name('banner.manage');
    Route::get('/banner/edit/{id}', [BannerController::class, 'edit'])->name('banner.edit');
    Route::post('/banner/update/{id}', [BannerController::class, 'update'])->name('banner.update');
    Route::get('/banner/delete/{id}', [BannerController::class, 'delete'])->name('banner.delete');

    // Biography
    Route::get('/biography/add', [BiographyController::class, 'index'])->name('biography.add');
    Route::post('/biography/create', [BiographyController::class, 'create'])->name('biography.create');
    Route::get('/biography/manage', [BiographyController::class, 'manage'])->name('biography.manage');
    Route::get('/biography/edit/{id}', [BiographyController::class, 'edit'])->name('biography.edit');
    Route::post('/biography/update/{id}', [BiographyController::class, 'update'])->name('biography.update');
    Route::get('/biography/delete/{id}', [BiographyController::class, 'delete'])->name('biography.delete');

    //Experience
    Route::get('/experience/add', [ExperienceController::class, 'index'])->name('experience.add');
    Route::post('/experience/create', [ExperienceController::class, 'create'])->name('experience.create');
    Route::get('/experience/manage', [ExperienceController::class, 'manage'])->name('experience.manage');
    Route::get('/experience/edit/{id}', [ExperienceController::class, 'edit'])->name('experience.edit');
    Route::post('/experience/update/{id}', [ExperienceController::class, 'update'])->name('experience.update');
    Route::get('/experience/delete/{id}', [ExperienceController::class, 'delete'])->name('experience.delete');
});
