<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $game=game::all();
        return view ('game.index', compact ('game'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('game.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gambar' => 'required',
            'title' => 'required',
            'description' => 'required',
            'info' => 'required',
            'min' => 'required',
            'rec' => 'required',
        ]);

        $game = new Game;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/game/', $name);
            $game->gambar = $name;
        } 
            $game->title = $request->title;
            $game->description = $request->description;
            $game->info = $request->info;
            $game->min = $request->min;
            $game->rec = $request->rec;
            $game->save();
            return redirect()->route('game.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('game.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('game.edit', compact('game'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'gambar' => 'required',
            'title' => 'required',
            'description' => 'required',
            'info' => 'required',
            'min' => 'required',
            'rec' => 'required',
        ]);

        $game = Game::findOrFail($id);
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/game/', $name);
            $game->gambar = $name;
        } 
            $game->title = $request->title;
            $game->description = $request->description;
            $game->info = $request->info;
            $game->min = $request->min;
            $game->rec = $request->rec;
            $game->save();
            return redirect()->route('game.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();
        return redirect()->route('game.index');
    }
}
