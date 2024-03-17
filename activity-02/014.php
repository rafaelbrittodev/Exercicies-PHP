<?php
/*Faça um programa que leia vários números, calcule e mostre:
(a) A soma dos números digitados
(b) A quantidade de números digitados
(c) A média dos números digitados
(d) O maior número digitado
(e) O menor número digitado
(f) A média dos números pares

Finalize a entrada de dados caso o usuário informe o valor 0.*/


$soma = 0;
$quantidade = 0;
$maior = null;
$menor = null;
$somaPares = 0;
$qtdPares = 0;


while (true) {
    $numero = readline("Digite um número (0 para finalizar): ");


    if ($numero == 0) {
        break;
    }


    if (!is_numeric($numero)) {
        echo "Valor inválido. Digite um número.";
        continue;
    }


    $soma += $numero;
    $quantidade++;

    if ($maior === null || $numero > $maior) {
        $maior = $numero;
    }

    if ($menor === null || $numero < $menor) {
        $menor = $numero;
    }

    if ($numero % 2 == 0) {
        $somaPares += $numero;
        $qtdPares++;
    }
}


$media = $soma / $quantidade;
$mediaPares = $somaPares / $qtdPares;


echo "\n";
echo "Soma dos números: " . $soma . "\n";
echo "Quantidade de números: " . $quantidade . "\n";
echo "Média dos números: " . number_format($media, 2, '.', ',') . "\n";
echo "Maior número: " . $maior . "\n";
echo "Menor número: " . $menor . "\n";

if ($qtdPares > 0) {
    echo "Média dos números pares: " . number_format($mediaPares, 2, '.', ',') . "\n";
} else {
    echo "Nenhum número par digitado." . "\n";
}
