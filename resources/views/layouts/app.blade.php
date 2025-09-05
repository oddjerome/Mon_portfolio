<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Portfolio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script>
        const toggle = document.getElementById('darkModeToggle');
        const body = document.body;

        // Charger l’état sauvegardé
        if(localStorage.getItem('dark-mode') === 'enabled') {
            body.classList.add('dark-mode');
        }

        toggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            if(body.classList.contains('dark-mode')){
                localStorage.setItem('dark-mode','enabled');
            } else {
                localStorage.setItem('dark-mode','disabled');
            }
        });
    </script>

    <style>
    /* Styles Dark Mode */
    .dark-mode {
        background-color: #121212 !important;
        color: #e0e0e0 !important;
    }
    .dark-mode .navbar, .dark-mode footer {
        background-color: #1f1f1f !important;
    }
    .dark-mode .card {
        background-color: #1e1e1e !important;
        color: #e0e0e0 !important;
    }
    </style>
</head>

<body>
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
                        {{-- Si connecté ET admin --}}
                        @if(auth()->user()->role === 'admin')
                            <li class="nav-item">
                                <a class="nav-link text-warning" href="{{ route('admin.dashboard') }}">Admin</a>
                            </li>
                        @endif

                        {{-- Bouton déconnexion --}}
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
                        {{-- Bouton connexion --}}
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Connexion</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Inscription</a></li>
                        <li class="nav-item">
                            <button id="darkModeToggle" class="btn btn-sm btn-outline-light ms-2">🌙</button>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    <!-- Flash messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show container" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show container" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    @endif

    <!-- Contenu -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        © {{ date('Y') }} - MonPortfoli0 | Développeur Web & Data Scientist
    </footer>
</body>
</html>
