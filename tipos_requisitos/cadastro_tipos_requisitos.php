<?php 
include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
include "../../model/connection.php"; //ESSA LINHA É RESPONSAVEL POR CONECTAR NO BANCO, VOCÊ NÃO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.

$tiposreq_topicos      = $_POST['tiposreq_topicos'];
$tiposreq_subtopicos   = $_POST['tiposreq_subtopicos'];
$tiposreq_desc         = $_POST['tiposreq_desc'];
$tiposreq_sta_manu     = $_POST['tiposreq_sta_manu'];
$tiposreq_moni_prof    = $_POST['tiposreq_moni_prof'];

// echo $tiposreq_desc, $tiposreq_obs, $tiposreq_sta_manu, $tiposreq_sta_manu;

$sql = "INSERT INTO tipos_requisitos (id_tipos_requisitos,
                        tiposreq_topicos,
                        tiposreq_subtopicos,
                        tiposreq_desc,
                        tiposreq_sta_manu,
                        tiposreq_moni_prof)
                        VALUES
                        ('',
                        '$tiposreq_topicos',
                        '$tiposreq_subtopicos',
                        '$tiposreq_desc',
                        '$tiposreq_sta_manu',
                        '$tiposreq_moni_prof')";

    if(mysqli_query($conn, $sql)){
        echo"<br>Registro Gravado com Sucesso";
    }else{
        echo "Error: ". $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);
include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

<meta http-equiv="refresh" content="0; URL='https://senaivotuporanga.com.br/nr12/view/php/tipo_requisitos.php'"/>