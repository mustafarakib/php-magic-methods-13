<?php

class Person{
    public $name;

    public function __set($name, $value){
        echo "I'm inside " . __METHOD__ . "<br>";
        echo "Wrong Perperty Name = $name <br>";
        echo "Value tried to set to that wrong property is = $value <br>";
    }
}

$obj = new Person();
$obj->dob = "set this string";
