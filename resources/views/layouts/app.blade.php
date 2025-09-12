<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mon Portfolio')</title>
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

        .dark-mode .navbar,
        .dark-mode footer {
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
            color: #f5f5f5;
            /* couleur douce sur fond sombre */
            transition: color 0.3s ease-in-out;
        }

        body:not(.dark-mode) .hero-text {
            color: #222;
            /* texte sombre quand fond clair */
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

        /* Bouton Remonter en Haut */
        #backToTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            display: none;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 22px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-in-out;
        }

        /* Couleur par défaut (clair) */
        body:not(.dark-mode) #backToTop {
            background-color: #0d6efd;
            /* bleu bootstrap */
            color: white;
        }

        body:not(.dark-mode) #backToTop:hover {
            background-color: #0b5ed7;
        }

        /* Couleur en mode sombre */
        body.dark-mode #backToTop {
            background-color: #ffc107;
            /* jaune */
            color: #121212;
        }

        body.dark-mode #backToTop:hover {
            background-color: #e0a800;
            color: #000;
        }
    </style>
</head>

<button id="backToTop" title="Remonter">
    <i class="bi bi-arrow-up"></i>
</button>

<body class="dark-mode"> <!-- ✅ dark mode par défaut -->

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
                        @if (auth()->user()->role === 'admin')
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

    <!-- Flash messages -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show container" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    @endif

    @if (session('error'))
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

    <!-- Scripts -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toggle = document.getElementById('darkModeToggle');
            const body = document.body;

            // Mode sombre par défaut
            if (localStorage.getItem('dark-mode') !== 'disabled') {
                body.classList.add('dark-mode');
                localStorage.setItem('dark-mode', 'enabled');
            }

            toggle.addEventListener('click', () => {
                body.classList.toggle('dark-mode');
                if (body.classList.contains('dark-mode')) {
                    localStorage.setItem('dark-mode', 'enabled');
                } else {
                    localStorage.setItem('dark-mode', 'disabled');
                }
            });
        });
        // Bouton Remonter en haut
        const backToTop = document.getElementById("backToTop");

        window.addEventListener("scroll", () => {
            if (window.scrollY > 300) {
                backToTop.style.display = "block";
            } else {
                backToTop.style.display = "none";
            }
        });

        backToTop.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>

</html>
