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
                    <img src="{{ asset('images/portrait.jpg') }}" alt="Photo de profil" class="rounded shadow-lg"
                        style="width: 300px; height: 300px; object-fit: cover;">
                </div>
                <!-- Texte -->
                <div class="col-md-8 text-center text-md-start hero-text fade-in">
                    <h1 class="display-4 fw-bold">Odd Malael Jerome</h1>
                    <p class="lead animated-text">Développeur Web Full-Stack & Data Scientist</p>
                    <div class="mt-3">
                        <a href="#projects" class="btn btn-primary btn-lg me-2">Projets en avant</a>
                        <a href="#competences" class="btn btn-outline-danger btn-lg me-2">Compétences</a>
                        <a href="#parcours" class="btn btn-outline-info btn-lg me-2">Parcours</a>
                        <a href="#etudes" class="btn btn-outline-success btn-lg me-2">Études</a>
                        <a href="#cv" class="btn btn-outline-warning btn-lg me-2">Mon CV</a>
                    </div>
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
                        <p class="card-text">Application Laravel avec gestion efficace d’évènements.</p>
                        {{-- <a href="#" class="btn btn-primary btn-sm">Voir</a> --}}
                        <a href="https://github.com/oddjerome/Mon_portfolio.git"
                            class="btn btn-outline-dark btn-sm">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Projet 2</h5>
                        <p class="card-text">Application Laravel pour une gestion efficace de Bibliothèque physique.</p>
                        {{-- <a href="#" class="btn btn-primary btn-sm">Voir</a> --}}
                        <a href="https://github.com/oddjerome/gestion_bibliotheque.git"
                            class="btn btn-outline-dark btn-sm">GitHub</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">Projet 3</h5>
                        <p class="card-text">Application web de recherche d'images basée sur le contenu (CBIR).</p>
                        {{-- <a href="#" class="btn btn-primary btn-sm">Voir</a> --}}
                        <a href="https://github.com/oddjerome/prjFaceRecognition.git"
                            class="btn btn-outline-dark btn-sm">GitHub</a>
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
                <p class="text">Bases solides pour concevoir et dynamiser des sites web modernes.</p>
            </div>
            <div class="col-md-3 mb-4">
                <i class="bi bi-diagram-3 fs-1 text-warning"></i>
                <h5 class="mt-3">Diagrammes UML</h5>
                <p class="text">Modélisation des systèmes avec cas d’utilisation, classes et séquences.</p>
            </div>
            <div class="col-md-3 mb-4">
                <i class="bi bi-laptop fs-1 text-success"></i>
                <h5 class="mt-3">Laravel</h5>
                <p class="text">Framework PHP puissant pour le backend et la gestion de projets.</p>
            </div>
            <div class="col-md-3 mb-4">
                <i class="bi bi-cpu fs-1 text-info"></i>
                <h5 class="mt-3">Python</h5>
                <p class="text">Langage polyvalent pour la Data Science, l’analyse et l’IA.</p>
            </div>
        </div>
    </div>

    <!-- Section Parcours -->
    <div id="parcours" class="container py-5">
        <h2 class="text-center mb-4">Parcours</h2>
        <ul class="list-group list-group-flush text-center">
            <li class="list-group-item bg-transparent text-light">2023-2025 – Début en développement web & Data Science</li>
            <li class="list-group-item bg-transparent text-light">2017-2023 – Création et géstion d'une franchise de la
                Brasserie Nationale d'Haïti</li>
            <li class="list-group-item bg-transparent text-light">2014-2023 – Responsable de la performance logistique d’un
                entrepôt : optimisation des stocks, coordination des flux, conformité réglementaire, amélioration continue,
                maîtrise des outils de gestion, et encadrement d’une équipe de plus de 15 collaborateurs. </li>
            <li class="list-group-item bg-transparent text-light">2011-2014 – Responsable du bon fonctionnement
                administratif, la coordination logistique des équipes, la gestion du personnel, l’organisation des réunions
                et déplacements, la production de documents professionnels, ainsi que le traitement efficace des tâches de
                bureau.
            </li>
        </ul>
    </div>

    <!-- Section Études -->
    <div id="etudes" class="container py-5">
        <h2 class="text-center mb-5">Études</h2>

        <ul class="list-group list-group-flush shadow-sm mx-auto" style="max-width: 700px;">
            <li class="list-group-item bg-transparent text-light d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0 fw-bold">Programmation Web et Intelligence Artificielle</h6>
                    <small class="text">Institut Teccart</small>
                </div>
                <span class="badge bg-primary rounded-pill">2023 – 2025</span>
            </li>
            <li class="list-group-item bg-transparent text-light d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0 fw-bold">Formation sur la Création et gestion d'Entreprise</h6>
                    <small class="text">Mon Entreprise Mon Avenir</small>
                </div>
                <span class="badge bg-danger rounded-pill">2015 – 2016</span>
            </li>

            <li class="list-group-item bg-transparent text-light d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0 fw-bold">Certificat en Sciences comptable - Gestions et Finances</h6>
                    <small class="text">Université Notre Dame d'Haïti</small>
                </div>
                <span class="badge bg-success rounded-pill">2007 – 2011</span>
            </li>

            <li class="list-group-item bg-transparent text-light d-flex justify-content-between align-items-center">
                <div>
                    <h6 class="mb-0 fw-bold">Études Primaires et Secondaires</h6>
                    <small class="text">Petit Séminaire Collège Saint-Martial</small>
                </div>
                <span class="badge bg-warning text-dark rounded-pill">1996 – 2006</span>
            </li>
        </ul>
    </div>

    <!-- Section Mon CV -->
    <div id="cv" class="container py-5 text-center">
        <h2 class="mb-4">Mon CV</h2>
        <p class="mb-4">Découvrez mon parcours et mes expériences en détail à travers mon CV.</p>

        <!-- Aperçu du CV (optionnel) -->
        {{-- <div class="ratio ratio-16x9 mb-4" style="max-width: 900px; margin: auto;">
            <iframe src="{{ asset('cv/Odd_Malael_cv.pdf') }}" frameborder="0"></iframe>
        </div> --}}

        <!-- Bouton de téléchargement -->
        <a href="{{ asset('cv/Odd_Malael_cv.pdf') }}" download class="btn btn-lg btn-success">
            <i class="bi bi-download me-2"></i> Télécharger mon CV
        </a>
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
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
        }

        @keyframes gradientBG {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* Texte animé */
        .animated-text {
            animation: fadeIn 3s ease-in-out infinite alternate;
        }

        @keyframes fadeIn {
            from {
                opacity: 0.6;
            }

            to {
                opacity: 1;
            }
        }

        .dark-mode .list-group-item {
            background-color: #1e1e1e !important;
            border-color: #333 !important;
            color: #e0e0e0 !important;
        }

        .dark-mode .list-group-item small {
            color: #aaa !important;
        }
    </style>
@endpush
