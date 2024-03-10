<?php
/*Leia um ângulo em radianos e apresente-o convertido em graus. A fórmula de conversão
é: G = R ∗ 180/π, sendo G o ângulo em graus e R em radianos e π = 3.14.*/

$r = readline("Digite o ângulo em radianos: ");

$f = $r * 180 / M_PI; // M_PI é uma constante padrão do php para a variável matemática de π

print "O ângulo de " . $r . " Radianos é equivalente a " . $f . " Graus.";
