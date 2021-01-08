<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\User;

class HomeController extends Controller
{

    public function index()
    {
        $data['posts'] = Post::orderBy('created_at', 'desc')->get();
        $data['users'] = User::where('role','user')->where('id','!=',Auth::user()->id)->get();
        
        $me = User::findOrFail(Auth::user()->id);
        
        return view('/home',$data)->with('me',$me);
    }
}
