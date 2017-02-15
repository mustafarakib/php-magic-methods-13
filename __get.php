<?php
class Person{
    public $name;

    public function __get($name){
        echo "I'm inside ". __METHOD__ ."<br>";
        echo "Wrong Perperty Name = $name<br>";
    }
}

$obj = new Person();
$obj->dob = "set this string";
    echo $obj->slkfdjlksjfdlks;
