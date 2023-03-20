<?php

namespace classes;

use classes\interfaces\I3D;

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
        // TODO: Implement test() method.
    }

    public function test2() {

    }
}