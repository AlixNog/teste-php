<?php

class Calculadora {
    
   
    
    public function soma($a , $b){
        $soma = $a + $b;
        
        return $soma;
    }
    
    public function subtrair($a , $b){
        
        if($a > $b)
        $subtrair = $a - $b;
        
        return $subtrair;
    }
    
    public function multiplicar($a, $b){
        
        
        $multi = $a * $b;
        
        return $multi;
    }
    
    public function dividir($a, $b){
        
        if($a >= $b && $b > 0){
            $div = $a / $b;
        }
        
        
        return $div;
    }
}

$a = new Calculadora ();

echo $a->soma(2,2) . "<br>";
echo $a->dividir(2,2) . "<br>";



