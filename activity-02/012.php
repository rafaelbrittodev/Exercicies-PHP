<?php
/*Faça um programa que some os números primos existentes entre a e b, onde a e b sãonúmeros informados pelo usuário.*/

$a = readline("Digite o valor inicial (a): ");
$b = readline("Digite o valor final (b): ");

if (!is_numeric($a) || !is_numeric($b) || $a > $b) {
    echo "Valores inválidos. Digite dois números inteiros onde a <= b.";
    exit;
}

$somaPrimos = 0;

for ($numero = $a; $numero <= $b; $numero++) {
    if (éPrimo($numero)) {
        $somaPrimos += $numero;
    }
}

echo "A soma dos números primos entre " . $a . " e " . $b . " é: " . $somaPrimos;

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
