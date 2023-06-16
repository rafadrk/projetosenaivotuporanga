<?php 
include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
include "../../model/connection.php"; //ESSA LINHA É RESPONSAVEL POR CONECTAR NO BANCO, VOCÊ NÃO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.
include "../../model/permissions.php"; //SERVE PARA VERIFICAR SE PODE ACESSAR A PAGINA.

$id_tipo_maquina = $_POST['id_tipo_maquina'];
$requisitos_data_cadas = $_POST['requisitos_data_cadas'];
$requisitos_ativo = $_POST['requisitos_ativo'];
$requisitos_operacional = $_POST['check1'];
$requisitos_seguranca = $_POST['check2'];
$requisitos_preventivo = $_POST['check3'];

$check_tipos_requisitos = $_POST['check_tipos_requisitos'];
$id_tipos_requisitos = $_POST['id_tipos_requisitos'];

echo $check_tipos_requisitos;
echo $id_tipos_requisitos;


$x = count ($id_tipos_requisitos);
echo $x;
echo "<br>";

for ($i = 1; $i <= $x; $i++) {

    echo $check_tipos_requisitos[$i];

    $requisitofinal = $check_tipos_requisitos[$i];

    $sql = "INSERT INTO requisitos(id_requisitos,
                                    id_tipos_requisitos,
                                    id_tipo_maquina,
                                    requisitos_data_cadas,
                                    requisitos_ativo,
                                    requisitos_operacional,
                                    requisitos_seguranca,
                                    requisitos_preventivo) 
                                    VALUES
                                    ('',
                                    '$requisitofinal',
                                    '$id_tipo_maquina',
                                    '$requisitos_data_cadas',
                                    'ativo',
                                    '$requisitos_operacional',
                                    '$requisitos_seguranca',
                                    '$requisitos_preventivo')";


if (mysqli_query($conn, $sql)){
    echo "<br>Registro Gravado Com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

mysqli_close($conn);

include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

<meta http-equiv="refresh" content="0; URL='https://senaivotuporanga.com.br/nr12/view/php/requisitos.php'">