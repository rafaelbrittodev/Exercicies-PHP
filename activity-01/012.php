<?php
/*Leia uma distância em milhas e apresente-a convertida em quilômetros. A fórmula de
conversão é: K = 1, 61 ∗ M, sendo K a distância em quilômetros e M em milhas.*/

$m = readline("Digite a distância em milhas: ");

$f = 1.61 * $m;

print $m . " milhas é equivalente a " . $f . " quilômetros.";
