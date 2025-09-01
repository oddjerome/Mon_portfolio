<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class FindAdminRoutes extends Command
{
    /**
     * Nom et signature de la commande.
     *
     * @var string
     */
    protected $signature = 'routes:find-admin';

    /**
     * Description de la commande.
     *
     * @var string
     */
    protected $description = 'Lister toutes les routes contenant /admin pour détecter des doublons';

    /**
     * Exécuter la commande.
     */
    public function handle()
    {
        $routes = collect(Route::getRoutes())->filter(function ($route) {
            return str_contains($route->uri(), 'admin');
        });

        if ($routes->isEmpty()) {
            $this->info("⚠️ Aucune route contenant 'admin' trouvée.");
            return;
        }

        $this->table(
            ['Méthode', 'URI', 'Nom', 'Contrôleur', 'Middleware'],
            $routes->map(function ($route) {
                return [
                    implode('|', $route->methods()),
                    $route->uri(),
                    $route->getName(),
                    $route->getActionName(),
                    implode(',', $route->middleware()),
                ];
            })->toArray()
        );
    }
}
