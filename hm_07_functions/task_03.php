<?php


function fact($n){
    $res = 1;
    for ($i = 1; $i <= $n; $i++){

        $res *= $i;
    }

    return $res;
}


echo fact(5);