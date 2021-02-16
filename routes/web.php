<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\Vendor\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
require __DIR__.'/auth.php';



Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth'])->name('dashboard');


