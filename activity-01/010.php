<?php
/*Leia uma velocidade em km/h (quilômetros por hora) e apresente-a convertida em m/s
(metros por segundo). A fórmula de conversão é: M = K/3.6, sendo K a velocidade em
km/h e M em m/s. */

$kmH = readline("Digite a velociade em KM/h: ");

$f = $kmH / 3.6;

print $kmH . " km/H é equivalente a " . $f . " m/S - metros por segundo.";
