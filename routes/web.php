<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Auth;


Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::get('/', function () {
    if (Auth::guard('admin')->check()) {
        return redirect()->route('admin.dashboard');
    }

    return view('welcome');
});



Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/kelola_tel', function () {
        return view('kelola_tel');
    })->name('admin.dashboard');

    Route::get('/history', function () {
        return view('history');
    });

    Route::get('/profile', function () {
        return view('profile');
    });
});
