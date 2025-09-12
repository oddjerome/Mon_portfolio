<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Post $post)
    {
        $request->validate([
            'content' => 'required|min:3|max:1000',
        ]);

        Comment::create([
            'content' => $request->content,
            'user_id' => Auth::id(),
            'post_id' => $post->id,
        ]);

        return redirect()->route('posts.show', $post->id)
                         ->with('success', 'Commentaire ajouté avec succès !');
    }
}

