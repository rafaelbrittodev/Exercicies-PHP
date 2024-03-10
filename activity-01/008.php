<?php
/*Leia uma temperatura em graus Kelvin e apresente-a convertida em graus Celsius. A
fórmula de conversão é: C = K 273.15, sendo C a temperatura em Celsius e K a
temperatura em Kelvin*/

$grauK = readline("Digite a temperatura em Kelvin: ");

$f = $grauK - 273.15;

print $grauK . " Kelvin é equivalente a " . $f . " Celsius";
