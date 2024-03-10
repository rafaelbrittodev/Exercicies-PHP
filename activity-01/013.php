<?php
/*. Leia uma distância em quilômetros e apresente-a convertida em milhas. A fórmula de
conversa˜o e´: M = 𝑘 / 1,61, sendo K a distância em quilômetros e M em milhas.*/

$m = readline("Digite a distância em milhas: ");

$f = 1.61 / $m;

print $m . " milhas é equivalente a " . $f . " quilômetros.";
