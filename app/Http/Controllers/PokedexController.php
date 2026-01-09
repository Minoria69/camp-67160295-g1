<?php

namespace App\Http\Controllers;

use App\Models\Pokedex; // เรียกใช้ Model ที่คุณสร้างไว้
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index()
    {
        $pokedex = Pokedex::all();
        return view('pokedexs.index', compact('pokedex'));
    }

    public function create()
    {
        return view('pokedex.create');
    }

    public function store(Request $request)
    {
        Pokedex::create($request->all());
        return redirect()->route('pokedex.index');
    }

    public function edit($id)
    {
        $pokemon = Pokedex::findOrFail($id);
        return view('pokedex.edit', compact('pokemon'));
    }

    public function update(Request $request, $id)
    {
        $pokemon = Pokedex::findOrFail($id);
        $pokemon->update($request->all());
        return redirect()->route('pokedex.index');
    }

    public function destroy($id)
    {
        Pokedex::destroy($id);
        return redirect()->route('pokedex.index');
    }
}
