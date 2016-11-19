<?php

$n = 4;

function showMatrix($n){

    for($i = 1; $i <= 4; $i++ ){

        for($j = $i; $j < ($i + 4); $j++ ){

            echo $j . ' ';
        }
        echo "</br>";
    }
}

showMatrix($n);