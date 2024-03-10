<?php
/*Leia uma temperatura em graus Celsius e apresente-a convertida em graus Kelvin. A
fórmula de conversão é: K = C + 273.15, sendo C a temperatura em Celsius e K a
temperatura em Kelvin.*/

$grauC = readline("Digite a temperatura em Celsius: ");

$f = $grauC + 273.15;

print $grauC . " Celsius é equivalente a " . $f . " Kelvin";
