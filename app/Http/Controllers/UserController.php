<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        //dd($users->first()->posts);
        return view('users.index',compact('users'));
    }
}
