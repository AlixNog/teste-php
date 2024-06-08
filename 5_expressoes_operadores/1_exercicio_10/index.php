<?php

$a = 12;
$b = 5;
$c = 8;
$t = 0;

if( $a >= $b & $a > 0 & $t >= 0 & $c > 0){
    
    $resultado =  $a - $b * $t / $c;
    echo $resultado;
    
}else{ 
    echo "verifique os valores para uma expressao válida";
}


