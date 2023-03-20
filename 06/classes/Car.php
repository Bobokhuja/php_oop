<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $year;
    public $brand;
    public static $countCar = 0;

    const BASE_COLOR = 'black';
    const BASE_SPEED = 220;

    public function __construct($brand, $speed, $year, $color, $wheels = 4)
    {
        $this->year = $year;
        $this->brand = $brand;
        $this->speed = $speed;
        $this->color = $color;
        $this->wheels = $wheels;
        self::$countCar++;
    }

    public static function getCountCar(): int
    {
        return self::$countCar;
    }

    public function getCarInfo()
    {
        return "
<h2>Информация о моем авто:</h2>
<p>
    <b>Модель:</b> {$this->brand}
</p>
<p>
    <b>Скорость:</b> {$this->speed}
</p>
<p>
    <b>Кол-во колес:</b> {$this->wheels}
</p>
<p>
    <b>Цвет:</b> {$this->color}
</p>
<p>
    <b>Год производства:</b> {$this->year}
</p>
";
    }

    public function getPrototypeInfo()
    {
        return "
<h2>Информация тестового авто:</h2>
<p>
    <b>Скорость:</b>" . self::BASE_SPEED . "
</p>
<p>
    <b>Цвет:</b> " . self::BASE_COLOR . "
</p>
        ";
    }
}