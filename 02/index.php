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

$car2->brand = 'mclaren';
$car2->color = 'red';
$car2->speed = 450;

$car2->year = 2021;

debug($car1);
debug($car2);

echo "
<h2>Информация о моем авто:</h2>
<p>
    <b>Модель:</b> {$car2->brand}
</p>
<p>
    <b>Скорость:</b> {$car2->speed}
</p>
<p>
    <b>Кол-во колес:</b> {$car2->wheels}
</p>
<p>
    <b>Цвет:</b> {$car2->color}
</p>
<p>
    <b>Год производства:</b> {$car2->year}
</p>
";