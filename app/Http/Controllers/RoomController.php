<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Room;
use App\Models\User;
use DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('room.index')->with('rooms', $user->memberOfRooms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'roomName' =>  'required',
            'roomDescription' =>  'required',
            'roomCapacity' =>  'required',
            'roomActivity' =>  'required',
        ]);

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        
        // Create Room
        $room = new Room;
        $room->name = $request->input('roomName');
        $room->description = $request->input('roomDescription');
        $room->capacity = $request->input('roomCapacity');
        $room->activity = $request->input('roomActivity');
        $room->password = $request->input('roomPassword');
        $room->isPrivate = $request->has('roomIsPrivate');
        $room->admin_id = $user_id;
        $room->save();
        
        $user->memberOfRooms()->attach($room);

        return redirect()->route('show_room', ["id" => $room->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // try {

        // } catch (\Throwable $th) {
        //     return redirect()->route('timeline');
        // }
        
        $room = Room::find($id);
        $user_room = DB::table('user_room')->where('room_id', $room->id)->get();
        return view('room.show')->with('data', [$room, $user_room]);
        // $room = Room::find($id);
        // return view('room.show')->with('room', $room);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::check()){
            $room = Room::find($id);
            if(Auth::id() == $room->admin_id){
                return view('room.edit')->with('room', $room);
            }
        }

        return redirect()->route('timeline');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'roomName' =>  'required',
                'roomDescription' =>  'required',
                'roomCapacity' =>  'required',
                'roomActivity' =>  'required',
            ]);
            $room = Room::find($id);
            $room->name = $request->input('roomName');
            $room->description = $request->input('roomDescription');
            $room->capacity = $request->input('roomCapacity');
            $room->activity = $request->input('roomActivity');
            $room->password = $request->input('roomPassword');
            $room->isPrivate = $request->has('roomIsPrivate');
            $room->save();

            return redirect()->route('show_room', ['id' => $room->id]);

        } catch (\Throwable $th) {
            return redirect()->route('room.edit', ['id' => $room->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
