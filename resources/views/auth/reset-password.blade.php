@extends('layouts.auth')

@section('title', 'Réinitialiser le mot de passe')

@section('content')
<form method="POST" action="{{ route('password.store') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <div class="mb-3">
        <label for="email" class="form-label">Adresse email</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email', $request->email) }}" required autofocus>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Nouveau mot de passe</label>
        <input id="password" type="password" class="form-control" name="password" required>
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirmer le mot de passe</label>
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-success">Réinitialiser</button>
    </div>
</form>
@endsection
