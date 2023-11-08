<?php

class Cat{
    public $name;
    private $age = 0;

    public function birthday(){
        $this->age = $age+1;
        echo "Age - ".$this->age;
    }
    static function moew(){
        echo "meow";
    }
}