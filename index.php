<?php
require_once './Bicycle.php';
require_once './Car.php';

$bike = new Bicycle('blue', 1, 'strong human energy');

// Instanciation d'un nouvel objet $car1 
$car1 = new Car('yellow', 4, 'diesel');

echo $car1->start();
echo $car1->forward();
echo $car1->brake();

?>