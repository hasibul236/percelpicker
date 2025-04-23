<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::put('/user/storeProfile', [UserController::class, 'storeProfile'])->name('user.storeProfile');
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::post('/pickup', [UserController::class, 'storePickup'])->name('user.storePickup');
    Route::get('/pickup', [UserController::class, 'PickupForm'])->name('user.PickupForm');
});

// Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'manageUsers'])->name('admin.users');
    Route::post('/admin/storeuser', [AdminController::class, 'storeUser'])->name('admin.storeUser');
    Route::get('/admin/pickups', [AdminController::class, 'viewPickups'])->name('admin.viewPickups');
    Route::get('/admin/adduser', [AdminController::class, 'viewAddUser'])->name('admin.viewAddUser');
    Route::get('/admin/downloadPdf/{id}', [AdminController::class, 'downloadPDF'])->name('admin.downloadPdf');
});
