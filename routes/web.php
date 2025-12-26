<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkshopController; // ห้ามลืมบรรทัดนี้

Route::get('/', function () {
    return view('welcome');
});

// Route สำหรับเรียกหน้าฟอร์ม
Route::get('/workshop', [WorkshopController::class, 'index'])->name('workshop.index');

// Route สำหรับรับข้อมูล (POST)
Route::post('/workshop/store', [WorkshopController::class, 'store'])->name('workshop.store');