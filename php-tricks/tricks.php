<?php

class Person {
    public $name;
    public $father;

    public function __construct($name){
        $this->name = $name;
    }

    public function printName(){
        echo $this->name . PHP_EOL;
    }
}

$person1 = new Person('Sara');
$person2 = clone $person1; # person2 = person1 is a reference to person1, it's not a copy but if you use clone, it's a copy

$person2->printName();
$person2->name = 'Mohammad';
$person2->printName();
$person1->printName();

$person2arr = (array)$person2; # convert object to array
$person3 = (OBJECT)$person2arr; # convert array to object
var_dump($person2arr);
var_dump($person3);

$person3->printName();