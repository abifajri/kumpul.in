<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function view_index($request)
    {
        $user = User::find($request);
        return view('profile.view_profile')->with('user', $user);
    }

    public function edit_index($request)
    {
        $user = User::find($request);
        return view('profile.edit_profile')->with('user', $user);
    }

    public function save_profile(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $user = User::find($id);
        $user->img_url= $request->input('img_url');
        $user->name= $request->input('name');
        $user->birth_date= $request->input('birth_date');
        $user->hobby= $request->input('hobby');
        $user->status= $request->input('status');
        $user->save();

        // return redirect('view_profile', ["id" => $user->id])->with('success', 'Profile Updated');
        return redirect()->route('view_profile', ["id" => $user->id])->with('success', 'Profile Updated');
    }
}
