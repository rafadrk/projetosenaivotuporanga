<?php 
    include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
    include "../../model/connection.php"; //ESSA LINHA Ã‰ RESPONSAVEL POR CONECTAR NO BANCO, VOCÃŠ NÃƒO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.

    $dado = "";
    $dado = $_POST["dado"];

    $id_requisitos = $dado[0];
    $id_tipos_requisitos = $dado[1];
    $id_tipo_maquina = $dado[2];
    $requisitos_operacional= $dado[3];
    $requisitos_seguranca = $dado[4];
    $requisitos_preventivo = $dado[5];

    echo 'requisitos'.$id_requisitos.'';
    echo 'tiporeq'.$id_tipos_requisitos.''; 
    echo $id_tipo_maquina;
    echo  $requisitos_operacional;
    echo $requisitos_seguranca;
    echo  $requisitos_preventivo;
    

    if(!$conn){
        die("Falha na Conexão: " . mysqli_connect_error());
    } else {
        echo "Conectado com sucesso<br>";
    }

    if(isset($_POST["dado"])){
    $sql = "UPDATE requisitos set id_tipos_requisitos = '$id_tipos_requisitos',
                            id_tipo_maquina = '$id_tipo_maquina',
                            requisitos_data_cadas = '',
                            requisitos_ativo = '',
                            requisitos_topicos = '',
                            requisitos_subtopicos = '',
                            requisitos_operacional = '$requisitos_operacional',
                            requisitos_seguranca = '$requisitos_seguranca',
                            requisitos_preventivo = '$requisitos_preventivo'
                            WHERE id_requisitos = $id_requisitos";

    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

    echo "estou aqui ";
    }

    mysqli_close($conn);
include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

<meta http-equiv="refresh" content="0; URL='https://senaivotuporanga.com.br/nr12/controller/requisitos/leitura_requisitos.php'">