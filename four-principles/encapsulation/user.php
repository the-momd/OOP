<?php

class User {
    private $name;
    private $email;

    public function __construct($name,$email){
        $this->name = $name;
        $this->email = $email;
    }

    public function setName($name){
        echo $this->name = $name;
    }

    public function setEmail($email){
        echo $this->email = $email;
    }

    public function getName(){
        return $this->email;
    }

    public function getEmail(){
        return $this->email;
    }

    # methods and functions should be relevent to the Class
    # so these functions should'nt be in this Class:
    // public function sum($a,$b){
    //     return $a+$b;
    // }

    // public function sendEmail($to,$subject,$content){
    //     email($to,$subject,$content);
    // }
}

class Math {
    public function sum($a,$b){
        return $a+$b;
    }
}

class Notification {
    public function sendEmail($to,$subject,$content){
        # email($to,$subject,$content);
    }

    public function sendSms($to,$subject,$content){
        # code to sms
    }
}