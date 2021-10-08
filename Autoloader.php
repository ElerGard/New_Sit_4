<?php

function customAutoload(string $classN)
{
    $path = str_replace('Phone\\', DIRECTORY_SEPARATOR, $classN);
    require_once __DIR__ . "$path.php";
}

spl_autoload_register('customAutoload');

$myphone = new \Phone\Phone("asf");
$samsung = new \Phone\Samsung();

echo $myphone->getModel();
echo "<p>";
echo $samsung->getModel();
