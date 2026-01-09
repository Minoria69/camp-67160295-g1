<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        // คำสั่ง return view('workshop') จะไปดึงไฟล์ใน resources/views/workshop.blade.php มาแสดงผล
        return view('workshop'); 
    }
}