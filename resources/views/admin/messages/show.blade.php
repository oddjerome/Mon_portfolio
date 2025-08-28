@extends('layouts.admin')

@section('title', 'Message')

@section('content')
    <h1>Message de {{ $message->name }}</h1>

    <p><strong>Email :</strong> {{ $message->email }}</p>
    <p><strong>Sujet :</strong> {{ $message->subject }}</p>
    <p><strong>Message :</strong></p>
    <p>{{ $message->message }}</p>
@endsection
