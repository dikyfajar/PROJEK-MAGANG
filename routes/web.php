<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AsuransiController;
use App\Http\Controllers\DtAsuransiController;

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

// dasbor
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('home');

// route pasien
Route::resource('pasien', PasienController::class);

// route asuransi
Route::resource('asuransi', AsuransiController::class);

// route dtAsuransi
Route::resource('dtasuransi', DtAsuransiController::class);
