<?php

class Person {
    public $name;
    private $natioalCode;
    private $age;
    protected $income;
    
    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
        $this->setNationalCode(rand(100,1000));
    }

    # setters

    public function setNationalCode($natioalCode){
        
        # validation => //if(isSabteAhval()){
            $this->natioalCode = $natioalCode;
        //}
    }
    
    public function setAge($age){
        $this->age = $age;
    }
    
    public function setIncome($income){
        $this->income = $income;
    }

    # getters

    public function getNationalCode(){
       return $this->natioalCode;
    }
    
    public function getAge(){
       return $this->age;
    }
    
    public function getIncome(){
       return $this->income;
    }


}

$Mohammad = new Person("Mohammad Amiri",30);
echo $Mohammad->name . PHP_EOL;
echo $Mohammad->getAge() . PHP_EOL;
$Mohammad->setIncome(5000000);
echo $Mohammad->getIncome() . PHP_EOL;
echo $Mohammad->getNationalCode();  