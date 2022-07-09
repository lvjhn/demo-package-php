<?php
require_once "vendor/autoload.php";

use DemoPackagePHP\DemoPackage;

$demo_package = new DemoPackage();

echo "->sayHello() => " . $demo_package->sayHelloWorld() . "\n"; 
echo "->sayHi('John') => " . $demo_package->sayHi('John') . "\n";
echo "->randomRainbowColor() => " . $demo_package->randomRainbowColor() . "\n";