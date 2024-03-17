<?php
/*Faça um programa que peça ao usuário para digitar 10 valores e some-os.*/

$n = 0;
$soma = 0;

for ($i = 1; $i < 11; $i++) {
    $n = readline("Digite o número de posição " . $i . ": ");
    $soma = ($soma + $n);
}

echo "A soma total é " . $soma;
