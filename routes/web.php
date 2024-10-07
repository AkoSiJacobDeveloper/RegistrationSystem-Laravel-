<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/home', function () {
    return view('HomePage.Home');
})->name('home');

Route::get('/', function () {
    return view('LandingPage.MainLanding');
});


// Admin
Route::get('/admin/register', [AdminController::class, 'showRegistration'])->name('admin.register');

// User
Route::get('/register', [AdminController::class, 'showRegistration'])->name('register');

// Registration Form
Route::post('/register', [AdminController::class, 'registerEvent'])->name('registerEvent');

