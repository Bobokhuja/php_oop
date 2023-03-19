<?php

class Car
{
    public $color;
    public $wheels = 4;
    public $speed = 180;

    public $year;

    var $brand;

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
}