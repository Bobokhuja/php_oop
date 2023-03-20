<?php

namespace app;

use core\interfaces\I3D;
use core\Product;

class BookProduct extends Product implements I3D
{
    public $numPages;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }

    public function getNumPages()
    {
        return $this->numPages;
    }

    public function getProduct()
    {
        return parent::getProduct() . "<p><b>Кол-во страниц: </b> {$this->getNumPages()}</p>";
    }

    public function test()
    {
        echo 1;
        return $this;
    }

    public function test2() {
        echo 2;
        return $this;
    }
}