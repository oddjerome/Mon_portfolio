<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Liste des projets (Frontend)
    public function index()
    {
        $projects = Project::latest()->get();
        return view('projects.index', compact('projects'));
    }

    // Affichage d’un projet spécifique
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    // Formulaire création (Admin)
    public function create()
    {
        return view('admin.projects.create');
    }

    // Enregistrement projet (Admin)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index')->with('success', 'Projet ajouté avec succès');
    }

    // Formulaire édition (Admin)
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    // Mise à jour projet (Admin)
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Projet modifié avec succès');
    }

    // Suppression projet (Admin)
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index')->with('success', 'Projet supprimé');
    }
}
