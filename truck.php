<?php
$truck = new Truck (50, 'red', 4, 'nuclear');

echo $truck->forward();

var_dump($truck);

class truck extends Vehicle
{
    public const ALLOWED_LOADING = [

        'in_filling',

        'full',

    ];

    protected string $storageCapacity;


    protected int $loadingCapacity;



    public function getstorageCapacity(): int

    {

        return $this->storageCapacity;

    }


    public function setloadingCapacity(int $loadingCapacity): void

    {

        if($loadingCapacity >= 0){

            $this->loadingCapacity = $loadingCapacity;

        }
    }

}