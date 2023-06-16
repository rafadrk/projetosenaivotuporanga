
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
                            $id_maquina = $_SESSION['id_maquina'];

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

                            $sql = "SELECT matricula.id_matricula, matricula.id_aluno, matricula.id_turma, matricula.matricula_ni, matricula_arq_contrato, matricula_empresa,
                                turma.id_turma, turma.curso_id_curso, turma.turma_nome,
                                curso.id_curso, curso_nome,
                                aluno.id_aluno, aluno.id_pessoa, aluno.aluno_email_educ,
                                pessoa.id_pess, pessoa.pess_nome
                                FROM matricula, turma, curso, aluno, pessoa
                                WHERE matricula.id_aluno = aluno.id_aluno
                                and matricula.id_turma = turma.id_turma
                                and turma.curso_id_curso = curso.id_curso
                                and aluno.id_pessoa = pessoa.id_pess
                                and matricula.matricula_ni = $ni";
                        
                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");
                            
                            $registro = mysqli_fetch_array($resultado);

                                    $id_mat = $registro ['id_matricula'];
                                    $pess_nome = $registro ['pess_nome'];
                                    $turma_nome = $registro ['turma_nome'];
                                    $matricula_ni = $registro ['matricula_ni'];
                                    $data_comeco = $registro ['matricula_data'];
                                    $data_comeco = $registro ['matricula_data'];
                                    $data_finalizacao = $registro ['matricula_tranc'];
                                    $empresa = $registro ['matricula_empresa'];
                                    $arquivo = $registro ['matricula_arq_contrato'];

                                    echo $id_mat;

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
                                                                   historico_data,
                                                                   historico_hora,
                                                                   historico_status)
                                                                VALUES
                                                                   (
                                                                    '',
                                                                    '$id_mat',
                                                                    '$id_maquina',
                                                                    '$id_requisitos[$i]',
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

<meta http-equiv="refresh" content="0; URL='https://senaivotuporanga.com.br/nr12/view/php/loginprofessor.php'">