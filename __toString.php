<?php

class Person{
    public $name;

    public function __toString(){
        return "Are you crazy! I'm just an object! Not a string ";
    }
}
$obj = new Person();
$str =  $obj."Hello";
echo $str;
