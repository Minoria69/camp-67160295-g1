<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// นำเข้า Model Pokedexs เพื่อแก้ปัญหา Class not found
use App\Models\Pokedexs;

class PokedexsController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลทั้งหมดจากตารางมาเก็บในตัวแปร $pokedexs
        $pokedexs = Pokedexs::all();

        // ส่งตัวแปรไปที่หน้า View pokedexs/index.blade.php
        return view('pokedexs.index', compact('pokedexs'));
    }

    public function create()
    {
        return view('pokedexs.create');
    }

    public function store(Request $request)
    {
        // บันทึกข้อมูล 9 ฟิลด์ตามโจทย์
        Pokedexs::create($request->all());
        return redirect('/pokedexs');
    }
}
