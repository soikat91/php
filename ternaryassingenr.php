<?php

$tuition_fee=10000;


//  $calculate=$tuition_fee>=20000 ? ("25%"):($tuition_fee<20000 && $tuition_fee>=10000? ("20%"):($tuition_fee<10000 && $tuition_fee>=7000 ? ("15%"):("failed")));
 $calculate=$tuition_fee>20000 ? ("Tuition Fee {$tuition_fee} dolor  Commission is: ".(25/100)*$tuition_fee):($tuition_fee<=20000 && $tuition_fee>10000? ("Tuition Fee {$tuition_fee} dolor  Commission  is: ".(20/100)*$tuition_fee):($tuition_fee<=10000 && $tuition_fee>=7000 ? ("Tuition Fee {$tuition_fee} dolor  Commission is: ".(15/100)*$tuition_fee):("Tuition Fee {$tuition_fee} no Commission available")));
 echo $calculate;

// $calculate =$tuition_fee>20000 ? (25/100)*$tuition_fee:($tuition_fee>10000) ? (20/100)*$tuition_fee:($tuition_fee>7000) ?(15/100)*$tuition_fee;
// echo "\n";
// // $calculate= $tuition_fee>20000 ?(25/100)*$tuition_fee:($tuition_fee>10000)?(25/100)*$tuition_fee:($tuition_fee>7000)?(15/100)*$tuition_fee:"s";
// $calculate=$tuition_fee>=20000 ? ((25/100)*$tuition_fee):($tuition_fee>=10000? ((20/100)*$tuition_fee):( $tuition_fee>=7000 ? ((15/100)*$tuition_fee):("failed")));
// echo "{$tuition_fee} commission is {$calculate}";

//  echo ("\n");
// if($amount>=20000){
//     $result=(25 /100)*$amount;
//     echo $result;
// }elseif($amount<20000 && $amount >=10000){
//     $result=(20 /100)*$amount;
//     echo $result;
// }elseif($amount< 10000 && $amount >=7000){
//     $result=(15 /100)*$amount;
//     echo $result;
// }else{
//     echo "Failed";
// }

 echo "\n";
// function calculate_commission($tuition) {
//    $res= ($tuition >= 20000) ? 0.25 * $tuition : (($tuition >= 10000 && $tuition < 20000) ? 0.2 * $tuition : (($tuition >= 7000 && $tuition < 10000) ? 0.15 * $tuition : "Invalid data"));
//   echo $res;
// }
// calculate_commission(21000);

// if($tuition_fee>20000){
//     echo "25%";
// }elseif($tuition_fee>10000){
//     echo "20%";
// }elseif($tuition_fee>7000){
//     echo "15%";
// }else{
//     echo "invalid";
// }