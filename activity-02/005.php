<?php
/*Faça  um  programa  que  leia  um  número  inteiro  N  e  depois  imprima  os  N primeiros números naturais ımpares.*/
$n = readline("Digite um número inteiro N: ");

if ($n > 0) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
} else {
    echo "O número digitado deve ser um inteiro positivo.";
}
