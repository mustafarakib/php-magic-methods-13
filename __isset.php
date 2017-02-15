<?php

class Person{
    public $name;

    public function __isset($name){
        echo "I'm inside " . __METHOD__ . "<br>";
        echo "Wrong Perperty Name = $name <br>";
    }
}

$obj = new Person();
if( isset( $obj->erowuriwur )){
}
