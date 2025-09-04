@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="text-center py-5">
    <div class="row align-items-center">
        <div class="col-md-6 text-md-start">
            <h1 class="display-4 fw-bold">Jean Dupont</h1>
            <p class="lead mb-4">Développeur Web Full-Stack, & passionné par les API et la formation.</p>
            <a href="{{ route('projects.show', /* premier projet ou modal */) }}" class="btn btn-primary btn-lg me-2">Voir mes projets</a>
            <a href="{{ asset('cv.pdf') }}" class="btn btn-outline-secondary btn-lg">Télécharger mon CV</a>
        </div>
        <div class="col-md-6 text-center">
            <img src="{{ asset('images/portrait.jpg') }}" alt="Portrait de Jean Dupont"
                 class="rounded-circle img-fluid shadow" style="max-width: 300px;">
        </div>
    </div>
</div>

<div class="container py-5">
    <h2 class="mb-4">À propos</h2>
    <p>Je m'appelle Jean Dupont, un développeur web expérimenté dans les technologies Laravel, Vue.js, DevOps & CI/CD. J’aime créer, enseigner et partager via des formations et tutoriels.</p>

    <h3 class="mt-5 mb-3">Mon parcours</h3>
    <ul class="timeline">
        <li><strong>2025 – Aujourd’hui</strong> — Lead Dev Backend / SaaS agricole</li>
        <li><strong>2021 – Aujourd’hui</strong> — Formateur Symfony & CI/CD (freelance)</li>
        <li><strong>2020 – Aujourd’hui</strong> — Développeur Backend Freelance, Symfony</li>
        <li><strong>2018 – 2020</strong> — Diplômé Master Informatique, Université XYZ</li>
    </ul>
</div>
@endsection
