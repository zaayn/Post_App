<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Comment;
use App\Like;
use App\User;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $file = $request->file('image');
        
        $imagename = $file->getClientOriginalName();

        $width = 650; // your max width
        $height = 650; // your max height
        $thumb_img = Image::make($file);
        $thumb_img->height() > $thumb_img->width() ? $width=null : $height=null;
        $thumb_img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });
        $thumb_img->save(public_path()."/thum/".$imagename,80);

        
        $file->move(public_path()."/img/",$file->getClientOriginalName());        

        $post = new Post;
        $post->pid   = $request->pid;
        $post->id   = Auth::user()->id;
        $post->image = $file->getClientOriginalName();
        $post->caption = $request->caption;
        $post->jml_like = 0;
        $post->jml_cmt = 0;

        if ($post->save()){
            return redirect('/user/home');
        }
        else{
            return redirect('/user/home');
        }
    }
    public function post($pid)
    {
        $post = Post::findOrFail($pid);
        $data['comments'] = Comment::where('pid',$pid)->get();

        $me = User::findOrFail(Auth::user()->id);
        $data['users'] = User::where('role','user')->where('id','!=',Auth::user()->id)->get();

        return view('/post',$data)->with('post',$post)->with('me',$me);
    }
    public function comment(Request $request)
    {

        $comment = new Comment;
        $comment->cid   = $request->cid;
        $comment->id    = Auth::user()->id;
        $comment->pid   = $request->pid != '' ? $request->pid:NULL;
        $comment->comments = $request->comments;

        $post = Post::findOrFail($comment->pid);
        $post->jml_cmt += 1;

        if ($comment->save() && $post->save()){
            return redirect()->back();
        }
        else{
            return redirect('/user/post');
        }
    }
    public function like(Request $request, $pid)
    {
        
        $check = Like::where('id',Auth::user()->id)->where('pid',$pid)->count();
        if($check != 0)
        {
            $post = Post::findorFail($pid);
            $post->jml_like -= 1;
            $like = Like::where('id',Auth::user()->id)->where('pid',$pid)->delete();

            if ($post->save()) {
                return redirect()->back();
            }
        }
        else
        {
            $like       = new Like;
            $like->lid  = $request->lid;
            $like->pid  = $request->pid != '' ? $request->pid:NULL;
            $like->id   = Auth::user()->id;

            $post = Post::findorFail($pid);
            $post->jml_like += 1;
        }
        
        if ($post->save() && $like->save())
            return redirect()->back();
    }
}
