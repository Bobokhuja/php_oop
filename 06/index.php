<?php

error_reporting(-1);

require_once './classes/Car.php';

function debug(object $data): void
{
    echo '<pre>' . print_r($data, 1) . '</pre>';
}

echo Car::getCountCar();
$car1 = new Car('volvo', 200, 1999, 'black', 4);
echo Car::getCountCar();
$car2 = new Car('mclaren', 450, 2021, 'red', 4);
echo Car::getCountCar();

//debug($car1);
//debug($car2);

echo $car1->getCarInfo();
echo $car2->getCarInfo();
echo $car1->getPrototypeInfo();