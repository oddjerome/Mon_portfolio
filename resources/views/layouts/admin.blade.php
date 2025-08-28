<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3 vh-100" style="width: 220px;">
        <h4 class="mb-4">Admin</h4>
        <ul class="nav flex-column">
            <li class="nav-item"><a href="{{ route('admin.dashboard') }}" class="nav-link text-white">Dashboard</a></li>
            <li class="nav-item"><a href="{{ route('projects.create') }}" class="nav-link text-white">Ajouter Projet</a></li>
            <li class="nav-item"><a href="{{ route('posts.create') }}" class="nav-link text-white">Ajouter Article</a></li>
            <li class="nav-item"><a href="{{ route('messages.index') }}" class="nav-link text-white">Messages</a></li>
        </ul>
    </div>

    <!-- Contenu -->
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>
</div>
</body>
</html>
