<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\kalkulator2controller;
use App\http\controllers\kalkulatorcontroller;
use App\http\controllers\kalkulator5controller;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kalkulator', [kalkulatorController::class, 'index'])->name('kalkulator');
Route::post('/hitung', [kalkulatorController::class, 'store'])->name('hitung');



Route::get('/kalkulator2', [kalkulator2controller::class, 'index'])->name('kalkulator');
Route::post('/hitung2', [kalkulator2controller::class, 'store'])->name('hitung2');

Route::get('/kalkulator5', [kalkulatorcontroller::class, 'manual'])->name('kalkulator5');
Route::post('/hitung', [kalkulatorcontroller::class, 'store'])->name('hitung');



