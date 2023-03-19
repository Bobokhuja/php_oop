<?php

error_reporting(-1);

require_once './classes/File.php';

$file1 = new File('file.txt');

$file1->writeFile('Hello');