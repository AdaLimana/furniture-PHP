<?php

require 'vendor/autoload.php';

use Adair\Furniture\VictorianFunitureFactory;

$funitureFactory = new VictorianFunitureFactory();
$chair = $funitureFactory->createChair();
$table = $funitureFactory->createTable();
$sofa = $funitureFactory->createSofa();

echo "\n";
$chair->onSit();
echo "\n";
$table->onServer();
echo "\n";
$sofa->onSleep();
echo "\n";