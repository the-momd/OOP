<?php

function MyAutoLoader($class){
    $classFile = __DIR__ . "/$class.php";
    if(file_exists($classFile) && is_readable($classFile)){
        include $classFile;
    }else{
        die("$classFile doesen't exist!\n");
    }
    // echo "from MyAutoLoader => $class used. \n";
}

# using this function allows you to use your aoutoloader
spl_autoload_register('MyAutoLoader');