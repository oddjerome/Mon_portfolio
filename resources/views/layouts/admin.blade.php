<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3 vh-100 d-flex flex-column justify-content-between" style="width: 240px;">
        
        <!-- 🔹 Logo -->
        <div>
            <div class="text-center mb-4">
                <i class="bi bi-code-slash text-primary fs-2"></i>
                <h4 class="fw-bold mt-2">MonPortfoli0</h4>
                <p class="text-muted small">Admin Panel</p>
            </div>

            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link text-white">Dashboard</a></li>
                <li class="nav-item"><a href="{{ route('admin.projects.create') }}" class="nav-link text-white">Ajouter Projet</a></li>
                <li class="nav-item"><a href="{{ route('admin.posts.create') }}" class="nav-link text-white">Ajouter Article</a></li>
                <li class="nav-item"><a href="{{ route('admin.messages.index') }}" class="nav-link text-white">Messages</a></li>
            </ul>
        </div>

        <!-- 🔹 Déconnexion -->
        <div>
            <a href="{{ route('logout') }}" class="nav-link text-danger"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right me-1"></i> Déconnexion
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>

    <!-- Contenu principal -->
    <div class="flex-grow-1 p-4">
        <!-- Flash messages -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @yield('content')
    </div>
</div>
</body>
</html>
