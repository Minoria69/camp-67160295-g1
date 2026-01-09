<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // 1. ดึงข้อมูลจาก Model
        $pokedexs = Pokedex::all();

        // 2. ส่งตัวแปรไปที่ view (ต้องมั่นใจว่าชื่อตัวแปรใน compact ตรงกับใน blade)
        return view('pokedexs.index', compact('pokedexs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
