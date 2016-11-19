<?php

$n = 5;
$k = 2;

function validation($n, $k){

    if(1 < $k && $k < $n && $n < 100){
        return true;
    }
    return false;
}

function fact($n){
    $res = 1;
    for($i = 1; $i <= $n; $i++){
        $res *= $i;
    }
    return $res;
}

function calculation($n, $k){

    if(!validation($n, $k)){
        return ;
    }

    var_dump(fact($n) / fact($k));
}


calculation($n, $k);





