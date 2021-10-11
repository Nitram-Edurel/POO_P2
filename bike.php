<?php

require_once 'Vehicle.php';
$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

class Bicycle extends Vehicle

{
    

}

?>
