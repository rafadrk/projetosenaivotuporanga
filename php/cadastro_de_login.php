<?php
include "header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>
    <form class="login" method="post" action="../../controller/login/cadastro_login.php"> 
            <center>
                <div class="container">
                    <div class="card">
                        <p class="login">Cadastro de Login</p>
                        <div class="inputBox">
                            <span>Pessoa: </span>
                        <br>
                            <select name='id_pess' style="width: 100%;" required>
                            <?php
                            include "../../model/connection.php"; //ESSA LINHA É RESPONSAVEL POR CONECTAR NO BANCO, VOCÊ NÃO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.


                            $sql2 = "SELECT * FROM pessoa";
                            $resultado = mysqli_query($conn,$sql2) or die("Erro ao retornar informação");

                            while($registro = mysqli_fetch_array($resultado)){
                                // $id_aluno = $registro ['id_aluno'];
                                $id_pess = $registro['id_pess'];
                                $pess_nome = $registro['pess_nome'];

                                echo "<option value='".$id_pess."'>".$pess_nome."</option>";
                            }
                                mysqli_close($conn);
                          
                              ?>
                            </select>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="login_senha" required="required">
                            <span>Senha</span>
                        </div>
            
                        <button class="enter">Cadastrar</button>
            
                    </div>
                </div>
                <br><br><br>
                <a style="color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/pessoa/cadastro_pessoa.pdf" download="../../arquivos/Manual/pessoa/cadastro_pessoa.pdf">
                    <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*Importante Lembrar que caso você não tenha cadastrado pessoa antes, será impossível prosseguir
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/login/cadastro_login_colaborador.pdf" download="../../arquivos/Manual/login/cadastro_login_colaborador.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar algum Colaborador? Clique aqui!
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/login/cadastro_login_aluno.pdf" download="../../arquivos/Manual/login/cadastro_login_colaborador.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar algum Aluno? Clique aqui!
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/login/alteracao_login.pdf" download="../../arquivos/Manual/colaborador/alteracao_colaborador.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                </a>
        </center>
    </form>

<?php
include "footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>
