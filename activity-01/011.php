<?php
/*Leia uma velocidade em m/s (metros por segundo) e apresente-a convertida em km/h
(quilômetros por hora). A fórmula de conversão é: K = M 3.6, sendo K a velocidade
em km/h e M em m/s.*/

$mS = readline("Digite a velociade em m/S: ");

$f = $mS * 3.6;

print $mS . " m/S é equivalente a " . $f . " km/H.";
