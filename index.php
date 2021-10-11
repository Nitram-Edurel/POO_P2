<?php

require_once 'bike.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

require_once 'car.php';
$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump(Car::ALLOWED_ENERGIES);

require_once 'truck.php';
$truck = new Truck(50, 'red', 5, 'nuclear');
echo $truck->forward();


$car->color = 'blue';
$car->currentSpeed = 0;


echo $car->forward();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->brake();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->start();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->getNbWheels();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->getCurrentSpeed();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->getColor();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->getNbSeats();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';


echo $car->getEnergy();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $car->getEnergyLevel();

echo '<br> Vitesse de la voiture : ' . $car->currentSpeed . ' km/h' . '<br>';

/*echo $car->getstorageCapacity();

echo '<br> Vitesse du camion : ' . $car->currentSpeed . ' km/h' . '<br>';

echo $truck->setloadingCapacity();

echo '<br> Vitesse du camion : ' . $car->currentSpeed . ' km/h' . '<br>';
*/