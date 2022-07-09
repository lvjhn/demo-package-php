<?php   
namespace DemoPackagePHP; 

require_once 'vendor/autoload.php';


class DemoPackage 
{
    public function sayHelloWorld() {
        return "Hello, World!";
    }

    public function sayHi($name) {
        return "Hi, $name!";
    }

    public function randomRainbowColor() {
                
        $faker = \Faker\Factory::create();
        $COLORS = [
            "red", 
            "orange",
            "yellow", 
            "green", 
            "blue", 
            "indigo", 
            "violet"
        ];
        
        return $faker->randomElement($COLORS);
    }
}
