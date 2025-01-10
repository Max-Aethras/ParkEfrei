<?php

namespace Maxim\ParkEfrei\Model;

class Car
{
    public $id;
    public $make;
    public $model;
    public $year;

    public function __construct($id, $make, $model, $year)
    {
        $this->id = $id;
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
}
