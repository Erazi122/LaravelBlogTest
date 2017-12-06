<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentFormRequest;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(CommentFormRequest $request)
    {
        $comment = new Comment([
            'commentable_id' => $request->input('commentable_id'),
            'content' => $request->input('content'),
            'commentable_type' => $request->input('commentable_type'),
            'user_id' => Auth::user()->id,
        ]);
        $comment->save();

        return redirect()->back()->with('status', 'Your comment has been created.');
    }
}
