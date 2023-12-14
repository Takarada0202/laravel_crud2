<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        return view('index');
    }
    public function createPost(Request $request) {
        Post::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'user_id'=>$request->userId,
        ]);
        return redirect()->route('index');
    }
    public function myPage(Request $request) {
        $post = Post::where('id', $request->userId)->first();
        $post->user;
        return view('mypage',compact('post'));
    }

}
