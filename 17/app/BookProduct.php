<?php

namespace app;

use core\interfaces\I3D;
use core\Product;

class BookProduct extends Product implements I3D
{
    public $numPages;
    private $hello = 123;

    public function __construct($name, $price, $numPages)
    {
        parent::__construct($name, $price);
        $this->numPages = $numPages;
    }

    public function __get($name)
    {
        $name = ucfirst($name);
        $method = "get{$name}";
        if (method_exists($this, $method)) {
            return $this->$method();
        }
        return null;
    }

    public function __set($name, $value)
    {
        $name = ucfirst($name);
        $method = "set{$name}";
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
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

    /**
     * @return mixed
     */
    public function getHello()
    {
        return $this->hello;
    }

    /**
     * @param mixed $hello
     */
    public function setHello($hello): void
    {
        $this->hello = $hello;
    }
}