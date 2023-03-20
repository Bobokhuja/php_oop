<?php

use;

class BookProduct extends Product
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
}