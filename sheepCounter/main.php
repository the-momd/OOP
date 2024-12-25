<?php
include "sheep.php";


for( $i=0; $i<rand(1,200); $i++){
    $sheep = new Sheep;
    $sheep->baaa();
}
$sheep1 = new Sheep;
$sheep2 = new Sheep;

echo $sheep1::getCount();
echo $sheep2::getCount();
echo sheep::getCount();