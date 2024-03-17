<?php
# Comentário

// <ctrl + ;> comenta várias linhas

/*Bloco de
comentário*/

# 'txt' aspas simples não altera o dado da string

# "txt" aspas duplas pode-se alterar o dado da string

# <localhost> ou <127.0.0.1> para abrir o wampserver no navegador, precisa instalar o wamp64

$nome = "Rafael"; # variavel
$sobrenome = "da Silva rito";
$idade = 25;

# tipos de print
print '$nome' . "<br>"; # nome das variaveis
print '$sobrenome' . "<br>";
print '$idade' . "<br>" . "<br>";

print $nome . "<br>"; # dados das variaveis
print $sobrenome . "<br>";
print $idade . "<br>" . "<br>";


print_r($nome . "<br>"); # informacao da variavel
print_r($sobrenome . "<br>");
print_r($idade . "<br>" . "<br>");


echo "$nome <br>"; # echo é o print mais robusto para concatenacao
echo "$sobrenome <br>";
echo "$idade <br>";

var_dump('$nome'); # qt caracteres name variavel
var_dump('$sobrenome');
var_dump('$idade');

var_dump("$nome"); # qt caracteres dado variavel
var_dump("$sobrenome");
var_dump("$idade");

$a = readline("Teste: "); # input que não funciona em .php off-line

# 000webhost.com - cadastrar email para entregar atividades para o professor
# infinityfreeapp.com - cadastrar email para entregar atividades para o professor
# USBWebServer.v.8.6.2 - caso o local server wamp não funcione
