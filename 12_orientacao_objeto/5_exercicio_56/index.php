<?php

class Car{

    public $rodas =4;
    private $vidro = "sem pelicula";

    public function getVidro(){
        return $this->vidro;
    }
}

class Mecanico {

    public function alterarRodas($carro){
        $carro->rodas=10;
    }
}

$x = new Mecanico;


$x->alterarRodas(8);