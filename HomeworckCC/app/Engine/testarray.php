<?php

namespace App\Engine;
require_once '../../vendor/autoload.php';


$car = new Car(new Engine('Diesel',155));

$car->start();
$car->up();
echo $car->getEngineStatus().PHP_EOL;
echo $car->getSpeed().PHP_EOL;


