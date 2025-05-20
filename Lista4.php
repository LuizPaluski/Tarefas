<?php
// 1

$numeros = [];
for ($i = 1; $i <= 10; $i++) {
    $numeros[] = $i * 5;
}
foreach ($numeros as $num) {
    echo "$num";
}

// 2

$positivos = 0;
$negativos = 0;
$pares = 0;
$impares = 0;
$numeros = [];

for ($i = 0; $i < 10; $i++) {
    $numeros[$i] = (int)readline("Digite um número: ");

    if ($numeros[$i] > 0) {
        $positivos++;
    }

    if ($numeros[$i] < 0) {
        $negativos++;
    }

    if ($numeros[$i] % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "Quantidade de positivos: $positivos";
echo "Quantidade de negativos: $negativos";
echo "Quantidade de pares: $pares";
echo "Quantidade de ímpares: $impares";

// 3 

$numeros = [];

for ($i = 0; $i < 10; $i++) {
    do {
        $numero = (int)readline("Digite um número positivo: ");
    } while ($numero <= 0);
    $numeros[] = $numero;
}

$maior = $numeros[0];
$posicao = 0;
for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] > $maior) {
        $maior = $numeros[$i];
        $posicao = $i;
    }
}

echo "O maior número é $maior e está na posição $posicao";

// 4
$a = [];
for ($i = 0; $i < 10; $i++) {
    $a[] = (int)readline("Digite um numero para o vetor A: ");
}
$b = (int)readline("Digite um numero para o vetor B: ");
$c = [];

for ($i = 0; $i < 10; $i++) {
    $c[] = $a[$i] * $b;
}

echo "Vetor C: " . implode(", ", $c);

// 5

$numeros = [];
for ($i = 0; $i < 10; $i++) {
    $numeros[] = (int)readline("Digite um numero: ");
}
$numeros = array_reverse($numeros);
echo "Números em ordem inversa: " . implode(", ", $numeros);

// 6 

$vetor_a = [];
$vetor_b = [];
$vetor_c = [];

for ($i = 0; $i < 10; $i++) {
    $vetor_a[$i] = (int) readline("Digite um numero para vetor A: ");
}
for ($i = 0; $i < 10; $i++) {
    $vetor_b[$i] = (int) readline("Digite um numero para vetor B: ");
}

for ($i = 0; $i < 10; $i++) {
    $vetor_c[$i] = $vetor_a[$i] * $vetor_b[$i];
}

echo "Resultado da multiplicação: " . implode(", ", $vetor_c);

