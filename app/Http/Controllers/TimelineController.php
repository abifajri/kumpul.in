<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TimelineController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $posts = Post::all();
        return view('timeline', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store()
    {
        Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);
    }
}
