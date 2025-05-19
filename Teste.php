<?php 
function Num ($x, $y){
    $Inicio = max($x, $y)+1;
    $Fim = min($x, $y)-1;

    $valor = 0;
    for($i = $Fim; $i <= $Inicio; $i++);{
        $valor += $i;
    }
    return $valor;

    }

$x = 1; 
$y = 5;
$soma = num($x, $y);
echo $soma;
    





