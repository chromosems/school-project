<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    //
    public function newComment(Request $request)
    {
        $request->validate([
            'content'=>'required|min:3',
        ]);

        $comment = new Comment($request->all());
        $comment->save();
        return redirect()->back()->with('status', 'your comment has been created !');
    }
}
