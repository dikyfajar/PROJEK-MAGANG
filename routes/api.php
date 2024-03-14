<?php

use App\Http\Controllers\api\WilayahController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kabupaten', [WilayahController::class, 'getKab'])->name('kabupaten');
Route::get('/kecamatan', [WilayahController::class, 'getKec'])->name('kecamatan');
Route::get('/desa', [WilayahController::class, 'getDesa'])->name('desa');
