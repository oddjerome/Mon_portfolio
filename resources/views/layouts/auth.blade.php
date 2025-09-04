<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="min-height: 100vh;">

    <div class="card shadow-lg p-4 w-100" style="max-width: 450px;">

        <!-- 🔹 Logo -->
        <div class="text-center mb-4">
            <i class="bi bi-code-slash display-3 text-primary"></i>
            <h2 class="fw-bold mt-2">MonPortfoli0</h2>
            <p class="text-muted">Développeur Web & Data Scientist</p>
        </div>

        <!-- 🔹 Messages flash -->
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

        <!-- 🔹 Contenu -->
        @yield('content')
    </div>

</body>
</html>
