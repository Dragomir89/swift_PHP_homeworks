<?php

$a_arr = [6,3,8,-7];
$b_arr = [-4,4,-10,-8];
$c_arr = [1,-10,4,14];

function calculation($a_arr, $b_arr, $c_arr){

    $len = count($a_arr);

    for($i = 0; $i < $len; $i++){

        $d = pow($b_arr[$i], 2) - 4 * ($a_arr[$i] * $c_arr[$i]);

        $y = (-1 * $b_arr[$i]);
        $z = 2 * $a_arr[$i];

        if($d > 0){

            $x1 = ($y + $d )/ $z;
            $x2 = ($y - $d )/ $z;

            echo 'X1 = ' . $x1 . '</br>';
            echo 'X2 = ' . $x2 . '</br>';
        }else if ($d == 0){

            $x = $y / $z;
            echo 'X = ' . $x . '</br>';
        }else{

            echo 'not result </br>';
        }
    }
}

calculation($a_arr, $b_arr, $c_arr);