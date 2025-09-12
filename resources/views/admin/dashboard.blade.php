@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1 class="mb-4">Dashboard Admin</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Projets</h5>
                    <p class="card-text display-6">{{ $projectsCount }}</p>
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-light btn-sm">Ajouter</a>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-light btn-sm">Voir</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Articles</h5>
                    <p class="card-text display-6">{{ $postsCount }}</p>
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-light btn-sm">Ajouter</a>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-outline-light btn-sm">Voir</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Messages</h5>
                    <p class="card-text display-6">{{ $messagesCount }}</p>
                    <a href="{{ route('admin.messages.index') }}" class="btn btn-light btn-sm">Voir</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3 shadow">
                <div class="card-body">
                    <h5 class="card-title">Commentaires</h5>
                    <p class="card-text display-6">{{ $messagesCount }}</p>
                    <a href="{{ route('admin.comments.index') }}" class="btn btn-light btn-sm">Voir</a>
                </div>
            </div>
        </div>
    </div>
@endsection
