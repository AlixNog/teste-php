<?php

class Humano {
    public $idade = 29;

    public function falar(){
        echo "hello <br>";
    }
}

class Programador extends Humano{

    private function gritar(){
        echo "PHP é legal<br>";

    }

    public function acessarGritar(){
        $this->gritar();
    }

    protected function falarBaixinho(){
        echo "lalla <br>";
    }

    public function acessarFalarBaixinho(){
        $this -> falarBaixinho();
    }
}

$ze = new Humano;

$ze->falar();

$joao = new Programador;

$joao -> falar();

$joao -> idade . "<br>";

echo $joao -> idade . "<br>";

$joao->acessarGritar();

$joao ->acessarFalarBaixinho();

