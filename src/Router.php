<?php

namespace Maxim\ParkEfrei;

use Maxim\ParkEfrei\Controller\CarController;

class Router
{
    private $routes = [
        '/' => ['CarController', 'index'],
        '/car/create' => ['CarController', 'create'],
    ];

    public function dispatch()
    {
        // Exemple de routage simple
        $uri = $_SERVER['REQUEST_URI'];

        if ($uri === '/') {
            $controller = new CarController();
            $controller->index();
        } elseif ($uri === '/car/create') {
            $controller = new CarController();
            $controller->create();
        } else {
            // Gérer les routes non trouvées
            echo "404 Not Found";
        }
    }
}
