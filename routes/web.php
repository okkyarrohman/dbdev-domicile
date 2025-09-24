<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeetingNEventController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\Admin\PromoController;
use App\Http\Controllers\Admin\ReportController as AdminReportController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\MenuController as AdminMenuController;

route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
route::get('/', [HomeController::class, 'index'])->name('home');
route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');
route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');
route::get('/contact', [ContactController::class, 'index'])->name('contact');
route::get('/meeting&event', [MeetingNEventController::class, 'index'])->name('meeting');
route::get('/promotion', [PromotionController::class, 'index'])->name('promotion');
Route::post('/send-message', [ContactController::class, 'store'])->name('contact.store');
route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/admin/login', [SessionController::class, 'showLogin'])->name('admin.login')->middleware('guest');
Route::post('/admin/login', [SessionController::class, 'login']);
Route::post('/admin/logout', [SessionController::class, 'logout'])->name('admin.logout');
// Protected routes
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('home');
    Route::get('/menu', [AdminMenuController::class, 'index'])->name('menu');
    Route::get('/promotion', [PromoController::class, 'index'])->name('promo');
    Route::post('/promotion/store', [PromoController::class, 'store'])->name('promo.store');
    Route::put('/promotion/{id}', [PromoController::class, 'update'])->name('promo.update');
    Route::delete('/promotion/{id}', [PromoController::class, 'destroy'])->name('promo.destroy');
    Route::post('/benner-promotion/store', [PromoController::class, 'bennerStore'])->name('banner.store');
    Route::put('/benner-promotion/{id}', [PromoController::class, 'BennerUpdate'])->name('banner.update');
    Route::delete('/benner-promotion/{id}', [PromoController::class, 'bennerDestroy'])->name('banner.destroy');
    Route::get('/report', [AdminReportController::class, 'index'])->name('report');
    Route::post('/menu/store', [AdminMenuController::class, 'store'])->name('menu.store');
    Route::put('/menu/{id}', [AdminMenuController::class, 'update'])->name('menu.update');
    Route::delete('/menu/{id}', [AdminMenuController::class, 'destroy'])->name('menu.destroy');
    Route::resource('galleries', AdminGalleryController::class);
});
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');