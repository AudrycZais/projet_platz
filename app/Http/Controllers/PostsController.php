<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        $posts=Post::orderby('created_at', 'desc')->take(20)->get();
        return view('post.index' , compact('posts'));
    }

    public function show(Post $post){
        return view('post.show', compact('post'));
    }

    public function ajaxCategory(int $category_id){
        $posts=Post::where('category_id', '=', $category_id)->orderby('created_at', 'desc')->take(20)->get();
        return view('post._list' , compact('posts'));
    }

    public function more(Request $request){
        $posts=Post::orderby('created_at', 'desc')->take(10)->offset($request->offSet)->get();
        return view('post._list' , compact('posts'));
    }
}