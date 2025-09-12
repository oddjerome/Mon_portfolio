@extends('layouts.admin')

@section('title', 'Commentaires')

@section('content')
    <h1 class="mb-4">Gestion des Commentaires</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-dark table-striped align-middle">
        <thead>
            <tr>
                <th>Auteur</th>
                <th>Article</th>
                <th>Commentaire</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @forelse($comments as $comment)
            <tr>
                <td>{{ $comment->user->name }}</td>
                <td><a href="{{ route('posts.show', $comment->post->id) }}" class="text-info">{{ $comment->post->title }}</a></td>
                <td>{{ Str::limit($comment->content, 60) }}</td>
                <td>{{ $comment->created_at->diffForHumans() }}</td>
                <td>
                    <form action="{{ route('admin.comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Supprimer ce commentaire ?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr><td colspan="5" class="text-center">Aucun commentaire trouvé.</td></tr>
        @endforelse
        </tbody>
    </table>

    <div class="d-flex justify-content-center">
        {{ $comments->links() }}
    </div>
@endsection
