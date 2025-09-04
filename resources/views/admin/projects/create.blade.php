@extends('layouts.admin')

@section('title', 'Ajouter Projet')

@section('content')
    <h1>Ajouter un Projet</h1>

    <form action="{{ route('admin.projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Titre</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" rows="4" class="form-control" required></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Technologies</label>
            <input type="text" name="technologies" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Lien GitHub</label>
            <input type="url" name="github_link" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Lien Démo</label>
            <input type="url" name="demo_link" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
