<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Models\Comment;
use App\Models\Idea;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(CreateCommentRequest $request, Idea $idea)
    {
        $comment = new Comment();
        $comment->idea_id = $idea->id;
        $comment->user_id = auth()->id();
        $comment->content = request()->get('commentContent');
        $comment->save();

        // $validated = $request->validated();
        // $validated['user_id'] = auth()->id();
        // $validated['idea_id'] = $idea->id;

        // Comment::create($validated);

        return redirect()->route('dashboard')->with('success', 'Comment posted successfully!');
    }
}
