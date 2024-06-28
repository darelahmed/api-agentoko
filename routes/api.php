<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Admin\BarangController;
use App\Http\Controllers\Api\V1\Admin\PelangganController;
use App\Http\Controllers\Api\V1\Admin\PenjualanController;
use App\Http\Controllers\Api\V1\Admin\ItemPenjualanController;

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

Route::prefix('v1')->group(function () {
    Route::prefix('pelanggan')->group(function () {
        Route::get('all', [PelangganController::class, 'index']);
        Route::get('detail/{id}', [PelangganController::class, 'show']);
        Route::post('store', [PelangganController::class, 'store']);
        Route::post('update/{id}', [PelangganController::class, 'update']);
        Route::delete('delete/{id}', [PelangganController::class, 'destroy']);
    });
    Route::prefix('barang')->group(function () {
        Route::get('all', [BarangController::class, 'index']);
        Route::get('detail/{id}', [BarangController::class, 'show']);
        Route::post('store', [BarangController::class, 'store']);
        Route::post('update/{id}', [BarangController::class, 'update']);
        Route::delete('delete/{id}', [BarangController::class, 'destroy']);
    });
    Route::prefix('itempenjualan')->group(function () {
        Route::get('all', [ItemPenjualanController::class, 'index']);
        Route::get('detail/{id}', [ItemPenjualanController::class, 'show']);
        Route::post('store', [ItemPenjualanController::class, 'store']);
        Route::post('update/{id}', [ItemPenjualanController::class, 'update']);
        Route::delete('delete/{id}', [ItemPenjualanController::class, 'destroy']);
    });
    Route::prefix('penjualan')->group(function () {
        Route::get('all', [PenjualanController::class, 'index']);
        Route::get('detail/{id}', [PenjualanController::class, 'show']);
        Route::post('store', [PenjualanController::class, 'store']);
        Route::post('update/{id}', [PenjualanController::class, 'update']);
        Route::delete('delete/{id}', [PenjualanController::class, 'destroy']);
    });
});