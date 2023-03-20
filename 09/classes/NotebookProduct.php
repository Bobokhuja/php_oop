<?php

class NotebookProduct extends Product
{
    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getProduct()
    {
        return parent::getProduct() . "<p><b>Микропроцессор: </b>{$this->cpu}</p>";
    }
}