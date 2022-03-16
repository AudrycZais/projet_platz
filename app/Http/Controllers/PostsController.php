<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Index des posts
     *
     * @return Factory
     */
    public function index(){
        $posts=Post::orderby('created_at', 'desc')->take(20)->get();
        return view('post.index' , compact('posts'));
    }
    /**
     * Le détail d'un post
     *
     * @param Post $post
     * @return Factory
     */
    public function show(Post $post){
        return view('post.show', compact('post'));
    }
    /**
     * L'index des catégories
     *
     * @param integer $category_id
     * @return Factory
     */
    public function ajaxCategory(int $category_id){
        $posts=Post::where('category_id', '=', $category_id)->orderby('created_at', 'desc')->take(20)->get();
        return view('post._list' , compact('posts'));
    }
/**
 * Chargement de plus de posts (10)
 *
 * @param Request $request
 * @return Factory
 */
    public function more(Request $request){
        $posts=Post::orderby('created_at', 'desc')->take(10)->offset($request->offSet)->get();
        return view('post._list' , compact('posts'));
    }
}