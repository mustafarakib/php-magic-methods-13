<?php

class Person{
    public $name = "Default Name";
    public $address = "Default Address";
    public $phone = "Default Phone Number";

    public function __sleep(){
        return array("name","phone");
    }
}
$obj = new Person();
$myVar  =  serialize($obj);
var_dump($myVar);
