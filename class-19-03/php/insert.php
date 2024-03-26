<?php
 
$banco = "banco.txt";
# criando uma string com o conteudo capturado do formulario
$conteudo = $_POST["nome"] . "\n" . $_POST["email"] . " \n" . date("d/m/Y", strtotime($_POST["data"])) .
" \n" . str_replace("\n", "<br>", $_POST["mensagem"]) . "\n";
# A variavel $criar usa a função fopen abre o arquivo txt para escrever os dados vindo do formulario
$criar = fopen($banco, "a+");
fwrite($criar, $conteudo);
 
if ($criar == true) {
    echo "<script language='javascript' type='text/javascript'>alert('Dados cadastrados com sucesso!')window.location.href='/form/select.php#footer'</script>";
} else {
    echo "<script language='javascript' type='text/javascript'>alert('Erro ao cadastrar os dados!')window.location.href='/form/select.php#footer'</script>";
}
fclose($criar);
#usar esse exemplo no site de hospedagem inityfree
#header('Location: /crudinfo_atms/select.php#footer');
#usar esse exemplo no site de hospedagem 000webhost
echo "<script language='javascript' type='text/javascript'> window.location.href='/form/index.php#footer'</script>";
 
 
 
?>