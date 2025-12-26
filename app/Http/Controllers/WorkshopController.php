<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    // ฟังก์ชัน index: แสดงหน้าฟอร์ม Workshop #HTML-FORM
    public function index()
    {
        return view('workshop_form');
    }

    // ฟังก์ชัน store: รับค่าจากฟอร์มผ่าน POST และแสดงผลในหน้าใหม่
    public function store(Request $request)
    {
        // รับค่าทั้งหมดที่ส่งมาจากฟอร์มเก็บไว้ในตัวแปร $payload
        $payload = $request->all();

        // ส่งข้อมูลไปยัง view ชื่อ workshop_result
        return view('workshop_result', compact('payload'));
    }
}