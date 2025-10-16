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

Route::view('/movies' , 'app.movies.index')->name('movies');
Route::view('/detail' , 'app.movies.detail')->name('movies.detail');
Route::view('/booking' , 'app.booking.index')->name('booking');
Route::view('/checkout' , 'app.booking.checkout')->name('booking.checkout');
Route::view('/shop' , 'app.shop.index')->name('shop');
Route::view('/history' , 'app.history.index')->name('history');
Route::view('/my-ticket' , 'app.user.ticket')->name('my-ticket');
