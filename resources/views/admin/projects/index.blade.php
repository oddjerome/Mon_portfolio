@extends('layouts.admin')

@section('title', 'Gestion des Projets')

@section('content')
    <h1 class="mb-4">Gestion des Projets</h1>

    <!-- Bouton pour ajouter un projet -->
    <a href="{{ route('projects.create') }}" class="btn btn-primary mb-3">+ Ajouter un projet</a>

    <!-- Tableau des projets -->
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Titre</th>
                <th>Technologies</th>
                <th>Liens</th>
                <th>Date</th>
                <th style="width: 180px;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
                <tr>
                    <td><strong>{{ $project->title }}</strong></td>
                    <td>{{ $project->technologies ?: '—' }}</td>
                    <td>
                        @if($project->github_link)
                            <a href="{{ $project->github_link }}" target="_blank" class="btn btn-sm btn-dark">GitHub</a>
                        @endif
                        @if($project->demo_link)
                            <a href="{{ $project->demo_link }}" target="_blank" class="btn btn-sm btn-info">Démo</a>
                        @endif
                    </td>
                    <td>{{ $project->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                        
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Supprimer ce projet ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Aucun projet trouvé.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination (si activée dans le contrôleur) -->
    <div class="mt-3">
        {{ $projects->links() }}
    </div>
@endsection
