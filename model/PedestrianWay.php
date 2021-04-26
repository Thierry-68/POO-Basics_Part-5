<?php

require_once("HighWay.php");
require_once("SkateBoard.php");
require_once("Bike.php");

final class PedestrianWay extends HighWay
{
    private array $currentVehicles;
    private int $nbLane=1;
    private int $maxSpeed=10;

    /**
     * Getter And Setter
    */

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
    public function setCurrentVehicles($currentVehicles)
    {
        $this->currentVehicles = $currentVehicles;

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

    public function addVehicle(Vehicle $currentVehicle) : bool
    {
        if ($currentVehicle instanceof SkateBoard || $currentVehicle instanceof Bike ) {
                $currentVehicles[]=$currentVehicle;
                return true;
            }
        return false;
    }

}