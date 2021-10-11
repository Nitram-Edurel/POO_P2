<?php

require_once 'Vehicle.php';

class truck extends Vehicle
{

    private int $storageCapacity = 0;


    private int $loadingCapacity;

    private int $energy;


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, Car::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getstorageCapacity(): int
    {
        return $this->$storageCapacity;
    }

    public function setstorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getloadingCapacity(string $loadingCapacity): string
    {
        return $this->$loadingCapacity;
    }

    public function setloadingCapacity(int $loadingCapacity): void
    {

        $this->storageCapacity = $loadingCapacity;
    }
}
