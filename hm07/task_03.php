<?php


$sum = 1;

$n = 5;
$x = -4;

function fact($n){
    $res = 1;
    for($i = 1; $i <= $n; $i++){
        $res *= $i;
    }
    return $res;
}

for($i = 1; $i <= $n; $i++){

    $sum += fact($i) / pow($x, $i);

}

echo $sum;
