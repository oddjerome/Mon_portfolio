@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>

    @if($post->image)
        <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mb-3" alt="{{ $post->title }}">
    @endif

    <p>{{ $post->content }}</p>

    <small>Publié le {{ $post->created_at->format('d/m/Y') }}</small>
@endsection
