<?php

$cats = [2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K', 'A'];

$myCart = 'q';

if(in_array($myCart, $cats)){
    echo 'yes';
}else{
    echo 'no';
}

