<?php


$array = range(10, 45);

for($i = 0; $i < count($array); $i++) {
    $soma = $i + 6;
    echo $soma;
    if ($soma > 30){
        echo "Numero muito grande! ";
    }else{
        echo $soma;
    }
}