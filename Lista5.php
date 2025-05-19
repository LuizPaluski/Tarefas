<?php

function Multiplo($x){
    if ($x % 4 ===  0){
        return "true";
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
