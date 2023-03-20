<?php

class Product
{
    public $name;
    public $price;
    public $numPages;
    public $cpu;

    public function __construct($name, $price, $cpu = null, $numPages = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->cpu = $cpu;
        $this->numPages = $numPages;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProduct($type = 'book')
    {
        $out = "<hr><h2>{$this->name}</h2>
<p><b>Цена:</b> {$this->price}</p>
";
        if ($type === 'book') {
            $out .= "<p><b>Кол-во страниц: </b> {$this->numPages}</p>";
        } else {
            $out .= "<p><b>Микропроцессор: </b> {$this->cpu}</p>";
        }
        return $out;
    }
}