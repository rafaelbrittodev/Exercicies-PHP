<?php
/*Escreva um programa que leia um inteiro não negativo n e imprima a somados n primeiros números primos.*/

$n = readline("Digite um número inteiro não negativo (n): ");

if (!is_numeric($n) || $n < 0) {
    echo "Valor inválido. Digite um número inteiro não negativo.";
    exit;
}

$somaPrimos = 0;
$numero = 2;
$qtdPrimos = 0;

while ($qtdPrimos < $n) {
    if (éPrimo($numero)) {
        $somaPrimos += $numero;
        $qtdPrimos++;
    }
    $numero++;
}

echo "A soma dos " . $n . " primeiros números primos é: " . $somaPrimos;

function éPrimo($numero)
{
    if ($numero <= 1) {
        return false;
    }

    for ($divisor = 2; $divisor <= sqrt($numero); $divisor++) {
        if ($numero % $divisor == 0) {
            return false;
        }
    }

    return true;
}
