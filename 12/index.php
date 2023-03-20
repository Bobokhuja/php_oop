<?php

use classes\BookProduct;
use classes\NotebookProduct;
use classes\interfaces\IGadget;
error_reporting(-1);

//require_once __DIR__ . '/classes/Product.php';
//require_once __DIR__ . '/classes/I3D.php';
//require_once __DIR__ . '/classes/IGadget.php';
//require_once __DIR__ . '/classes/NotebookProduct.php';
//require_once __DIR__ . '/classes/BookProduct.php';

function autoload($class)
{
    $file = __DIR__ . "/{$class}.php";
    $file = str_replace("\\", "/", $file);
    if (file_exists($file)) {
        require_once($file);
    }
}

spl_autoload_register('autoload');

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

var_dump($book instanceof NotebookProduct);
var_dump($book instanceof BookProduct);
var_dump($book instanceof Product);