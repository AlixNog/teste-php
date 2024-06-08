<?php

$nome = "alix";
$idade = 31;
$altura = 1.63;
$mulher = false;

echo "seu nome é $nome e sua idade é $idade anos";
echo "<br>";
echo "tem sua altura de : $altura metros";
echo "<br>";
echo "e ela é mulher: $mulher";
echo "<br>";

if( $mulher == 1){
    echo "e ela é mulher";
}else{
    echo "e ele é homem";
}