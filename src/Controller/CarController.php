<?php

namespace Maxim\ParkEfrei\Controller;

use Maxim\ParkEfrei\Repository\CarRepository;
use Maxim\ParkEfrei\Model\Car;
use Maxim\ParkEfrei\Config;

class CarController 
{
    private $repository;
    private $twig;

    public function __construct() 
    {
        $this->repository = new CarRepository();
        $this->twig = Config::getTwig();
    }

    public function index() 
    {
        $cars = $this->repository->findAll();
        echo $this->twig->render('cars/list.html.twig', ['cars' => $cars]);
    }

    public function create() 
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $make = $_POST['make'];
            $model = $_POST['model'];
            $year = $_POST['year'];

            $car = new Car(null, $make, $model, (int)$year);
            $this->repository->save($car);

            header('Location: /');
            exit();
        }

        echo $this->twig->render('cars/create.html.twig');
    }
}
