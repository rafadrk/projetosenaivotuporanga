<?php
include "../../model/connection.php"; //ESSA LINHA Ã‰ RESPONSAVEL POR CONECTAR NO BANCO, VOCÃŠ NÃƒO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.

$deletar = $_POST['deletar'];

$sql = "DELETE FROM tipos_requisitos where id_tipos_requisitos = $deletar";

if(mysqli_query($conn, $sql)){
    // echo "<br><h1>DELETADO COM SUCESSO!!</h1>";
}

mysqli_close($conn);
?>

<meta http-equiv="refresh" content="0; URL='https://senaivotuporanga.com.br/nr12/controller/tipos_requisitos/leitura_tipos_requisitos.php'">