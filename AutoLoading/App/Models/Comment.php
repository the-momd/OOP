<?php

namespace App\Models;
include "baseModel.php";

class Coment extends BaseModel {
    public function __construct(){
        echo "New" .__NAMESPACE__. "Comment Object Created" . PHP_EOL;
    }
}