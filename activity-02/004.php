<?php
/*Escreva um programa que leia 10 números e escreva o menor valor lido e o maior valor lido.*/

$n = 0;
$maior = 0;
$menor = 0;

for ($i = 1; $i <= 10; $i++) {
    $n = readline("Digite o número de posição " . $i . ": ");

    if ($i == 1) {
        $menor = $n;
    }

    if ($n > $maior) {
        $maior = $n;
    } elseif ($n < $menor) {
        $menor = $n;
    }
}

echo "Maior número: " . $maior . "\n";
echo "Menor número: " . $menor;
