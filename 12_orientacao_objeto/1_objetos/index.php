<?php


class Cachorro{
    function latir(){
        echo "au aua au<br>";
    }

    function andar($m){
        echo "cachorro andou $m <br>";
    }


}

$tobe = new Cachorro;

$tobe -> latir();

$mel = new Cachorro;

$mel -> andar(8);


