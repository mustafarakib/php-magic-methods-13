<?php

class Person{
    public $name = "Default Name";
    public $address = "Default Address";
    public $phone = "Default Phone Number";

    public function __sleep(){
        return array("name","phone");
    }

    public function __wakeup(){
        $this->doSomething();
    }

    public function doSomething(){
        echo "I'm doing something<br>";
    }
}

$obj = new Person();

$myVar  =  serialize($obj);
var_dump($myVar);

$newObj = unserialize($myVar);
var_dump($newObj);
