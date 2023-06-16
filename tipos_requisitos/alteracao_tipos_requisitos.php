<?php 
    include "../../model/connection.php"; //conectar no banco

    $dados = "";
    $dados = $_POST["dados"];
    $id_tipos_requisitos = $dados[0];
    $tiposreq_topicos = $dados[1];
    $tiposreq_subtopicos = $dados[2];
    $tiposreq_desc = $dados[3];

    if(!$conn){
        die("Falha na Conexão: " . mysqli_connect_error());
    } else {
        // echo "Conectado com sucesso<br>";
    }

    if(isset($_POST["dados"])){

    $sql = "UPDATE tipos_requisitos set tiposreq_topicos = '$tiposreq_topicos',
                                        tiposreq_subtopicos = '$tiposreq_subtopicos',
                                        tiposreq_desc = '$tiposreq_desc'
                                        WHERE id_tipos_requisitos = $id_tipos_requisitos";
                                
                                // echo $sql;

    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

    }

    mysqli_close($conn);

    echo "Cadastro efetuado com sucesso"
?>

<meta http-equiv="refresh" content="0; URL='https://senaivotuporanga.com.br/nr12/controller/tipos_requisitos/leitura_tipos_requisitos.php'">