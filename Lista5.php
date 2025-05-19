<?php

function Multiplo($x){
    if ($x % 4 ===  0){
        return "True";
    }else{
        return "False";
    }
}
$numero = readline("Digite o valor ");
$y = Multiplo($numero);
echo $y;

function ParImpar($x){
    if($x % 2 === 0 ){
        return "Par";

    }else{    
        return "Impar";
        }    
    }
$numero2 = readline("Digite um valor ");
$z = ParImpar($numero2);
echo $z;


function Num ($x, $y){
    $valor = 0;
    for($i = $x; $i <= $y; $i++){
        $valor += $i;
    }
    return $valor;

    }
// colocase o +1 e o -1 para nao incluir o valor original de x e y apenas a soma entre os valores internos
$x = readline("Digite o valor de x ")+1; 
$y = readline("Digite o valor de y ")-1;
$nb = num($x, $y);
echo "A soma dos valores e $nb";


