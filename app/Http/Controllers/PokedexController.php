<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;

class PokedexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokedex = Pokedex::all();
        return view('pokedex.index', compact('pokedex'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // ไม่ใช้ (create อยู่ใน index)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        //
        $req->validate([
            'name'      => 'required',
            'type'      => 'required',
            'image_url' => 'required|url',
        ]);

        Pokedex::create([
            'name'      => $req->name,
            'type'      => $req->type,
            'species'   => $req->species,
            'height'    => $req->height,
            'weight'    => $req->weight,
            'hp'        => $req->hp,
            'attack'    => $req->attack,
            'defense'   => $req->defense,
            'image_url' => $req->image_url,
        ]);

        
        return redirect()->route('pokedexs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // ไม่ใช้
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pokedex_update = Pokedex::findOrFail($id);
        return view('pokedex.update', compact('pokedex_update'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $pokedex = Pokedex::findOrFail($id);

        // ✅ validation
        $req->validate([
            'name'      => 'required',
            'type'      => 'required',
            'image_url' => 'required|url',
        ]);

        $pokedex->update([
            'name'      => $req->name,
            'type'      => $req->type,
            'species'   => $req->species,
            'height'    => $req->height,
            'weight'    => $req->weight,
            'hp'        => $req->hp,
            'attack'    => $req->attack,
            'defense'   => $req->defense,
            'image_url' => $req->image_url,
        ]);

        return redirect()->route('pokedexs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pokedex = Pokedex::findOrFail($id);
        $pokedex->delete();

        return redirect()->route('pokedexs.index');
    }
}
