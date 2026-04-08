<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarpostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OnlineCarController;


Route::get('/', [CarpostController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
     Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::view('sell-car', 'sell-car')->name('sell-car');
    Route::get('car-online', [OnlineCarController::class, 'index'])->name('car-online');
Route::get('car-online/{car}', [OnlineCarController::class, 'show'])->name('car-online.show');
Route::get('car-online/{car}/edit', [OnlineCarController::class, 'edit'])->name('car-online.edit');
Route::put('car-online/{car}', [OnlineCarController::class, 'update'])->name('car-online.update');
Route::delete('car-online/{car}', [OnlineCarController::class, 'destroy'])->name('car-online.destroy');

    Route::post('/cars', [CarpostController::class, 'store'])->name('cars.store');
});

Route::get('/cars/{car}', [CarpostController::class, 'show'])->name('cars.show');






Route::view('test', 'test')->name('test');


require __DIR__.'/settings.php';
