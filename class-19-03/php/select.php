<?php

$banco = "banco.txt";

// Verifica se o arquivo existe e não está vazio
if (file_exists($banco) && !empty(file_get_contents($banco))) {
    echo "<CENTER>Registro cadastrados na base de dados.<br></CENTER>";
    $lista = explode("\n", file_get_contents($banco));
    $informacoes = 4; //quantidade de informações. Neste caso tem 4: Nome, Email, Data e Mensagem
    unset($lista[count($lista) - 1]); // limpando o espaço vazio do final do conjunto
    $conjunto = 1; // Define a variável do código

    echo "<center><table border=1>";
    date_default_timezone_set('America/Sao_Paulo');
    echo "<meta charset='UTF-8'>";

    echo "<tr><th>Código</th><th>Nome</th><th>Email</th><th>Data</th><th>Mensagem</th><th>Ações</th></tr>";
    for ($i = 0; $i < count($lista); $i += $informacoes) {
        echo "<tr>";
        echo "<td id='$conjunto'>$conjunto</td>";

        for ($j = $i; $j < $i + $informacoes; $j++) {
            echo "<td>{$lista[$j]}</td>";
        }

        echo "<td>
            <a href='delete.php?codigo=$conjunto'><img src='imgs/delete_crud.png' alt='Deletar' title='Deletar registro'></a>
            <a href='monta.php?codigo=$conjunto'><img src='imgs/update_crud.png' alt='Atualizar' title='Atualizar registro'></a>
            <a href='copiar.php'><img src='imgs/insert_crud.png' alt='Inserir' title='Inserir registro'></a></td>";
        echo "</tr>";

        $conjunto++;
    }
    echo "</table>";
    echo "<footer id='footer'>";
    echo "</footer>";
} else {
    echo "<br><br><p align=center>Ainda não há nenhum registro!</p>";

    echo "<a href='index.php'><imgs src='img/insert_icon.png' alt='Inserir' title='Inserir registro'>";
    echo "</tr>";
}
