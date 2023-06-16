<?php
include "header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

    <form class="login" method="post" action="../../controller/liberacao/cadastro_liberacao.php"> 
            <center>
                <div class="container">
                    <div class="card">

                        <p class="login">Cadastro de liberações</p>

                        <div class="inputBox">
                            <span>Selecione o Login:</span><br>

                            <?php

                            include "../../model/connection.php";

                            echo'<select style="width:100%" name="login" required>';
                            echo'<option selected disabled hidden>Selecione</option>';

                            $sql = "SELECT * FROM login left join pessoa on login.id_pessoa = pessoa.id_pess";

                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                            while($registro = mysqli_fetch_array($resultado))
                            {
                                $id_login = $registro['id_login'];
                                $pess_nome = $registro['pess_nome'];

                                echo"<option value='$id_login'$>$id_login - $pess_nome</option>";
                            }

                            echo '</select></div>';

                            echo '<div class="inputBox">
                            <span>Selecione o Grupo de Permissão:</span><br><br>';

                            echo'<select name="grupo_permissao" required>';
                            echo'<option selected disabled hidden>Selecione</option>';

                            $sql = "SELECT * FROM grupo_permissao";

                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                            while($registro = mysqli_fetch_array($resultado))
                            {
                                $id_grupo_permissao = $registro['id_grupo_permissao'];
                                $grupopermi_descri = $registro['grupopermi_descri'];

                                echo"<option value='$id_grupo_permissao'>$grupopermi_descri</option>";
                            }

                            echo '</select></div>';

                            ?>
 
                        <button class="enter">Cadastrar</button>   
                        <br>
                    </div>
                </div>
                <br><br><br>
                <p style= "color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;">
                    <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*Importante Lembrar que caso você não tenha cadastrado login de um colaborador ou de um Aluno antes, será impossível prosseguir.
                    <br> 
                    <a style="color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/login/cadastro_login_colaborador.pdf" download="../../arquivos/Manual/login/cadastro_login_colaborador.pdf">
                        Clique aqui para aprender a fazer o cadastro de login colaborador
                    </a>
                    ou
                    <a style="color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/login/cadastro_login_aluno.pdf" download="../../arquivos/Manual/login/cadastro_login_aluno.pdf">
                         clique aqui para aprender a fazer o cadastro de login aluno
                    </a>
                </p>
                <br><br>
                <a style="color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/grupo_permissao/cadastro_grupo_permissao.pdf" download="../../arquivos/Manual/grupo_permissao/cadastro_grupo_permissao.pdf">
                    <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*É importante Lembrar que caso você não tenha cadastrado grupo de permissão antes, será impossível prosseguir
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/grupo_setores/cadastro_grupo_setores.pdf" download="../../arquivos/Manual/grupo_setores/cadastro_grupo_setores.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/grupo_setores/alteracao_grupo_setores.pdf" download="../../arquivos/Manual/grupo_setores/alteracao_grupo_setores.pdf.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                </a>
        </center>
    </form>

<?php
include "footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>