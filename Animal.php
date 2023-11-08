<?php

abstract class Animal {
    public $name;
    private $age = 0;

    public function __construct($name) {
        $this->name = $name;
    }

    public function birthday(){
        $this->age = $this->age + 1;
        echo "Age - " . $this->age;
    }

    abstract function eat();
}

