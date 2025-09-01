<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\PostController as AdminPostController;

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
// Routes ADMIN (protégées par auth + is_admin)
// ----------------------
Route::middleware(['auth', 'is_admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // CRUD Projets (admin uniquement)
    Route::resource('projects', AdminProjectController::class)->except(['show']);

    // CRUD Articles (admin uniquement)
    Route::resource('posts', AdminPostController::class)->except(['show']);

    // Messages (juste consultation et suppression)
    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);
});

// ----------------------
// Auth (Breeze/Fortify déjà installé)
// ----------------------
require __DIR__.'/auth.php';
