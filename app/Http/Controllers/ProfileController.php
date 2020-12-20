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

    public function edit_index()
    {
        return view('profile.edit_profile');
    }
}
