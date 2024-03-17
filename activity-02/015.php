<?php
/*Se  os  números  de  1  a  5  são  escritos  em  palavras:  um,  dois,  três,  quatro, cinco,
então há 2 + 4 + 4 + 6 + 5 = 22 letras usadas no total. Faça um programa que conte quantas letras seriam
utilizadas se todos os números de 1 a 1000 (mil) fossem escritos empalavras. OBS: não conte espaços ou hifens.*/

$contLetras = 0;
$qtdLetrasPorNumero = array(
    1 => 3, 2 => 3, 3 => 5, 4 => 4, 5 => 4,
    6 => 3, 7 => 5, 8 => 5, 9 => 4, 10 => 3,
    11 => 6, 12 => 5, 13 => 8, 14 => 7, 15 => 7,
    16 => 6, 17 => 9, 18 => 8, 19 => 8, 20 => 6,
    30 => 6, 40 => 6, 50 => 5, 60 => 6, 70 => 7,
    80 => 6, 90 => 6, 100 => 7
);


for ($numero = 1; $numero <= 1000; $numero++) {
    $dezenas = $numero % 100;
    $centenas = $numero / 100;

    $letrasNumero = 0;

    if ($centenas > 0) {
        $letrasNumero += $qtdLetrasPorNumero[$centenas] + 7;
    }

    if ($dezenas > 0) {
        if ($dezenas == 1) {
            $letrasNumero += 8;
        } else {
            $letrasNumero += $qtdLetrasPorNumero[$dezenas];
        }
    }

    if ($numero % 100 > 0) {
        $letrasNumero += $qtdLetrasPorNumero[$numero % 100];
    }

    $contLetras += $letrasNumero;
}


echo "Total de letras: " . $contLetras;
