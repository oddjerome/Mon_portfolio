@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h1 class="mb-4">Mes Projets</h1>

    <div class="row">
        @foreach($projects as $project)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($project->image)
                        <img src="{{ asset('storage/'.$project->image) }}" class="card-img-top" alt="{{ $project->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ Str::limit($project->description, 100) }}</p>
                        <a href="{{ route('projects.show', $project->id) }}" class="btn btn-primary">Voir plus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
