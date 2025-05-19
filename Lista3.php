<?php

$num = 0;

while($num < 10){;
    $num ++;
}
echo "o valor e $num
";
//2

$valores2 = [4, 5, 6, 7, 8, 9, 10, 22, 44, 4];
$soma = 0;
for($i = 0; $i < 10; $i++){
    $soma += $valores2[$i];
    $media = $soma / 10;
}
echo "A soma dos valores e $soma
 ";
echo "A media dos valores e $media
";
//3
$adicao = 0;
$valores = 0;
for($i = 0; $i < 10; $i++){
    $valores = (int)readline("Digite o valor: ");
    if($valores > 0){
        $adicao += $valores;
    }
}
$media = $adicao / 10;
$total = $i;
echo "A media dos valores e $media ";
echo "O total de valores e $total ";
echo "A soma dos valores e $adicao ";

//4

$valores3 = 0;
for($i = 50; $i >= 70; $i++){
    if($i % 2 == 0){
        $valores3 += $i;
        $soma = $valores3;
        $media = $soma / 10;
    }
}
echo "A soma dos valores e $soma ";
echo "A media dos valores e $media ";



//5
$maior = null;
$menor = null;

for (;;) {
    $valor = (int) readline("Digite um valor inteiro(e 0 para sair): ");
    
    if ($valor == 0) {
        break;
    }
    
    if ($maior === null || $valor > $maior) {
        $maior = $valor;
    }
    
    if ($menor === null || $valor < $menor) {
        $menor = $valor;
    }
}

if ($maior !== null && $menor !== null) {
    echo "Maior valor: $maior";
    echo "Menor valor: $menor";
} else {
    echo "Nenhum valor foi informado.";
}






