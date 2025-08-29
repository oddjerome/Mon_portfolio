<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

// ----------------------
// Routes ADMIN (protégées par auth + is_admin)
// ----------------------
Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

    // CRUD Projets (sauf index + show car publics)
    Route::resource('projects', ProjectController::class)->except(['index', 'show']);

    // CRUD Articles (sauf index + show car publics)
    Route::resource('posts', PostController::class)->except(['index', 'show']);

    // Messages (juste consultation et suppression)
    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
});

// ----------------------
// Routes PUBLIQUES
// ----------------------

// Page d’accueil = liste des projets
Route::get('/', [ProjectController::class, 'index'])->name('home');

// Détails d’un projet
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');

// Blog : liste et détail articles
Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');

// Contact
Route::get('/contact', [MessageController::class, 'create'])->name('contact');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');



// ----------------------
// Auth (Breeze/Fortify déjà installé)
// ----------------------
require __DIR__.'/auth.php';

