<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //
    public function newComment(Request $request)
    {
        $request->validate([
            'content'=>'required|min:3',
        ]);

        $comment = new Comment($request->all());
        $comment->user_id = Auth::user()->id;
        $comment->save();
        return redirect()->back()->with('status', 'your comment has been created !');
    }
}
