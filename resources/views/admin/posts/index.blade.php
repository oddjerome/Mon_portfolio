@extends('layouts.admin')

@section('title', 'Gestion des Articles')

@section('content')
    <h1 class="mb-4">Gestion des Articles</h1>

    <!-- Bouton pour ajouter un article -->
    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3">+ Ajouter un article</a>

    <!-- Tableau des articles -->
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Titre</th>
                <th>Auteur</th>
                <th>Date</th>
                <th style="width: 180px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
                <tr>
                    <td><strong>{{ $post->title }}</strong></td>
                    <td>{{ $post->author ?? 'Inconnu' }}</td>
                    <td>{{ $post->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        
                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Supprimer cet article ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">Aucun article trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-3">
        {{ $posts->links() }}
    </div>
@endsection
