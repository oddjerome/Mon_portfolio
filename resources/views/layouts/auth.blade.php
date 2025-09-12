<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
    /* Styles Dark Mode */
    body.dark-mode {
        background-color: #121212 !important;
        color: #e0e0e0 !important;
        transition: all 0.4s ease-in-out;
    }
    .dark-mode .navbar, .dark-mode footer {
        background-color: #1f1f1f !important;
    }
    .dark-mode .card, 
    .dark-mode .alert {
        background-color: #1e1e1e !important;
        color: #e0e0e0 !important;
        border-color: #333 !important;
    }
    .dark-mode a, 
    .dark-mode .nav-link {
        color: #90caf9 !important;
    }

    /* Texte adaptatif */
    .hero-text {
        color: #f5f5f5; /* couleur douce sur fond sombre */
        transition: color 0.3s ease-in-out;
    }
    body:not(.dark-mode) .hero-text {
        color: #222; /* texte sombre quand fond clair */
    }

    /* Animation d’apparition */
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1.2s forwards;
    }
    .fade-in-delay {
        animation-delay: 0.5s;
    }
    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
</head>
<body class="dark-mode d-flex flex-column" style="min-height: 100vh;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <!-- 🔹 Logo intégré -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                <i class="bi bi-code-slash text-primary me-2 fs-4"></i>
                <span class="fw-bold">MonPortfoli0</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('projects.index') }}">Projets</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('posts.index') }}">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>

                    @auth
                        @if(auth()->user()->role === 'admin')
                            <li class="nav-item">
                                <a class="nav-link text-warning" href="{{ route('admin.dashboard') }}">Admin</a>
                            </li>
                        @endif

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Déconnexion
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Inscription</a></li>
                    @endauth

                    <!-- Bouton dark mode -->
                    <li class="nav-item">
                        <button id="darkModeToggle" class="btn btn-sm btn-outline-light ms-2">☀️</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 🔹 Contenu centré -->
    <div class="d-flex justify-content-center align-items-center flex-grow-1">
        <div class="card shadow-lg p-4 w-100" style="max-width: 450px;">
            <!-- Logo -->
            <div class="text-center mb-4">
                <i class="bi bi-code-slash display-3 text-primary"></i>
                <h2 class="fw-bold mt-2">MonPortfoli0</h2>
                <p class="text-muted">Développeur Web & Data Scientist</p>
            </div>

            <!-- Messages flash -->
            @if(session('status'))
                <div class="alert alert-info text-center">{{ session('status') }}</div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Contenu -->
            @yield('content')
        </div>
    </div>
</body>
</html>
