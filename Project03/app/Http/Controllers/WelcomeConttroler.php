<?php

namespace App\Http\Controllers;
use Auth;
use App\Post;

use Illuminate\Http\Request;

class WelcomeConttroler extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('welcome', ['posts'=>$posts]);
    }
}
