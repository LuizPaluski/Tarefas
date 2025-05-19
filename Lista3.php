<?php

$num = 0;

while($num < 10){
    $num + 1;
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
    $valores = readline("Digite o valor: ");
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
for($i = 15; $i >= 0; $i--){
    if($i > 0){
        echo "O valor e $i ";
    }
}
 





