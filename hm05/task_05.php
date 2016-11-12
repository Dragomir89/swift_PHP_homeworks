<?php

$values_01 = [5,10,12,4,9,0];
$values_02 = [-5,0,0.2,20,9,0];

var_dump($values_01[0] > $values_02[0]);
var_dump($values_01[1] >= $values_02[1]);
var_dump($values_01[2] <= $values_02[2]);
var_dump($values_01[3] == $values_02[3]);
var_dump($values_01[4] != $values_02[4]);
var_dump($values_01[5] === $values_02[5]);

