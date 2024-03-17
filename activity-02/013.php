<?php
/*Escreva um programa que leia o número de habitantes de uma determinada cidade,  o valor  do  kwh, 
e  para  cada  habitante  entre  com  os  seguintes  dados: consumo  do  mês  e  o  código  do  consumidor  (1-Residencial,  2-Comercial,  3-Industrial).
No  final  imprima  omaior,  o  menor  e  a  média  do  consumo  dos habitantes; e por fim o total do consumo decada categoria de consumidor.*/


$qtdHabitantes = readline("Digite a quantidade de habitantes: ");


if (!is_numeric($qtdHabitantes) || $qtdHabitantes <= 0) {
    echo "Valor inválido. Digite um número inteiro positivo para a quantidade de habitantes.";
    exit;
}


$valorKWh = readline("Digite o valor do kWh: ");


if (!is_numeric($valorKWh) || $valorKWh <= 0) {
    echo "Valor inválido. Digite um número positivo para o valor do kWh.";
    exit;
}


$maiorConsumo = 0;
$menorConsumo = PHP_INT_MAX;
$consumoTotal = 0;
$consumoResidencial = 0;
$consumoComercial = 0;
$consumoIndustrial = 0;


for ($i = 0; $i < $qtdHabitantes; $i++) {
    $consumo = readline("Digite o consumo do habitante " . ($i + 1) . ": ");
    $codigoConsumidor = readline("Digite o código do consumidor (1-Residencial, 2-Comercial, 3-Industrial): ");


    if (!is_numeric($consumo) || $consumo <= 0) {
        echo "Valor inválido. Digite um número positivo para o consumo do habitante " . ($i + 1) . ".";
        continue;
    }


    if (!is_numeric($codigoConsumidor) || $codigoConsumidor < 1 || $codigoConsumidor > 3) {
        echo "Valor inválido. Digite um código de consumidor válido (1-Residencial, 2-Comercial, 3-Industrial) para o habitante " . ($i + 1) . ".";
        continue;
    }


    $consumoTotal += $consumo;

    if ($consumo > $maiorConsumo) {
        $maiorConsumo = $consumo;
    }

    if ($consumo < $menorConsumo) {
        $menorConsumo = $consumo;
    }

    switch ($codigoConsumidor) {
        case 1:
            $consumoResidencial += $consumo;
            break;
        case 2:
            $consumoComercial += $consumo;
            break;
        case 3:
            $consumoIndustrial += $consumo;
            break;
    }
}


$mediaConsumo = $consumoTotal / $qtdHabitantes;


echo "Maior consumo: " . $maiorConsumo . " kWh\n";
echo "Menor consumo: " . $menorConsumo . " kWh\n";
echo "Média do consumo: " . number_format($mediaConsumo, 2, '.', ',') . " kWh\n";
echo "\n";
echo "Consumo por categoria:\n";
echo "  - Residencial: " . number_format($consumoResidencial, 2, '.', ',') . " kWh\n";
echo "  - Comercial: " . number_format($consumoComercial, 2, '.', ',') . " kWh\n";
echo "  - Industrial: " . number_format($consumoIndustrial, 2, '.', ',') . " kWh\n";
