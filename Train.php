<?php
require_once "Vehicle.php";
class Train extends Vehicle {

    function __construct($brand, $mileage){
        $this->brand = $brand;
        $this->mileage = $mileage;
    }
    static function makeNoise(){
        echo "Choo Choo!!!";
    }
}