<?php

class Person{
    public $name;
    
    public function __unset($name){
        echo "I'm inside " . __METHOD__ . "<br>";
        echo "Wrong Perperty Name = $name <br>";
    }
}
$obj = new Person();
unset($obj->lkjxdfoiweu);
