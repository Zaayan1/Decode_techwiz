<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Player;

class AdminPlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('admin.players.index', compact('players'));
    }

    public function create()
    {
        return view('admin.players.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new player
        // ...

        return redirect()->route('admin.players.index')->with('success', 'Player added successfully.');
    }

    public function edit($id)
    {
        $player = Player::findOrFail($id);
        return view('admin.players.edit', compact('player'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update the player
        // ...

        return redirect()->route('admin.players.index')->with('success', 'Player updated successfully.');
    }

    public function destroy($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return redirect()->route('admin.players.index')->with('success', 'Player deleted successfully.');
    }
}
