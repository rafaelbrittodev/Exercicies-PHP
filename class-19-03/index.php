<!-- http://localhost/_php-rafael-brito/class-19-03/ -->

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
</head>

<body>
<!--
    formulário method para informar qual o meio de tranferência dos dados contidos nos campos
    action determina as ações que o formulário vai executar

    GET ou POST
    GET os dados do formulário é exibido no URL
    POST criptografado
-->    

    <form method="post" action="php/insert.php">
        <table>
            <tr>
                <td><label for="nome">Nome:</label></td>
                <td><input id="nome" name="nome" autofocus></td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input id="email" name="email" required></textarea></td>
            </tr>
            <tr>
                <td><label for="data">Data:</label></td>
                <td><input type="date" id="data" name="data" required></textarea></td>
            </tr>
            <tr>
                <td><label for="mensagem">Mensagem:</label></td>
                <td><textarea id="mensagem" name="mensagem" required></textarea></td>
                <td class="options"><input type="submit" class="formulario" value="Submeter" /></td>
            </tr>
        </table>
    </form>
    <table>
        <tr>
            <td class="options"><button onclick="location.href = '/class-19-03/limpar.php'">Limpar Banco!</button>
            </td>
            <td class="options"><button onclick="location.href = '/class-19-03/reset.php'">Resetar Banco!</button>
            </td>
            <td class="options"><button onclick="location.href = 'php/select.php'">Selecionar</button>
            </td>
        </tr>
    </table>

</body>
</html>