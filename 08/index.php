<?php

error_reporting(-1);

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/NotebookProduct.php';
require_once __DIR__ . '/classes/BookProduct.php';

function debug(object $data): void
{
    echo "<pre>" . print_r($data, 1) . "</pre>";
}

$book = new BookProduct('Три мушкетёра', 20, 250);
$notebook = new NotebookProduct('ASUS ROG', 20000, 'Intel Core i7');

echo $book->getProduct();
echo $notebook->getProduct();