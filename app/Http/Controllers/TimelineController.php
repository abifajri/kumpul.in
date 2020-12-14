<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('timeline');
    }
}
