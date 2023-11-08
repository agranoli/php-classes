<?php
//1.velos izveidot klasi
class Car{
    //2. velos lai ir publiska ipasiba brand
    public $brand;
    private $mileage = 0;

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

