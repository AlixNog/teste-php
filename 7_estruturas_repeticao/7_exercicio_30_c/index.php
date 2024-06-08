<?php

$arr = [];

for($i = 10; $i < 20; $i++){


    if($i%2 == 0){
        continue;
    }

    array_push($arr, $i);
}

print_r($arr);
