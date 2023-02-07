<?php

$tuition_fee=21000;


$calculate = $tuition_fee > 20000 ? ((25 / 100) * $tuition_fee) :
($tuition_fee <= 20000 && $tuition_fee > 10000 ? ((20 / 100) * $tuition_fee) :
    ($tuition_fee <= 10000 && $tuition_fee > 7000 ? ((15 / 100) * $tuition_fee) : ("No Commission available")));

echo "Tuition fee is :{$tuition_fee}  and Commission is :$calculate";







