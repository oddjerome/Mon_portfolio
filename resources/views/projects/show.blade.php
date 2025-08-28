@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <h1>{{ $project->title }}</h1>

    @if($project->image)
        <img src="{{ asset('storage/'.$project->image) }}" class="img-fluid mb-3" alt="{{ $project->title }}">
    @endif

    <p>{{ $project->description }}</p>

    <p><strong>Technologies :</strong> {{ $project->technologies }}</p>

    @if($project->github_link)
        <a href="{{ $project->github_link }}" target="_blank" class="btn btn-dark">GitHub</a>
    @endif
    @if($project->demo_link)
        <a href="{{ $project->demo_link }}" target="_blank" class="btn btn-success">Demo</a>
    @endif
@endsection
