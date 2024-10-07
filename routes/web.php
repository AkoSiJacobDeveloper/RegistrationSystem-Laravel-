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


// Admin
Route::get('/admin/register', [AdminController::class, 'showRegistration'])->name('admin.register');

// User
Route::get('/register', [AdminController::class, 'showRegistration'])->name('register');

// Registration Form
Route::post('/register', [AdminController::class, 'registerEvent'])->name('registerEvent');

// Route for displaying the home page
Route::get('/home', [AdminController::class, 'showHome'])->name('home');

Route::resource('events', EventController::class);

Route::get('/home', [AdminController::class, 'showHome'])->name('home');
Route::get('/registration', [AdminController::class, 'showRegistration'])->name('registration.form');
Route::post('/register-event', [AdminController::class, 'registerEvent'])->name('register.event');
Route::get('/events/{id}/edit', [AdminController::class, 'editEvent'])->name('events.edit');
Route::put('/events/{id}', [AdminController::class, 'updateEvent'])->name('events.update');
Route::delete('/events/{id}', [AdminController::class, 'deleteEvent'])->name('events.destroy');


Route::resource('events', EventController::class);

