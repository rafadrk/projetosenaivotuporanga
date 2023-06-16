<?php
    include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
    include "../../view/php/style.css"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

    <form class="login" method="post" action="../../../nr12/controller/turma/cadastro_turma.php"> 
    <link rel="icon" type="image/png" href="https://senaivotuporanga.com.br/nr12/view/img/iconepag.png"/>
            <center>
                <div class="container">
                    <div class="card">
                        <p class='login'>Cadastro de Turma</p>

                        <?php
                            include "../../model/connection.php";

                            echo "<div class='inputDate'>
                                <span style='font-size:15px; margin: bottom -10px;'>Selecione o Curso:</span><br>
                                <select name='id_curso' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width:70%;' style='margin:30px;'>";

                            $sql = "SELECT * FROM curso";

                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                            while( $registro = mysqli_fetch_array($resultado))
                            {
                                $id_curso = $registro['id_curso'];
                                $curso_desc = $registro['curso_desc'];
                                $curso_nome = $registro['curso_nome'];

                                echo "<span><center><option value='$id_curso'>$curso_nome</option></center></span>";

                            }
                                
                            echo "</select>";

                        ?>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="turma_nome" required="required">
                            <span>Nome da Turma:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="turma_obs" required="required">
                            <span>Observação:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="turma_limite" required="required">
                            <span>Limite:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="turma_quant" required="required">
                            <span>Quantidade:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="turma_inicio" required="required">
                            <span>Inicio:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="turma_termino" required="required">
                            <span>Termino:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="turma_cargaht" required="required">
                            <span>Carga Horária Total:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="turma_cargahs" required="required">
                            <span>Carga Horária Semanal:</span>
                        </div>
            
            
                        <button class="enter">Cadastrar</button>
            
                    </div>
                </div>
                <br><br><br>
                <a style="color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/curso/cadastro_curso.pdf" download="../../arquivos/Manual/curso/cadastro_curso.pdf">
                    <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*Importante Lembrar que caso você não tenha cadastrado curso antes, será impossível prosseguir
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/turma/cadastro_turma.pdf" download="../../arquivos/Manual/turma/cadastro_turma.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/curso/alteracao_curso.pdf" download="../../arquivos/Manual/curso/alteracao_curso.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                </a>
        </center>
    </form>

<?php
    include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>