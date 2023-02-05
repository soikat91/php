<?php

$year=2000;

if($year%4==0 && $year%100==0 && $year%400==0){
    
    echo "{$year} is leaf year";
}elseif($year%4==0 && $year%100==0){
    echo "{$year} is not leaf year";
}elseif($year%4==0){
    echo "{$year} is leaf year";
}else{
    echo "{$year} is not leaf year";
}

// other program
echo "\n";

// if(true && false){
//     echo "soikat";
// }

if($year%4==0 && ($year%100==0 && $year%400==0)){
    echo "{$year} is leaf year";
}else{
    echo "{$year} is not leaf year";
}