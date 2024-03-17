<?php
/*Faça um programa que leia 10 inteiros e imprima sua média.*/

$n = 0;
$soma = 0;

for ($i = 1; $i < 11; $i++) {
    $n = readline("Digite o número de posição " . $i . ": ");
    $soma = ($soma + $n);
}

$media = ($soma / ($i - 1));
echo "A média é " . $media;
