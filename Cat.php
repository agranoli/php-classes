<?php
require_once "Animal.php";

class Cat extends Animal {

    public function eat() {
        return "I like whiskas";
    }
    public function __construct($name) {
        parent::__construct($name);
        echo "PUSS in BOOTS\n";
    }
}

