<?php
// index.php

require_once 'Bicycle.php';
require_once 'Car.php';
$bike = new Bicycle();
$bike->color = 'blue';
$bike->currentSpeed = 0;

var_dump($bike);
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
?><br>
<?php
$car = new Car();
echo $car->start();
echo 'démarrrage';
echo $car->forward();
echo '<br> Vitesse du véhicule : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse du véhicule: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();