<?php
/*Faça um programa que leia 10 inteiros positivos, ignorando não positivos, e imprima sua média.*/

$n = 0;
$soma = 0;

for ($i = 1; $i < 11; $i++) {
    $n = readline("Digite o número de posição " . $i . ": ");

    if ($n > 0) {
        $soma += $n;
    }
    if ($n < 0) {
        echo "O valor é negativo e não foi utilizado para somar ou subtrair da média.\n";
    }
}

$media = ($soma / ($i - 1));
echo "A média é " . $media;
