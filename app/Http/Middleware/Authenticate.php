<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Obtenir l’URL vers laquelle rediriger si l’utilisateur n’est pas authentifié.
     */
    protected function redirectTo($request): ?string
    {
        if (! $request->expectsJson()) {
            return route('login'); // redirige vers login si non connecté
        }
        return null;
    }
}
