<?php

/*function defineCorCarro($cor = "vermelha"){

    return $cor;

}

$x = defineCorCarro();
$y = defineCorCarro("verde");

echo $x . " é com defaul<br>"; 
echo $y . " nao é com defaul<br>"; */

/*EXERCICIO 38 */

$lista = [ "arroz" , "trigo", "suco" , "mel" , "feijao", "mamao"];

function listaParaString($arr){


    $str = "voce levou estes itens: ";
    
    for($i = 0; $i < count($arr); $i++){
        
        if($i + 1  == count($arr)){
            $str .= "$arr[$i]. ";
        }else{

        $str .= "$arr[$i], ";
        }
    }
    
    return $str;
    
}

echo listaParaString($lista);