@extends('layouts.auth')

@section('title', 'Inscription')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" name="name" class="form-control" required autofocus>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
        <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-success">S’inscrire</button>
    </div>

    <div class="text-center mt-3">
        <a href="{{ route('login') }}">Déjà inscrit ? Connexion</a>
    </div>
</form>
@endsection
