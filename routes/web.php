<?php

use App\Http\Controllers\DTuserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\BookingController;
use App\Models\DTuser;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//Route::get('/', [UserController::class, 'index']);

Route::get('/personals', [PersonalController::class, 'index'])->name('personals.index');
Route::get('/personals/create', [PersonalController::class, 'create'])->name('personals.create');
Route::post('/personals', [PersonalController::class, 'store'])->name('personals.store');

Route::get('/booking/create2', [BookingController::class, 'create2'])->name('booking.create2');
Route::post('/booking', [BookingController::class, 'store2'])->name('booking.store2');
//Route::post('/booking', 'BookingController')->name('booking.store2');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.home');


Route::get('registrasi', function(){
    return view('registrasi');
});

Route::get('reservasi', function(){
    return view('reservasi');
});

Route::get('home', function(){
    return view('home');
});
Route::get('reguler', function(){
    return view('reguler');
});
Route::get('premium', function(){
    return view('premium');
});
Route::get('vip', function(){
    return view('vip');
});
Route::get('profil', function(){
    return view('profil');
});