<?php
abstract class Vehicle {
    public $brand;
    protected $mileage = 0;

    abstract static function makeSound();
}