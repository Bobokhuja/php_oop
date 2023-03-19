<?php

error_reporting(-1);

require_once './classes/Car.php';

function debug(object $data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();

$car1->color = 'black';
$car1->brand = 'volvo';
$car1->speed = 200;
$car1->year = 1999;

$car2->brand = 'mclaren';
$car2->color = 'red';
$car2->speed = 450;

$car2->year = 2021;

//debug($car1);
//debug($car2);

echo $car1->getCarInfo();
echo $car2->getCarInfo();