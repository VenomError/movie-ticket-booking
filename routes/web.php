<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('app.index');
})->name('home');

// Authentication
Route::controller(AuthController::class)->middleware('guest')->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/loginProcess', 'loginProcess')->name('loginProcess');
    Route::get('/register', 'register')->name('register');
    Route::post('/registerProcess', 'registerProcess')->name('registerProcess');
});

Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth', 'role'])->group(function () {

    Route::get('/', fn() => 'Dashboard');

});
