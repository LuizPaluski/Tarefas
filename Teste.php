<?php 
function Num ($x, $y){
    $valor = 0;
    for($i = $x; $i <= $y; $i++){
        $valor += $i;
    }
    return $valor;

    }
$x = readline("Digite o valor de x ")+1;
$y = readline("Digite o valor de y ")-1;
$nb = num($x, $y);
echo "A soma dos valores e $nb";


    





