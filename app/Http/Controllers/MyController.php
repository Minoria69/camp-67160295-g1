<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {
        return view('workshop');
    }

    public function store(Request $request)
    {
        // รับข้อมูลทั้งหมดจากฟอร์มมาเก็บไว้ในตัวแปร $payload
        $payload = $request->all();
        
        // ส่งตัวแปรชื่อ 'payload' ไปที่หน้า View
        return view('workshop_result', compact('payload'));
    }
}