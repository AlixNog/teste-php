<?php

$a = true;

if(is_bool($a)) {
    echo "é booleano 1 <br>";
}

if(is_bool(0)) {
    echo "é booleano 2 <br>";
}

if(is_bool(false)) {
    echo "é booleano 3 <br>";
}

if(is_bool(0.0 == false)) {
    echo "é booleano 4 <br>";
}
