<?php

/*$arr = [
    'porta' => 100,
    'macaneta' => 5,
    'motor' => 2000,
    'retrovisor' => 8
];

function itensCaros($arr){
    $arrItensCaros = [];

    foreach($arr as $item => $preco){

        if($preco > 10){
            array_push($arrItensCaros, $item);
        }
    }

    return $arrItensCaros;
}

$x = itensCaros($arr);

print_r($x);*/

/*$rato = "O rato roeu a roupa do rei de Roma";

$somaAs = 0;
for($i = 0; $i < strlen($rato); $i++){
  
    if($rato[$i] === "a"){
    
    
    $somaAs++;
    
    }


}
echo $somaAs;*/

/*$str1 = "  Alice   .";

trim($str1);

print("$str1" . "<br>");


$str2 = "BRASIL"; 
strtolower($str2);

echo strtolower($str2);*/


/*$str3 = "este item esta em ";
$promo = "promocao";

echo ucfirst($str3) . strtoupper($promo);*/

$frase = "Cade o meu queijo? Ele estava aqui em cima.";

echo substr($frase,11, 6) . "<br>";
echo substr($frase,23,6 ) . "<br>";

$contra = strrev($frase);

echo $contra;