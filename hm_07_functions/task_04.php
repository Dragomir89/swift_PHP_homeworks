<?php

function reverse($numb){
    $res = strrev($numb . '');

    return($res);
}

echo reverse(123);