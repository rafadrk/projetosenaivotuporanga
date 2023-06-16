<?php 
include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
include "../../model/connection.php"; //ESSA LINHA Ã‰ RESPONSAVEL POR CONECTAR NO BANCO, VOCÃŠ NÃƒO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.

$id_pessoa = $_POST['id_pessoa'];
$aluno_email_educ = $_POST['aluno_email_educ'];
$aluno_pai = $_POST['aluno_pai'];
$aluno_mae = $_POST['aluno_mae'];


$sql = "INSERT INTO aluno(id_aluno,
                        id_pessoa,
                        aluno_email_educ,
                        aluno_pai,
                        aluno_mae) 
                        VALUES
                        ('',
                        '$id_pessoa',
                        '$aluno_email_educ',
                        '$aluno_pai',
                        '$aluno_mae')";
                        
echo "estou aqui ".$aluno_email_educ;

if (mysqli_query($conn, $sql)){
    echo "<br>Registro Gravado Com Sucesso";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} 

mysqli_close($conn);
include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

