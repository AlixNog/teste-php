<?php

trait Objeto{

    public function teste(){

        echo "testando trait de objeto<br>";
    }
}

trait Testando{

    public function traitObjeto(){

        echo "este metodo é da trait testando<br>";
    }
}

class Central{

    use Objeto;
    use Testando;
}

$ze = new Central;

$ze->teste();
$ze->traitObjeto();