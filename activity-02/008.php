<?php
/*Faça um programa que receba um número inteiro maior do que 1, e verifique se o número fornecido á primo ou não.*/

$numero = readline("Digite um número inteiro maior que 1: ");

if (!is_numeric($numero) || $numero <= 1) {
    echo "Valor inválido. Digite um número inteiro positivo maior que 1.";
    exit;
}

$éPrimo = true;

for ($divisor = 2; $divisor <= sqrt($numero); $divisor++) {
    if ($numero % $divisor == 0) {
        $éPrimo = false;
        break;
    }
}

if ($éPrimo) {
    echo $numero . " é um número primo.";
} else {
    echo $numero . " não é um número primo.";
}
