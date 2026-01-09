<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\PokedexController;

// 1. หน้าสำหรับกรอกฟอร์ม
Route::get('/workshop', [MyController::class, 'index']);

// 2. หน้าสำหรับรับค่าและแสดงผล (POST)
Route::post('/workshop/store', [MyController::class, 'store'])->name('workshop.store');


Route::resource('/flights', App\Http\Controllers\FlightController::class);


Route::resource('pokedexs', PokedexController::class);
