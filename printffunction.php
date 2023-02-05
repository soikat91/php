<?php
$firstName="Eman";
$lastName="Soikat";

printf("My Name is %s %s",$firstName,$lastName);
// eta print korle My Name is Eman Soikat dekhay so amra swap korte pari printf function use korte pari

//"" er mordhe $ sign thakle ta variable hisabe nay '' thake $ sign variable hisabe ney na

echo ("\n");
printf('My full name is %2$s %1$s',$firstName,$lastName);//%2 use kora hoice karon lastname  er position 2nd a

echo ("\n");

printf("Binary equivalent is %d to %b",12,12);

echo ("\n");
printf('Binary equivalent is %1$d to %1$b',12);//%1$d use kore amra 12 2 bar likhte holo na 

echo ("\n");

$fraction=1.434234;
printf("%.3f",$fraction);

echo ("\n");

$m=123;
$n=12;

printf("Two number is: \n %05d \n %05d",$m,$n);///// sm digit korar jnno %05 use kor hoice


echo "\n";
$x=123.4564;
$y=12.443423;

printf("First Number is %08.2f \n",$x);
printf("Second Number is %08.2f",$y);
