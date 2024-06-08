<?php

class Humano {

    public $nome;
    public $idade;
    public $altura;

    public function falar(){
        echo "eu sou humano<br>";
    }

    public function andou($m){

        $x = $m *2;

        echo $x . " andou o dobro<br>";
    }

    private function acordou(){
        

        echo " acordou <br>";
    }

    public function acessarAcordou(){
        $this->acordou();

    }

}

class Professor extends Humano{

    public $materia;
    public $hora_semana;
    public $alunos;

    public function ferias(){
        echo "estou de ferias<br>";
    }
}

$ze = new Professor;


echo $ze -> nome="jose" . "<br>";
echo $ze -> idade= 40 . "<br>";
echo $ze -> altura= 1.98 . "<br>";

$ze->falar();
$ze -> andou(2);
$ze->acessarAcordou();