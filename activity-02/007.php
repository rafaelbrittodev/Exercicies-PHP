<?php
/*Escreva  um  programa  que  leia  um  número  inteiro  positivo  n  e  em  seguida imprima n linhas do chamado Triangulo de Floyd.
Para n = 6, temos:
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15
16 17 18 19 20 21*/

$n = readline("Digite um número inteiro positivo (n): ");

// Verificando se n é um número inteiro positivo
if (!is_numeric($n) || $n <= 0) {
    echo "Valor inválido. Digite um número inteiro positivo.";
    exit;
}

$numero = 1;

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $numero . " ";
        $numero++;
    }
    echo "\n";
}
