<?php

use;
use;

error_reporting(-1);

require_once __DIR__ . '/classes/Product.php';

function debug(object $data): void
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$book = new Product('Три мушкетёра', 20, null, 250);
$notebook = new Product('ASUS ROG', 20000, 'Intel Core i7');

echo $book->getProduct();
echo $notebook->getProduct('notebook');