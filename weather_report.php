<?php

/** @var TYPE_NAME $temperature */

$temperature = 0;

if($temperature <= 0){
    echo "It's freezing!.";
}elseif($temperature > 0 && $temperature <= 15){
    echo "It's Cool!.";
}elseif($temperature > 15){
    echo "It's Cwarmool!.";
}else{
    echo "Invalid temperature.";
}

