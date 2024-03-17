<?php
/*Faça um programa que conte quantos números primos existem entre a e b, onde a e b são números informados pelo usuário.*/

$a = readline("Digite o valor inicial (a): ");
$b = readline("Digite o valor final (b): ");

if (!is_numeric($a) || !is_numeric($b) || $a > $b) {
  echo "Valores inválidos. Digite dois números inteiros onde a <= b.";
  exit;
}

$qtdPrimos = 0;

for ($numero = $a; $numero <= $b; $numero++) {
  if (éPrimo($numero)) {
    $qtdPrimos++;
  }
}

echo "Existem " . $qtdPrimos . " números primos entre " . $a . " e " . $b . ".";

function éPrimo($numero) {
  if ($numero <= 1) {
    return false;
  }

  for ($divisor = 2; $divisor <= sqrt($numero); $divisor++) {
    if ($numero % $divisor == 0) {
      return false;
    }
  }

  return true;
}