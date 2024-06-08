<?php

/*$arr = [
    [1,2,3],
    [4,5,6]
];

print_r($arr);
echo "<br>";

echo $arr[0][1] . "<br>";*/

/*$arr = [
    [1,2,3,4],
    [5,6,7,8],
    [9,10,11,12]
];

for($i = 0 ;$i < count($arr); $i++){
    for($j = 0 ;$j <= count($arr); $j++){
        echo $arr[$i][$j] . "<br>";
    }
    echo "MUDOU <br>";
}

echo "<br>";*/

/*$pessoa = ["alix", 31, "prog", "verdes"];

list($nome, $idade,$profissao,$olhos) = $pessoa;

echo "$nome <br>";
echo "$idade <br>";
echo "$profissao <br>";
echo "$olhos <br>";*/

$carro = [ "jaguar", "3.0", "azul", 18, "teto solar", "automatico"];

list($marca, $potencia, $cor, $anos,$tetoSolar, $automatico) = $carro;

echo "$marca <br>";
echo "$potencia <br>";
echo "$cor <br>";
echo "$anos <br>";
echo "$tetoSolar <br>";
echo "$automatico <br>";

$x = array_chunk($carro, 2);

print_r($x);

