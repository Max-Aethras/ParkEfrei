<?php

namespace Maxim\ParkEfrei\Repository;

use Maxim\ParkEfrei\Model\Car; // Assurez-vous que c'est le bon namespace

class CarRepository
{
    private $dataFile;

    public function __construct()
    {
        $this->dataFile = __DIR__ . '/../../data/cars.json';
    }

    public function findAll()
    {
        if (!file_exists($this->dataFile)) {
            echo 'Le fichier JSON n\'existe pas.<br>';
            return [];
        }

        $data = file_get_contents($this->dataFile);
        
        if ($data === false) {
            echo 'Erreur lors de la lecture du fichier JSON.<br>';
            return [];
        }

        $cars = json_decode($data, true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            echo 'Erreur de décodage JSON : ' . json_last_error_msg() . '<br>';
            return [];
        }

        return $cars; // Renvoie les voitures
    }

    public function save(Car $car)
    {
        $cars = $this->findAll();
        $car->id = count($cars) + 1; // Assigner un ID unique
        $cars[] = [
            'id' => $car->id,
            'make' => $car->make,
            'model' => $car->model,
            'year' => $car->year,
        ];
        file_put_contents($this->dataFile, json_encode($cars, JSON_PRETTY_PRINT));
    }
}
