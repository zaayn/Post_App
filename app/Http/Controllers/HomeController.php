<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{

    public function index()
    {
        $data['posts'] = Post::orderBy('created_at', 'desc')->get();
        return view('/home',$data);
    }
}
