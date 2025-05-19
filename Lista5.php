<?php
function ParImpar($x){
    if($x % 2 === 0 ){
        return "Par";

    }else{    
        return "Impar";
        }    
    }
function Num ($x, $y){
    $valor = 0;
    for($i = $x; $i <= $y; $i++){
        $valor += $i;
    }
    return $valor;

    }
function Multiplo($x){
    if ($x % 4 ===  0){
        return "True";
    }else{
        return "False";
    }
}
function DivisivelporA($a, $b, $c) {
    $soma = 0;
    for ($i = $b; $i <= $c; $i++) {
        if ($i % $a == 0) {
            $soma += $i;
        }
    }
    return $soma;
}
function calculaPesoIdeal($altura, $sexo) {
    if ($sexo == "homem") {
        return 72.7 * $altura - 58;
    } elseif ($sexo == "mulher") {
        return 62.1 * $altura - 44.7;
    } else {
        return "Sexo inválido. Use 'homem' ou 'mulher'.";
    }
}

//1
$numero = readline("Digite o valor ");
$y = Multiplo($numero);
echo $y;
//2
$numero2 = readline("Digite um valor ");
$z = ParImpar($numero2);
echo $z;
//3
// colocase o +1 e o -1 para nao incluir o valor original de x e y apenas a soma entre os valores internos
$x = readline("Digite o valor de x ")+1; 
$y = readline("Digite o valor de y ")-1;
$nb = num($x, $y);
echo "A soma dos valores internos e $nb";

//4

$a = 2;
$b = 5;
$c = 10;
echo "Soma dos números divisíveis por $a entre $b e $c: " . DivisivelporA($a, $b, $c);

$altura = (float)readline("Digite a altura em metros: ");
$sexo = (string)readline("Digite o sexo (homem ou mulher): ");
echo "Peso ideal para um $sexo de altura $altura: " . calculaPesoIdeal($altura, $sexo) . " kg";
