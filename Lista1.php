<?php
//resultado resultado e o resto
$divisor = readline("Digite o divisor: ");
$dividendo = readline("Digite o dividendo: ");
$quociente = $dividendo / $divisor;
$resto = $dividendo % $divisor;

echo "a divisao de $dividendo por $divisor,e $quociente, e o resto $resto";

//media pon
$num = [12, 3, 5, 4];
$soma = $num[0] + $num[1] + $num[2] + $num[3];
$ponderada = [1, 2, 3, 4];
$somaPonderada = $ponderada[0] + $ponderada[1] + $ponderada[2] + $ponderada[3];
$media = $soma / $somaPonderada;
echo "
A soma e $soma e a media e $media";

//preco novo do produto
$precoProduto = readline("Digite o preco do produto: ");
$reajuste = 0.01;
$precoNovo = $precoProduto * $reajuste;
$PrecoNovo1 = $precoProduto + $precoNovo;
echo "
Preco antigo era $precoProduto e o novo preco e $PrecoNovo1";

//preco do valor da conta de luz 
$salario = readline("Digite o salario: ");
$valorKW = 2.17;
$consumo = readline("Digite o consumo: ");
$valorconta = $valorKW * $consumo;
echo "O valor da conta de luz e $valorconta";

//area perimetro e diagonal do triangulo 
$basetriangulo = readline("Digite a base do triangulo: ");
$alturatriangulo = readline("Digite a altura do triangulo: ");
$hipotenusa  = sqrt(($basetriangulo * $basetriangulo) + ($alturatriangulo * $alturatriangulo));
$perimetro = $basetriangulo + $alturatriangulo + $hipotenusa;
$area = ($basetriangulo * $basetriangulo) / 2;
echo "O perimentro do triangulo e $perimetro, a area e $area e a diagonal e $hipotenusa";

//area do triangulo
$base = readline("Digite a base do quadrado: ");
$altura = readline("Digite a altura do quadrado: ");
$area2  =  ($base * $altura) / 2;
echo "A area do quadrado e $area";

//area do losango
$diagonalMaior  = readline("Digite a diagonal maior: ");
$diagonalMenor = readline("Digite a diagonal menor: ");
$arealosango = ($diagonalMaior * $diagonalMenor) / 2;
echo "A area do losango e $arealosango";


