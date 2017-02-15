<?php

class Person{

    public $name="Default Name";
    public $address="Default Address";
    public $phone="Default Phone Number";

    public static $myStaticProperty;

    public function __destruct(){
        echo "I'm inside ".__METHOD__."<br>";
    }

    public function __construct(){
        echo "I'm inside ".__METHOD__."<br>";
    }

    public function __call($name, $arguments){
        echo  "I'm inside ".__METHOD__."<br>";
        echo "Wrong method name = $name<br>";
        echo "<pre>";
        print_r($arguments);
        echo "</pre>";
    }

    public static function __callStatic($name, $arguments){
        echo  "I'm inside ".__METHOD__."<br>";
        echo "Wrong static method name = $name<br>";
        echo "<pre>";
        print_r($arguments);
        echo "</pre>";
    }

    public function __set($name, $value){
        echo  "I'm inside ".__METHOD__."<br>";
        echo "Wrong Perperty Name = $name <br>";
        echo "Value tried to set to that wrong property is = $value <br>";
    }

    public function __get($name){
        echo  "I'm inside ".__METHOD__."<br>";
        echo "Wrong Perperty Name = $name <br>";
    }

    public function __isset($name){
        echo  "I'm inside ".__METHOD__."<br>";
        echo "Wrong Perperty Name = $name <br>";
    }

    public function __unset($name){
        echo  "I'm inside ".__METHOD__."<br>";
        echo "Wrong Perperty Name = $name <br>";
    }

    public function __sleep(){
       return array("name","phone");
    }

    public function __wakeup(){
        $this->doSomething();
    }

    public function __toString(){
        return "Are you crazy! I'm just an Object! Not chat-b44 string!!!";
    }

    public function __invoke($value){
        echo "im inside ".__METHOD__."<br>";
        echo "value = $value<br>";
    }

    public function doSomething(){
        echo "I'm doing something<br>";
    }

    public static function doFrequently(){
        echo "I'm doing it frequently<br>";
    }
}

Person::$myStaticProperty = "Jorina";
Person::$myStaticProperty = "Kalam";

Person::doFrequently();
echo Person::$myStaticProperty;

Person::doFrequentliiiiiiiiiiiiiiiiiiiiiiiiiii("wrong static method parameter");

$obj = new Person();
echo "Hello World<br>";

$obj->doSomesafdsgf2143thing(2394384,"wrong method parameter");

$obj->dob = "set this string";

echo $obj->slkfdjlksjfdlks;

if( isset( $obj->erowuriwur )){
}
unset($obj->lkjxdfoiweu);

$myVar  =  serialize($obj);
var_dump($myVar);

$newObj = unserialize($myVar);
var_dump($newObj);

$str =  $obj."Hello";
echo $str;

$obj(12);
