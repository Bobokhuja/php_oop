<?php

namespace core;
abstract class Product
{
    public $name;
    protected $price;
    protected $discount = 0;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function __toString()
    {
        return $this->getProduct();
    }

    public function getProduct()
    {
        return "
<hr><h2>{$this->name}</h2>
<p><b>Цена со скидкой:</b> {$this->getPrice()}</p>
<p><b>Цена без скидки:</b> {$this->price}</p>
<p><b>Скидка:</b> {$this->getDiscount()}%</p>
";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price - ($this->discount / 100 * $this->price);
    }

    /**
     * @return int
     */
    public function getDiscount(): int
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount(int $discount): void
    {
        $this->discount = $discount;
    }

    abstract function test();
}