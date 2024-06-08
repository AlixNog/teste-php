<?php

$a = 1;
$b = 80;
$c = 3;

$n1 = "joao";
$n2 = "maria";

if( is_numeric($b) ){
    
    
    $multi = $b * 2;

    echo "é numerico<br>";

    if($multi >= 100){
        echo "é maior ou igual a 100<br>";
    }
}else{
    echo "a variavel é uma string<br>";
}