@extends('layouts.admin')

@section('title', 'Modifier Projet')

@section('content')
    <h1>Modifier le Projet</h1>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" value="{{ $project->title }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" rows="4" class="form-control" required>{{ $project->description }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Technologies</label>
            <input type="text" name="technologies" value="{{ $project->technologies }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Lien GitHub</label>
            <input type="url" name="github_link" value="{{ $project->github_link }}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Lien Démo</label>
            <input type="url" name="demo_link" value="{{ $project->demo_link }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
@endsection
