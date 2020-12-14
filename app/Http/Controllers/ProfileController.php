<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function view_index()
    {
        return view('profile.view_profile');
    }

    public function edit_index()
    {
        return view('profile.edit_profile');
    }
}
