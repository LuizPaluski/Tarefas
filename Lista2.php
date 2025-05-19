<?php
//Verificador se o numero e maior que 10 ou nao


//dada a idade de um nadador, classifique-o em uma das categorias
$valor = readline("Digite o valor: ");

if ($valor > 10){
    echo "E maior que 10!";

}
else {
    echo "E menor que 10!";
}
//Verificador se o numero e positivo ou negativo

$valor2 = readline("Digite o valor: ");

if ($valor2 > 0 ){
    echo "E positivo!";

}
else {
    echo "E negativo!";
}
//Verificador de preco de maçãs
$macascompradas = readline("Quantas maçãs voce comprou? ");

if  ($macascompradas > 12){
    $preco = $macascompradas * 1.00;
    echo "
    O preco e $preco";
}
else {
    $preco2 = $macascompradas * 1.30;
    echo "
    O preco e $preco2";
}

//verificar as notas de 1a e 2a 

$nota1 = readline("Digite a nota 1a: ");
$nota2 = readline("Digite a nota 2a: ");
$media = ($nota1 + $nota2) / 2;

if ($media >= 6){
    echo "Aprovado!";

}
else{
    echo "Reprovado!";

}

//Verificador de idade

$anoNascimento = readline("Ano de Nascimento: ");
$verificador = $anoNascimento - 2025;

if ($verificador >= 18){
    echo "Ja pode tirar a carteira! ";
}
elseif ($verificador >= 16){
    echo "Ja pode votar! ";
}
elseif($verificador < 16 ){
    echo "Calma ai, te falta idade";
}



$idade = readline("Sua idade: ");

if (is_string($idade >= 18)){
    echo "Categoria senior ";
}
elseif (is_string(14 != $idade >= 17)){
    echo "Categoria juvenil B ";
}
elseif (is_int(8 != $idade >= 10 )){
    echo "Categoria juvenil A ";
}
elseif( is_int(5 != $idade >= 7)){
    echo "Categoria infantil A ";
}

