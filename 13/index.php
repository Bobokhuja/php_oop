<?php

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

var_dump($book instanceof NotebookProduct);
var_dump($book instanceof BookProduct);
var_dump($book instanceof Product);

$mailer = new PHPMailer();

debug($mailer);