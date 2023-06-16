
<?php
                        include "../../model/connection.php";

                        session_start();
                        if((!isset($_SESSION['ni']) == true) and (!isset($_SESSION['ni_maquina']) == true)){
                            header('Location : ../../view/php/login.php');
                        }
                            $ni_maquina = $_SESSION['ni_maquina'];
                            $ni = $_SESSION['ni'];
                            $pess_nome = $_SESSION['pess_nome'];
                            $curso_nome = $_SESSION['curso_nome'];
                            $turma_nome = $_SESSION['turma_nome'];
                            $id_pessoa = $_SESSION['id_pessoa'];
                            $id_tipo_maquina = $_SESSION['id_tipo_maquina'];
                            $tipo_maquina_nome = $_SESSION['tipo_maquina_nome'];
                            $tipo_maquina_fabricante = $_SESSION['tipo_maquina_fabricante'];
                            $tipo_maquina_modelo = $_SESSION['tipo_maquina_modelo'];
                            $id_matricula = $_SESSION['id_matricula'];
                            $id_maquina = $_SESSION['id_maquina'];

                            $professor = $_POST['professor'];
                            $check = $_POST['leitura'];
                            $requisitos = $_POST['requisitos'];
                            $id_requisitos = $_POST['id_requisitos'];

                            echo $id_requisitos;
                            echo $requisitos;
                            
                            $x = count ($id_requisitos);
                            echo $x;
                            echo "<br>";

                            date_default_timezone_set('America/Sao_Paulo');

                            $hora = $_POST['hora'].$date = date('H:i:s');
                            $horafinal = $hora;

                            $data = $_POST['data'].$date = date('Y-m-d');
                            $datafinal = $data;

                            for ($i = 1; $i <= $x; $i++) {
            
                                echo "<br>";
                                echo $id_requisitos[$i];
                                echo $check[$i];
                                $checkfinal = $requisitos[$i];

                                $sql2 = "set FOREIGN_KEY_CHECKS=0"; 
                    
                                $sql = "INSERT INTO  historico    (
                                                                   id_historico,
                                                                   id_matricula,
                                                                   id_maquina,
                                                                   id_requisitos,
                                                                   nome_prof,
                                                                   historico_data,
                                                                   historico_hora,
                                                                   historico_status)
                                                                     VALUES
                                                                   (
                                                                    '',
                                                                    '$id_matricula',
                                                                    '$id_maquina',
                                                                    '$id_requisitos[$i]',
                                                                    '$professor',
                                                                    '$datafinal',
                                                                    '$horafinal',
                                                                    '$checkfinal')";
                    
                                if(mysqli_query($conn, $sql)){
                                echo"<br>Registro Gravado com Sucesso";
                                }else{
                                echo "Error: ". $sql . "<br>" . mysqli_error($conn);
                                }
                                
                                
                            }

                        ?>
<meta http-equiv="refresh" content="0; URL='https://senaivotuporanga.com.br/nr12/view/php/index_aluno.php'">