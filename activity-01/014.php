<?php
/*Leia um ângulo em graus e apresente-o convertido em radianos. A fórmula de conversão
é: R = G ∗ π/180, sendo G o ângulo em graus e R em radianos e π = 3.14.*/

$a = readline("Digite o ângulo em graus: ");

$f = $a * M_PI / 180; // M_PI é uma constante padrão do php para a variável matemática de π

print "O ângulo de " . $a . " Graus é equivalente a " . $f . " Radianos.";
