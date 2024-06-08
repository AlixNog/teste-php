<?php

/*$x = 0; //definicao do contador

while( $x < 10){ //inicio definicao estrutura
    echo $x . "<br>";

    $x = $x +1; //incremento do contador
}

echo "continuando o codigo<br>"; */

$v = [ 5 ,"uva", true , 7.95, "banana", 2, "caqui", "mamao", 8 , "melancia"]; 

$x = count($v);
$y = 0;

while( $y < $x){ //y ini x final
    
    if( is_string($v[$y])){
        echo $v[$y] . "<br>";
    }

    $y += 1;
}