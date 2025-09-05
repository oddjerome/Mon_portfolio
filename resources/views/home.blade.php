@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<!-- Hero Section -->
<div class="hero text-white" style="min-height: 100vh; position:relative;">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <!-- Portrait -->
            <div class="col-md-4 text-center text-md-start mb-4 mb-md-0">
                <img src="{{ asset('images/portrait.jpg') }}" alt="Photo de profil"
                     class="rounded shadow-lg"
                     style="width: 280px; height: 280px; object-fit: cover;">
            </div>
            <!-- Texte -->
            <div class="col-md-8 text-center text-md-start">
                <h1 class="display-4 fw-bold">Odd Malael Jerome</h1>
                <p class="lead animated-text">Développeur Web Full-Stack & Data Scientist</p>
                <a href="#projects" class="btn btn-primary btn-lg me-2">Projets en avant</a>
                <a href="#competences" class="btn btn-outline-light btn-lg">Compétences</a>
            </div>
        </div>
    </div>
</div>


<!-- Section Projets en avant -->
<div id="projects" class="container py-5">
    <h2 class="text-center mb-5">Projets en avant</h2>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Projet 1</h5>
                    <p class="card-text">Application Laravel avec gestion d’articles et authentification.</p>
                    <a href="#" class="btn btn-primary btn-sm">Voir</a>
                    <a href="#" class="btn btn-outline-dark btn-sm">GitHub</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Projet 2</h5>
                    <p class="card-text">Analyse de données en Python avec Pandas & Matplotlib.</p>
                    <a href="#" class="btn btn-primary btn-sm">Voir</a>
                    <a href="#" class="btn btn-outline-dark btn-sm">GitHub</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">
                    <h5 class="card-title">Projet 3</h5>
                    <p class="card-text">Site e-commerce simple avec Laravel + Stripe.</p>
                    <a href="#" class="btn btn-primary btn-sm">Voir</a>
                    <a href="#" class="btn btn-outline-dark btn-sm">GitHub</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Compétences -->
<div id="competences" class="container py-5">
    <h2 class="text-center mb-5">Mes Compétences</h2>
    <div class="row text-center">
        <div class="col-md-3 mb-4">
            <i class="bi bi-code-slash fs-1 text-primary"></i>
            <h5 class="mt-3">HTML / CSS / JavaScript</h5>
            <p class="text-muted">Bases solides pour concevoir et dynamiser des sites web modernes.</p>
        </div>
        <div class="col-md-3 mb-4">
            <i class="bi bi-bootstrap fs-1 text-purple"></i>
            <h5 class="mt-3">Bootstrap</h5>
            <p class="text-muted">Création rapide d’interfaces responsives et élégantes.</p>
        </div>
        <div class="col-md-3 mb-4">
            <i class="bi bi-laptop fs-1 text-success"></i>
            <h5 class="mt-3">Laravel</h5>
            <p class="text-muted">Framework PHP puissant pour le backend et la gestion de projets.</p>
        </div>
        <div class="col-md-3 mb-4">
            <i class="bi bi-cpu fs-1 text-info"></i>
            <h5 class="mt-3">Python</h5>
            <p class="text-muted">Langage polyvalent pour la Data Science, l’analyse et l’IA.</p>
        </div>
    </div>
</div>

<!-- Section À propos -->
<div class="container py-5">
    <h2 class="text-center mb-4">À propos de moi</h2>
    <p class="text-center mx-auto" style="max-width: 700px;">
        Je suis <strong>Développeur Web Full-Stack</strong> et passionné par la 
        <strong>Data Science</strong>.  
        Mon objectif est de combiner le développement d’applications web modernes 
        avec l’analyse et l’exploitation des données pour créer des solutions 
        intelligentes et innovantes.
    </p>
</div>

@endsection

@push('styles')
<style>
/* Fond animé */
.hero {
    background: linear-gradient(-45deg, #1d3557, #457b9d, #1d3557, #457b9d);
    background-size: 400% 400%;
    animation: gradientBG 10s ease infinite;
    position: relative;
}
.hero .overlay {
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0, 0, 0, 0.4);
}
@keyframes gradientBG {
    0% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

/* Texte animé */
.animated-text {
    animation: fadeIn 3s ease-in-out infinite alternate;
}
@keyframes fadeIn {
    from { opacity: 0.6; }
    to { opacity: 1; }
}
</style>
@endpush
