<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class BbsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->paginate(2);
        
        return view('bbs', ['posts' => $posts]);
    }

    public function show_detail($id)
    {
        $post = \App\Post::where('id', $id)->first();
        return view('bbs_detail', ['post' => $post]);
    }
}
