<?php
class Person{
    public $name;

    public function __call($name, $arguments){
        echo "I'm inside " . __METHOD__ . "<br>";

        echo "Wrong method name = $name<br>";

        echo "<pre>";
            print_r($arguments);
        echo "</pre>";
    }
    public function doSomething(){
        echo "I'm doing something<br>";
    }
}
$obj = new Person();
$obj->doSomethhhh(1234, "wrong method parameter");