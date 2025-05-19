<?php

function Multiplo($x){
    if ($x % 4 ===  0){
        echo "True";
        return true;
    }else{
        echo "False";
        return false;
    }
}
$valor = readline("Digite um valor: ");
Multiplo($valor);