<?php

$str = "alix"; 
$num = 15;

if(is_string($str)){
    echo "$str é uma string 1<br>";
}

if(is_string($num)){
    echo "$num é uma string 2<br>";
}

if(is_string("abcd")){
    echo " abcd é uma string3<br>";
}