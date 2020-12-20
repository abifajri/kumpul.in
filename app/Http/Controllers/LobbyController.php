<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class LobbyController extends Controller
{
    public function index() {
        $rooms = Room::orderBy('updated_at', 'desc')->get();
        return view('lobby.index')->with('rooms', $rooms);
    }
}
