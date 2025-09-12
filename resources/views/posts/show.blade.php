@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>

    @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-3" alt="{{ $post->title }}">
    @endif

    <p>{{ $post->content }}</p>

    <small>Publié le {{ $post->created_at->format('d/m/Y') }}</small>

    <h3 class="mt-5">Laisser un commentaire</h3>

    @auth
        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="mb-4">
            @csrf
            <div class="mb-3">
                <textarea name="content" class="form-control" rows="3" placeholder="Votre commentaire..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    @else
        <p class="text-muted">Vous devez <a href="{{ route('login') }}">vous connecter</a> pour commenter.</p>
    @endauth

    <h3 class="mt-4">Commentaires</h3>
    @forelse($post->comments as $comment)
        <div class="border rounded p-3 mb-2">
            <strong>{{ $comment->user->name }}</strong>
            <small class="text-muted">· {{ $comment->created_at->diffForHumans() }}</small>
            <p class="mb-0">{{ $comment->content }}</p>
        </div>
    @empty
        <p>Aucun commentaire pour le moment.</p>
    @endforelse

@endsection
