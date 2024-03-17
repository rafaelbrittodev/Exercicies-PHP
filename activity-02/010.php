<?php
/*Faça um programa que calcule a soma de todos os números primos abaixo de dois milhões.*/

$limite = 2000000;
$crivo = array_fill(2, $limite - 1, true);


for ($i = 2; $i * 2 <= $limite; $i++) {
    $crivo[$i * 2] = false;
}

$somaPrimos = 0;


for ($numero = 2; $numero <= $limite; $numero++) {
    if ($crivo[$numero]) {
        $somaPrimos += $numero;


        for ($i = $numero * 2; $i <= $limite; $i += $numero) {
            $crivo[$i] = false;
        }
    }
}

echo "A soma dos números primos abaixo de " . $limite . " é: " . $somaPrimos;
