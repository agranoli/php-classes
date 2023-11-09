<?php

require_once("Cat.php");
require_once("Dog.php");


$dog = new Dog("Curix");
echo $dog->eat() . "\n";

$cat = new Cat("Fluffy");
echo $cat->eat() . "\n";


