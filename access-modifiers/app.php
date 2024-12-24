<?php

class A {
    private $privateVar =  "A: Private";
    public $publicVar =  "A: Public";
    protected $protectedVar =  "A: protected";


    function test(){
        echo $this->privateVar . " | " . $this->protectedVar . " | " . $this->publicVar . " | ";
    }
     
}

// $A1 = new A();
// echo $A1->test();

class B {

}

class C extends A {
    private $privateVar =  "C: Private";
    public $publicVar =  "C: Public";

    public function testC(){
        $this->protectedVar = "A: Protected(Modified By C)";
        echo $this->privateVar . " | " . $this->protectedVar . " | " . $this->publicVar . " | ";
    }
}

class D extends C {

}

class L extends C {

}

$C1 = new C();
echo $C1->testC();