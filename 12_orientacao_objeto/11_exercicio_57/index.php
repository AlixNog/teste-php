<?php

class Dog {

    public $pelo;
    public $cor;
    public $raca;

    public $idade;

    public $nome;

    function __construct($pelo, $cor, $raca, $idade,$nome){

        $this->pelo = $pelo;
        $this->cor = $cor;
        $this->raca = $raca;
        $this->idade = $idade;
        $this->nome=$nome;


    }
}

$tob = new Dog("curto", "preto", "vira lata", 3,"tob");

echo "O cachorro tem o nome $tob->nome<br>" . "tem pelo : $tob->pelo<br>". "é da raca: $tob->raca<br>" . "e tem idade: $tob->idade<br>" . "e raca: $tob->raca<br>";