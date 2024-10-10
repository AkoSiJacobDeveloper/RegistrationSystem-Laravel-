<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;

Route::get('/home', function () {
    return view('HomePage.Home');
})->name('home');

Route::get('/', function () {
    return view('LandingPage.MainLanding');
});

Route::get('/about', function () {
    return view('About.About');
});

Route::get('/contact', function () {
    return view('ContactUs.Contact');
});

// Admin
Route::get('/admin/register', [AdminController::class, 'showRegistration'])->name('admin.register');

// User
Route::get('/register', [AdminController::class, 'showRegistration'])->name('register');

// Registration Form
Route::post('/register', [AdminController::class, 'registerEvent'])->name('registerEvent');

// Route for displaying the home page
Route::get('/home', [AdminController::class, 'showHome'])->name('home');

Route::resource('events', EventController::class);

Route::get('/registration', [EventController::class, 'showRegistration'])->name('registration.form');
Route::post('/register-event', [EventController::class, 'registerEvent'])->name('register.event');
Route::get('/events/{id}/edit', [EventController::class, 'edit'])->name('events.edit');
Route::put('/events/{id}', [EventController::class, 'update'])->name('events.update');
Route::delete('/events/{id}', [EventController::class, 'deleteEvent'])->name('events.destroy');


