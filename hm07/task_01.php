<?php

for($i = 100; $i < 1000; $i++){

    if($i == 999){
        echo $i;
        return;
    }

    echo $i . ', ';
}
