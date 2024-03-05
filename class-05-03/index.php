<?php
# <localhost> ou <127.0.0.1> para abrir o wampserver no navegador, precisa instalar o wamp64

# Exemplos de saída de conteúdo em PHP, existem várias maneiras de fazer isso,

# Usando eco para exibir uma string simples
echo "Olá mundo!";

# Usando print para exibir uma string simples:
print "Olá mundo!";

# Usando echo ou print para exibir o valor de uma variável:
$nome = "Maria";
echo "Olá " . $nome;

// ou
$idade = 25;
print "Eu tenho " . $idade . " anos";

# Usando aspas duplas ou simples para imprimir uma string com variáveis:
$nome = "José";
echo "Meu nome é $nome";

// ou
$idade = 30;
print "Eu tenho " . $idade . " anos";

# Usando printf para formatar uma string com variáveis:
$nome = "Paulo";
$idado = 40;

printf("Meu nome é %s e eu tenho %d anos", $nome, $idade)

?>