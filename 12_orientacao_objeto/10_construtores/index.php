<?php

class Car{

    public $portas;
    public $cor;
    public $marca;


    function __construct($portas, $cor, $marca){

        $this->portas = $portas;
        $this->cor= $cor;
        $this->marca=$marca;

    } 

}

$ford = new Car(4, "azul", "ford");

echo "o carro é da marca : $ford->marca". "<br>" . "e tem a cor: $ford->cor<br>" . "e tem portas: $ford->portas". "<br>";

