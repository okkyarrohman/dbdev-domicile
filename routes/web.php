<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;

Route::get('/', function () {
    return view('welcome');
});
route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');
route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');
route::get('/contact', [ContactController::class, 'index'])->name('contact');
route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/admin/login', [SessionController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [SessionController::class, 'login']);
Route::post('/admin/logout', [SessionController::class, 'logout'])->name('admin.logout');
Route::get('/admin/dashboard', [HomeController::class, 'index'])->name('admin.home')->middleware('auth');
Route::get('/admin/menu', [AdminMenuController::class, 'index'])->name('admin.menu')->middleware('auth');
Route::post('admin/menu/store', [AdminMenuController::class, 'store'])->name('menu.store');
// routes/web.php
Route::put('admin/menu/{id}', [AdminMenuController::class, 'update'])->name('menu.update');
Route::delete('admin/menu/{id}', [AdminMenuController::class, 'destroy'])->name('menu.destroy');
