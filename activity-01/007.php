<?php
/*Leia uma temperatura em graus Fahrenheit e apresente-a convertida em graus Celsius.
A fórmula de conversão é: C = 5.0 ∗ (F − 32.0)/9.0, sendo C a temperatura em Celsius e
F a temperatura em Fahrenheit*/

$grauF = readline("Digite a temperatura em Fahrenheit: ");

$f = 5 * ($grauF - 32) / 9;

print $grauF . " Fahrenheit é equivalente a " . $f . " Celsius";
