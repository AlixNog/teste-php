<?php


/*$i = 0;
$c = "variavel teste"; 

while($i <= 10){

    echo "loop externo $i <br>";

    $j = 1;

    echo "$c <br>";

    while($j <= 5){

        echo "loop interno $j <br>";

        echo "$c 2 <br>";

        $j++;
    }

    $i++;
} */

$array = [10,20,30,40,50,60,70,80,90,100];

$i = 0;
$y = count($array);
while($i < $y){

    if($array[$i] == 30 || $array[$i] == 40 ){

       continue; 
    }

    echo $array[$i] . "<br>";

    $i++;
} 