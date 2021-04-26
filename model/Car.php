<?php

require_once 'Vehicle.php';
require_once 'Lightable.php';

/**
 * Car.php
 */
class Car extends Vehicle implements LightableInterface
{
    private string $energy;
    private int $energyLevel;
    private string $name;
    private bool $hasParkBrake;

    public const ALLOWED_ENERGIES = [
        'electric',
        "fuel"
    ];

    // Constructor
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->currentSpeed = 0;
    }

    // Methode
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getName(): string
    {
        return "The <span style='color:white;background-color:" . $this->color . ";'> " . $this->name . " car " . $this->color . " </span>";
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function forward(): string // Avancer 
    {
        if ($this->getCurrentSpeed() !== 0) {
            $this->currentSpeed = 15;
            return "Go !";
        } else {
            return "Tu as oublié de démarrer !";
        }
    }

    public function start(): string // Démarrer
    {
       
            if ($this->hasParkBrake) {
                throw new Exception("Attention le frein à main est mis !");
            }      
            
            if ($this->currentSpeed === 0) {
                $this->currentSpeed = 1;
                return "On démarre !";
            }                   
        
        return "C'est déjà fait ! Speed is " . $this->currentSpeed;
    }

    /**
     * Get the value of hasParkBrake
     */
    public function getHasParkBrake()
    {
        return $this->hasParkBrake;
    }

    /**
     * Set the value of hasParkBrake
     *
     * @return  self
     */
    public function setParkBrake($hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;

        return $this;
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }
}
