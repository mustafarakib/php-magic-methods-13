<?php

class Person{
    public $name;

    public function __invoke($value){
        echo "I am inside ".__METHOD__."<br>";
        echo "value = $value";
    }
}

$obj = new Person();
$obj(12);
