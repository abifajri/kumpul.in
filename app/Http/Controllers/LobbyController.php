<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;
use DB;

class LobbyController extends Controller
{
    public function index() {
        $rooms = Room::orderBy('updated_at', 'desc')->get();
        return view('lobby.index')->with('rooms', $rooms);
    }

    public function joinRoom(int $id) {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
      
        $room = Room::find($id);
        if (!DB::table('user_room')->where('user_id',$user_id)->where('room_id',$id)->exists()) {
            $room->members()->attach($user);
        }
        
        return redirect()->route('show_room', ["id" => $room->id]);
    }
}
