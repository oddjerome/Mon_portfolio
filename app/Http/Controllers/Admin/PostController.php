<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Affiche la liste des articles (admin)
     */
    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Formulaire de création
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Sauvegarde un nouvel article
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        Post::create([
            'title'   => $validated['title'],
            'content' => $validated['content'],
            'author'  => auth()->user()->name, // enregistre l’auteur connecté
        ]);

        return redirect()->route('posts.index')->with('success', 'Article créé avec succès.');
    }

    /**
     * Formulaire d’édition
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    /**
     * Met à jour un article
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post->update($validated);

        return redirect()->route('posts.index')->with('success', 'Article mis à jour avec succès.');
    }

    /**
     * Supprime un article
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Article supprimé.');
    }
}
