<?php

use Illuminate\Support\Facades\Route;
// 1. เพิ่มบรรทัดนี้ด้านบนสุดเพื่อเรียกใช้งาน Controller
use App\Http\Controllers\MyController; 

Route::get('/', function () {
    return view('welcome');
});
Route::get('/workshop', [MyController::class, 'index']);

// 2. เพิ่ม Route นี้เพื่อให้ URL /workshop/mycontroller ใช้งานได้
Route::get('/workshop/mycontroller', [MyController::class, 'index']);