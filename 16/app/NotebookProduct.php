<?php

namespace app;

use core\interfaces\IGadget;
use core\Product;
use core\traits\TColor;

class NotebookProduct extends Product implements IGadget
{
    use TColor;

    public $cpu;

    public function __construct($name, $price, $cpu)
    {
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getCase()
    {
        // TODO: Implement getCase() method.
    }

    public function getCpu()
    {
        return $this->cpu;
    }

    public function getProduct()
    {
        return parent::getProduct() . "<p><b>Микропроцессор: </b>{$this->cpu}</p>";
    }

    public function test()
    {
        // TODO: Implement test() method.
    }

    public function test2()
    {

    }
}