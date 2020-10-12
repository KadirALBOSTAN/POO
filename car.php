<?php

class Car
{
    private $nbWheels;
    private $currentSpeed;
    private $nbSeats;
    private $energyLevel;
    private $color;
    private $energy;

    public function __construct(string $color, int $nbSeats, string $energyLevel)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->fuelType = $energyLevel;
    }
    public function start() : string
    {
        $this->currentSpeed = 10;

        return 'Car started!';
    }

    public function forward()
    {
        $this->currentSpeed = 15;

        return "Move!";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;

    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }
}

?>