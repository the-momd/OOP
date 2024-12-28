<?php
namespace App\Utilities;

class User {
    public function __construct(){
        echo "New" .__NAMESPACE__. "Object Created" , PHP_EOL;
    }

    public static function test(){
        echo "UserUtil: Test" . PHP_EOL;
    }
}