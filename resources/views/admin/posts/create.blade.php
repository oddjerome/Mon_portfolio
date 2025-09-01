@extends('layouts.admin')

@section('title', 'Ajouter Article')

@section('content')
    <h2 class="mb-4">Ajouter un nouvel article</h2>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Contenu</label>
            <textarea id="content" name="content" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Publier</button>
    </form>
@endsection
