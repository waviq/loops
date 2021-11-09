<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();
        Session::flash('message', 'Data Success Loaded !');
        return view('post.index', compact('posts'))->with(['success' => 'Data Loaded']);

    }
}
