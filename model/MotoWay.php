<?php

require_once("HighWay.php");
require_once("Vehicle.php");

final class MotoWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane=4;
    private int $maxSpeed=130;  

    /**
     * Get the value of currentVehicles
     */ 
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * Set the value of currentVehicles
     *
     * @return  self
     */ 
    public function setCurrentVehicles(Vehicle $currentVehicle)
    {
        $this->currentVehicles[] = $currentVehicle;

        return $this;
    }

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;

        return $this;
    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    /**
     * Constructeur
     */

     public function __construct()
     {
         $currentVehicles=[];
     }

    /**
     * Methodes
     */
    public function addVehicle(Vehicle $currentVehicle) : bool
    {
        if ($currentVehicle instanceof Car) {
            $currentVehicles[]=$currentVehicle;
            return true;
        }
        return false;
    }

}

