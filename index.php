<?php
require_once 'Car.php';
require_once 'Bike.php';

const BR = '<br>';

$car = new Car('purple', 7, 'fuel');
$bike = new Bike('blue', 2);

$bike->setCurrentSpeed(8);
echo sprintf("BIKE roule à %d km/h switchOn vaut %d switchOff vaut %d", $bike->getCurrentSpeed(), $bike->switchOn(),$bike->switchOff());
echo BR . BR;
$bike->setCurrentSpeed(20);
echo sprintf("BIKE roule à %d km/h switchOn vaut %d switchOff vaut %d", $bike->getCurrentSpeed(), $bike->switchOn(),$bike->switchOff());
echo BR . BR;

$car->setCurrentSpeed(9);
echo sprintf("CAR roule à %d km/h switchOn vaut %d switchOff vaut %d", $car->getCurrentSpeed(), $car->switchOn(),$car->switchOff());
echo BR;
