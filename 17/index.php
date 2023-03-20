<?php

use app\A;
use app\BookProduct;
use app\NotebookProduct;
use core\interfaces\IGadget;
use core\Product;
use PHPMailer\PHPMailer\PHPMailer;

error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';

function debug(object $data): void
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

function offerCase(IGadget $product)
{
    echo "Предлагаем чехол для гаджета {$product->getName()}";
}

$book = new BookProduct('Три мушкетёра', 20, 250);
$book->setDiscount(10);
$notebook = new NotebookProduct('ASUS ROG', 20000, 'Intel Core i7');

echo $book->getProduct();
echo $notebook->getProduct();
offerCase($notebook);
//
//debug($book);
//debug($notebook);

//$a = new \app\A();
//$b = new \app\B();
//echo $a->getTest2();
//echo $b->getTest2();
echo $book->hello;
$book->hello = 321;

debug($book);

$a = A::getInstance();
$b = A::getInstance();

var_dump($a);
var_dump($b);