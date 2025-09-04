@extends('layouts.auth')

@section('title', 'Vérification de l’email')

@section('content')
<p class="mb-4 text-muted text-center">
    Merci pour votre inscription ! Avant de commencer, veuillez vérifier votre adresse email
    en cliquant sur le lien que nous vous avons envoyé.  
    Si vous n'avez pas reçu l'email, vous pouvez en demander un nouveau.
</p>

@if (session('status') == 'verification-link-sent')
    <div class="alert alert-success text-center">
        Un nouveau lien de vérification a été envoyé à votre adresse email.
    </div>
@endif

<form method="POST" action="{{ route('verification.send') }}">
    @csrf
    <div class="d-grid mb-3">
        <button type="submit" class="btn btn-primary">Renvoyer l’email de vérification</button>
    </div>
</form>

<form method="POST" action="{{ route('logout') }}">
    @csrf
    <div class="d-grid">
        <button type="submit" class="btn btn-secondary">Déconnexion</button>
    </div>
</form>
@endsection
