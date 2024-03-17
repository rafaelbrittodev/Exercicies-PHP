<?php
/*Escreva um programa que receba como entrada o valor  do saque realizado pelo cliente de um banco e
retorne quantas notas de cada valor serão necessárias para  atender  ao  saque  com  a  menor  quantidade  de  notas possível.
Serão utilizadas notas de 100, 50, 20, 10, 5, 2 e 1 real.*/

$valorSaque = readline("Digite o valor do saque: ");

$notas = array(100, 50, 20, 10, 5, 2, 1);
$qtdNotas = array_fill(0, sizeof($notas), 0);

if (!is_numeric($valorSaque) || $valorSaque <= 0) {
    echo "Valor de saque inválido. Digite um número inteiro positivo.";
    exit;
}

for ($valorNota = 0; $valorNota < sizeof($notas); $valorNota++) {
    for ($i = 0; $i < $valorSaque; $i++) {
        if ($valorSaque >= $notas[$valorNota]) {
            $qtdNotas[$valorNota]++;
            $valorSaque -= $notas[$valorNota];
            break;
        }
    }
}

echo "\nResultado:\n";
for ($i = 0; $i < sizeof($notas); $i++) {
    echo $notas[$i] . " reais: " . $qtdNotas[$i] . "\n";
}
