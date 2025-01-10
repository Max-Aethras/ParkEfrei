<?php

namespace Maxim\ParkEfrei;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Config
{
    public static function getTwig()
    {
        $loader = new FilesystemLoader(__DIR__ . '/../templates'); // Répertoire des templates
        return new Environment($loader, [
            'cache' => __DIR__ . '/../cache', // Répertoire de cache
            'auto_reload' => true // Recharge les templates modifiés
        ]);
    }
}
