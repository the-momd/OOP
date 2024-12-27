<?php

namespace App\Models;
include "baseModel.php";

class User extends BaseModel {
    public function __construct(){
        echo "New" .__NAMESPACE__. "Object Created" . PHP_EOL;
    }
}