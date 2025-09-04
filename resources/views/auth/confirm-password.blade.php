@extends('layouts.auth')

@section('title', 'Confirmer le mot de passe')

@section('content')
<p class="text-muted text-center mb-4">
    Cette opération est sensible. Merci de confirmer votre mot de passe avant de continuer.
</p>

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" autofocus>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Confirmer</button>
    </div>
</form>
@endsection
