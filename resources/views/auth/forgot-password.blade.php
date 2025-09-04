@extends('layouts.auth')

@section('title', 'Mot de passe oublié')

@section('content')
<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <div class="mb-3">
        <label for="email" class="form-label">Votre email</label>
        <input type="email" name="email" class="form-control" required autofocus>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-warning">Envoyer le lien de réinitialisation</button>
    </div>
</form>
@endsection
