<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    public function show()
    {
        return view('home', [
            'title' => 'space',
            "posts" => Post::all()
        ]);
    }

    public function index(Post $post)
    {
        return view('post', [
            'title' => 'single post',
            'post' => $post
        ]);
    }
}
