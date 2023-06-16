<?php
include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
include "../../model/connection.php";
$data_brasil = DateTime::createFromFormat('Y/m/d', $data);
?>

<form class="login" method="post" action="https://senaivotuporanga.com.br/nr12/controller/matricula/cadastro_matricula.php" enctype="multipart/form-data">
    <center>
         <div class="container">
                    <div class="card">
                        <p class="login">Cadastro de Matrícula</p>
                    <div class="inputBox">
                        <span>Aluno:</span><br>
                            <select name="aluno" style="width: 100%;">
                                    
                                    <?php   

                                        $sql = "SELECT * FROM aluno left join pessoa on aluno.id_pessoa = pessoa.id_pess";

                                        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                                        while( $registro = mysqli_fetch_array($resultado))
                                        {
                                            $id_colaborador = $registro['id_colaborador'];
                                            $aluno_id = $registro['id_aluno'];
                                            $n_pess = $registro['pess_nome'];
                            
                                            echo "<option value='$aluno_id'>$n_pess</option>";
                                        }
                                        
                                    ?>
                                    
                                </select>
                            </div>
                            <div class="inputBox">
                                <span>Turma:</span><br>
                                <select name="turma" style="width: 100%;">
                                    
                                    <?php   

                                        $sql = "SELECT * FROM turma";

                                        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                                        while( $registro = mysqli_fetch_array($resultado))
                                        {
                                            $id_turma = $registro['id_turma'];
                                            $id_turma_matricula = $registro['id_turma'];
                                            $turma_nome = $registro['turma_nome'];

                                            echo "<option value='$id_turma'>$turma_nome</option>";

                                        }
                                    
                                    ?>

                                </select>
                            </div>

                            <div class="inputBox">
                                <input type="text"   name="matricula_ni" required> 
                                <span>Nº da Matrícula: </span>
                            </div>
                            
                            <div class="inputBox"><span>Data de Matrícula: </span></div>
                            <div class="inputDate">
                                <input type="date" name="matricula" style="width:100%;" required> 
                                
                            </div>
                            
                            <div class="inputBox"><span>Data de Finalização: </span></div>
                            <div class="inputDate">
                                <input type="date"   name="finalizacao" required> 
                            </div>

                            <div class="inputBox">
                                <input type="text"   name="empresa" required> 
                                <span>Empresa: </span>
                            </div>
                            <div class="inputBox">
                                <input type="tel"   name="cnpj" maxlength="14" required> 
                                <span>CNPJ da empresa: </span>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="file" id="formFile" name="arquivo" accept="application/pdf, application/vnd.ms-excel" style="width: 100%">
                            </div>
                            
                        <button class='enter'> Cadastrar </button>
                        </div>
                        </div>
                        <br><br><br>
                            <a style="color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/aluno/cadastro_aluno.pdf" download="../../arquivos/Manual/aluno/cadastro_aluno.pdf">
                                <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*Importante Lembrar que caso você não tenha cadastrado aluno antes, será impossível prosseguir
                            </a>
                            <br><br>
                            <a style="color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/turma/cadastro_turma.pdf" download="../../arquivos/Manual/turma/cadastro_turma.pdf">
                                <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*É importante Lembrar que caso você não tenha cadastrado turma antes, será impossível prosseguir
                            </a>
                            <br><br>
                            <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/matricula/cadastro_matricula.pdf" download="../../arquivos/Manual/matricula/cadastro_matricula.pdf">
                                <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                            </a>
                            <br><br>
                            <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/matricula/alteracao_matricula.pdf" download="../../arquivos/Manual/matricula/alteracao_matricula.pdf">
                                <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                            </a>
                        </center>
                        </form>


<?php
include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>