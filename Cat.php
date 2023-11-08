<?php

class Cat{
    public $name;
    private $age = 0;

    public function birthday(){
        $this->age = $age+1;
        echo $this->age;
    }
    static function moew(){
        echo "meow";
    }
}