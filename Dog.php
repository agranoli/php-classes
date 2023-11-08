<?php

class Dog{
    public $name;
    private $age = 0;

    function __construct($n, $a){
        $this->name = $n;
        $this->age = $a;
    }
    public function birthday(){
        $this->age = $this->age+1;
        echo "Age - ".$this->age;
    }
    static function woof(){
        echo "woof";
    }
}