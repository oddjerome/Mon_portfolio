@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1 class="mb-4">Bienvenue dans l’Admin</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Projets</h5>
                    <p class="card-text">{{ \App\Models\Project::count() }} projets enregistrés</p>
                    <a href="{{ route('projects.create') }}" class="btn btn-light btn-sm">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Articles</h5>
                    <p class="card-text">{{ \App\Models\Post::count() }} articles publiés</p>
                    <a href="{{ route('posts.create') }}" class="btn btn-light btn-sm">Ajouter</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Messages</h5>
                    <p class="card-text">{{ \App\Models\Message::count() }} reçus</p>
                    <a href="{{ route('messages.index') }}" class="btn btn-light btn-sm">Voir</a>
                </div>
            </div>
        </div>
    </div>
@endsection
