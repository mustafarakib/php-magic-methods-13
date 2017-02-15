<?php
class Person{
    public function __construct(){
        echo "Constructor called first. I'm inside " . __METHOD__ ."<br>";
    }
    public function __destruct(){
        echo "Finally distructor called. I'm inside ".__METHOD__."<br>";
    }
}

$obj = new Person();
unset($obj);
echo "Hello World";
