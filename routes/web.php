<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

Route::get('/admin/login', [LoginController::class,'showLoginForm'])->name('login');
Route::post('/login-success', [LoginController::class, 'login'])->name('login.success');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [Homecontroller::class, 'index'])->name('home');
Route::get('car-details/{carId}', [HomeController::class, 'carInfo'])->name('car.info');
Route::get('/car-stock', [HomeController::class, 'carStock'])->name('car.stock');
Route::get('/about-prestige', [HomeController::class, 'aboutUs'])->name('aboutus');
Route::get('contact-prestige', [HomeController::class, 'contactUs'])->name('contact');


Route::middleware(['adminAuth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/car-listing', [AdminController::class, 'carListing'])->name('car.list');
    Route::post('/create-carlist', [AdminController::class, 'storeCar'])->name('store.car');
    Route::get('/edit-car/{carId}', [AdminController::class, 'editCar'])->name('edit.car');
    Route::post('/update-car/{carId}', [AdminController::class, 'updateCar'])->name('update.car');
    Route::delete('/delete-car/{carId}',[AdminController::class,'deleteCar'])->name('delete.car');
    Route::delete('/car/{id}/delete-main-image', [AdminController::class, 'deleteMainImage']);
    Route::delete('/car/{id}/delete-gallery-image/{image}', [AdminController::class, 'deleteGalleryImage']);

});