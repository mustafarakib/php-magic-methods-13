<?php
class Company{
    public $title;
    public $number;

    public function __construct($title, $number){
        $this->title = $title;
        $this->number = $number;
    }
    public function bus(){
      echo "Company provide ".$this->number." buses for the ".$this->title ."<br>";
    }
}
$obj = new Company("workers",4);
$obj->bus();