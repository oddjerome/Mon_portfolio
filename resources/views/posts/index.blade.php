@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <h1 class="mb-4">Articles du blog</h1>

    @foreach($posts as $post)
        <div class="mb-4">
            <h3><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h3>
            <p>{{ Str::limit($post->content, 150) }}</p>
            <small>Publié le {{ $post->created_at->format('d/m/Y') }}</small>
        </div>
        <hr>
    @endforeach

    <div>
        {{ $posts->links() }}
    </div>
@endsection
