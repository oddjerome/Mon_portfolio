@extends('layouts.auth')

@section('title', 'Connexion')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required autofocus>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" name="remember" class="form-check-input" id="remember">
        <label class="form-check-label" for="remember">Se souvenir de moi</label>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </div>

    <div class="text-center mt-3">
        <a href="{{ route('password.request') }}">Mot de passe oublié ?</a>
    </div>
</form>
@endsection
