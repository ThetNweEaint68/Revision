<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $article)
    {
        request()->validate(
            [
                'body' => 'required'
            ]);

        $comment = new Comment();
        $comment->body = $request['body'];
        $comment->user_id = auth()->user()->id;
        $comment->article_id = $article;
        $comment->save();

        return redirect()->back();
    }
}
