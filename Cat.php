<?php
require_once "Animal.php";

class Cat extends Animal {
    public function __construct($name) {
        parent::__construct(); // Call the parent class (Animal) constructor
        $this->name = $name; // Set the name property
        echo "PUSS in BOOTS\n";
    }

    public function eat() {
        return "I like whiskas";
    }
}

