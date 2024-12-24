<?php

class Car {

    public string $brand;
    public string $model;
    public string $color;

    public function __construct($brand,$model,$color)
    {   
        $this->brand = $brand;
        $this->color = $color;
        $this->model = $model;
        echo "$this->color $this->brand $this->model Created \n";
    }

    public function printInfo(){
        echo "Info: $this->color | $this->brand | $this->model \n";
    }

    public function __destruct()
    {
        echo "$this->color $this->brand $this->model Destroyed! \n";

    }
}

$Pride = new car("Saipa","Pride","White");
$Pride->printInfo();
$Benz = new car("Mercades","S Class","Black");
$Benz->printInfo();
$BMW = new car("BMW","M Series","Blue");
$BMW->printInfo();