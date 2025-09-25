<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\HomeController;

// ----------------------
// Routes PUBLIQUES
// ----------------------

// Page d'acceuil
Route::get('/', [HomeController::class, 'index'])->name('home');

//Liste des projets
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

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
Route::middleware(['auth', 'is_admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // CRUD Projets (admin uniquement)
    Route::resource('projects', AdminProjectController::class)->except(['show']);

    // CRUD Articles (admin uniquement)
    Route::resource('posts', AdminPostController::class)->except(['show']);

    // Messages (juste consultation et suppression)
    Route::resource('messages', MessageController::class)->only(['index', 'show', 'destroy']);

    // ✅ Nouveau pour modérer les commentaires
    Route::resource('comments', \App\Http\Controllers\Admin\CommentController::class)->only(['index', 'destroy']);
});

// ----------------------
// Routes USER (protégées par auth)
// ----------------------
Route::middleware(['auth'])->group(function () {
    Route::post('/posts/{post}/comments', [App\Http\Controllers\CommentController::class, 'store'])
        ->name('comments.store');
});


// ----------------------
// Auth (Breeze/Fortify déjà installé)
// ----------------------
require __DIR__ . '/auth.php';
