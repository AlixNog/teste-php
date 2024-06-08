<?php

class Pessoa{
    function falar() {
        echo "ola mundo!";
    }
}

$matheus = new Pessoa();

$matheus->nome = "Matheus";

echo $matheus->nome;

echo "<br>";
$matheus->falar();