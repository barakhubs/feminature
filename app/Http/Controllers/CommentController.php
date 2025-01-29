<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store (Request $request)
    {
        $request->validate([
            'comment' => 'required',
            'name' => 'required|min:3',
            'email' => 'required|email'
        ]);

        $comment = new Comment();
        $comment->comment = $request->comment;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->blog_id = $request->blog_id;
        $comment->save();

        return redirect()->back()->with('success', 'Comment submitted successfully. It will be reviewed and published soon.');
    }
}
