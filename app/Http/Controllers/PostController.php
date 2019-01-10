<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('post');
    }


    public function store(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');

        $post = new Post;
        $post->title = $title;
        $post->content = $content;
        $post->save();

        return redirect()->route('home');
    }
}
