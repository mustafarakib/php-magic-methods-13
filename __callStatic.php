<?php

class Person{
    public $name;
    public static $myStaticProperty;

    public static function __callStatic($name, $arguments){
        echo  "I'm inside ".__METHOD__."<br>";

        echo "Wrong static method name = $name<br>";

        echo "<pre>";
            print_r($arguments);
        echo "</pre>";
    }

    public static function doFrequently(){
        echo "I'm doing it frequently<br>";
    }
}
Person::$myStaticProperty = "Jorina";
Person::$myStaticProperty = "Kalam<br>";

Person::doFrequently();
echo Person::$myStaticProperty;

Person::doFrequentliii("wrong static method parameter");


