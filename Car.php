<?php
//1.velos izveidot klasi
require_once "Vehicle.php";
class Car extends Vehicle {

    function __construct($b, $m){
        $this->brand = $b;
        $this->mileage = $m;
    }

    function __destruct(){
        echo $this->brand . " is dead";
    }

    static function makeNoise() {
        echo "Beep, beep!!!";
    }
}

