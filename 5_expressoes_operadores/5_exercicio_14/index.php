<?php

$nome = "Joao";
$sobrenome = "Silva";
$s = "m";


if($s == "f"){

    
    $s = " senhora";

}if($s == "m"){
    
    $s = " senhor";

}

echo "Bom dia, " . $s . " ".  $nome . " " . $sobrenome ." tenha um lindo dia"; 
