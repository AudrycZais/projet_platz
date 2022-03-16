<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function addComment(Request $request){
        $comment = new Comment;
        $comment->pseudo = $request->pseudo;
        $comment->content = $request->content;
        $comment->post_id = $request->postID;
        $comment->save();
        return view ('comment._show', ['comment' =>$comment]);
        
    }
}
