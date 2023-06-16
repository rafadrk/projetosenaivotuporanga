<?php
include "../../model/connection.php"; //ESSA LINHA Ã‰ RESPONSAVEL POR CONECTAR NO BANCO, VOCÃŠ NÃƒO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.

$dados = $_POST['dados'];

$sql = "UPDATE requisitos set requisitos_ativo = 'ativo' WHERE id_requisitos = $dados";

if(mysqli_query($conn, $sql)){
    echo "<br><h1>DELETADO COM SUCESSO!!</h1>";
}

mysqli_close($conn);
?>

<meta http-equiv="refresh" content="0; URL='https://senaivotuporanga.com.br/nr12/controller/requisitos/leitura_requisitos.php'">