<?php

function f(){
    echo "from f()<br>";
}

function g(){
    echo "from g()<br>";
}

class Person {
    public $name;

    public function __construct(){
        $this->name = "Person-" . rand(100,999);
    }

    public function printName(){
        echo $this->name . "<br>";
    }

    public static function printHi($str = null){
        echo "Hi from ".static::class."<br>";
        if(!is_null($str)){
            echo "str: $str <br>";
        }
    }
}

class Student extends Person{
    
}

class Teacher extends Person{

}

# Dynamic function call
// $func = $_GET['function'];
// if(function_exists($func)){
//     $func();
// }else{
//     echo "Invalid Action<br>";
// }

# dynamic object instantiation
$class = $_GET['class'] ?? 'Person';
if(class_exists($class)){
    $object = new $class();
    // $class::printHi();
    // var_dump($object);
    # dynamic method call
    $method = $_GET['method'] ?? 'test';
    $str = $_GET['str'] ?? 'str';
    if(method_exists($object,$method)){
        $object->{$method}($str);
    }else{
        echo "Invalid Method $method()";
    }
}else{
    echo "Invalid Class $class";
}


// $person1->printName();