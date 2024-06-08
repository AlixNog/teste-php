<?php

$pessoa = [ 'altura' => 1.86, 'idade' => 17, 'olhos' => 'castanho', 'cabelo' => 'medio'];



if($pessoa['idade'] >= 18){
    echo "é maior de idade";
}else{
    echo "é menor de idade";
}

echo "<br>";

echo $pessoa['olhos'];
echo '<br>';

$cabelo = $pessoa['cabelo'];
$tamanho = $pessoa['altura'];
echo "essa pessoa tem cabelo $cabelo e sua altura é $tamanho metros ";
echo "<br>";

print_r($pessoa);
echo "<br>";



