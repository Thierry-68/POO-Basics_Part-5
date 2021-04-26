<?php

require_once 'Vehicle.php';

abstract class HighWay 
{

    /** Value Private */
    private array $currentVehicles;
    private int $nbLane;
    private int $maxSpeed;

   

    abstract public function addVehicle(Vehicle $car);

}