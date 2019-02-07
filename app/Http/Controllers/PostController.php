<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;


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

    public function destory(Request $request)
    {
        $id = $request->input('id');
        DB::table('posts')->where('id', $id)->delete();

        return redirect()->route('home');
    }

    public function edit($id)
    {
        $post = \App\Post::where('id', $id)->first();
        return view('post_edit', ['post' => $post]);
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $title = $request->input('title');
        $content = $request->input('content');
        DB::table('posts')->where('id', $id)->update(['title' => $title, 'content' => $content]);

        return redirect()->route('home');
    }
}
