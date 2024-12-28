<?php
// include "Person.php";
// include "Teacher.php";
// include "Student.php";
include "AutoLoad.php";

use App\Classes\Person;
use App\Classes\Teacher;
use App\Classes\Student;
use App\Classes\User;
use App\Utilities\User as UserUtil;

# optimizing purpuse
$r = rand(0,100);
var_dump($r);
if($r < 50){
    $Person1 = new Person;
    $Person1->printName();
}


$Teacher1 = new Teacher;
$Teacher1->printName();

$Student1 = new Student;
$Student1->printName();

$User1 = new User;
$User1->printName();

UserUtil::test();
