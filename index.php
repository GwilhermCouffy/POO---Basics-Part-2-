<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

//on s'occupe du vélo
$bike = new Bicycle("blue", 1);

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

var_dump($bike);

//on passe à la voiture
$twingo = new Car("red", 4, "fuel");

echo $twingo->start() . '<br>';

echo $twingo->forward();
echo '<br> Vitesse du véhicule : ' . $twingo->getCurrentSpeed() . ' km/h' . '<br>';
echo $twingo->brake();
echo '<br> Vitesse du véhicule : ' . $twingo->getCurrentSpeed() . ' km/h' . '<br>';
echo $twingo->brake();

var_dump($twingo);

//var_dump(Car::ALLOWED_ENERGIES);

//et maintenant le gros camion
$grosCamion = new Truck("pink", 3, "fuel", 600);

var_dump($grosCamion);

$grosCamion->setChargement(1);
echo 'currently, the truck is ' . $grosCamion->isEmpty() . '<br>';

echo $grosCamion->forward();
echo '<br> Vitesse du Camion : ' . $grosCamion->getCurrentSpeed() . ' km/h' . '<br>';
echo $grosCamion->brake();
echo '<br> Vitesse du Camion : ' . $grosCamion->getCurrentSpeed() . ' km/h' . '<br>';
echo $grosCamion->brake();