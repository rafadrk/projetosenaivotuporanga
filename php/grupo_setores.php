<?php
    include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
    include "../../model/connection.php"; //ESSA LINHAinclude "../../model/permissions.php"; //SERVE PARA VERIFICAR SE PODE ACESSAR A PAGINA.
?>

<form class="login" method="post" action="../../controller/grupos_setores/cadastro_gruposetores.php" style="color: black ;"> 
    <center>
        <div class="container">
            <div class="card">
        <p class="login">Cadastro de Grupos de setores:</p>
        <div class="inputBox">
        <span>Colaborador:</span><br>

            <select name="colaborador"  style='width:100%;'>
                                        
                                        <?php   

                                            $sql = "SELECT * FROM colaborador left join pessoa on colaborador.id_pessoa = pessoa.id_pess";

                                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                                            while( $registro = mysqli_fetch_array($resultado))
                                            {
                                                $id_colaborador = $registro['id_colaborador'];
                                                $pess_id = $registro['id_pess'];
                                                $n_pess = $registro['pess_nome'];
                                
                                                echo "<option value='$id_colaborador'>$n_pess</option>";

                                            }
                                            
                                        ?>
                                        
                                    </select>
                                </div>
                                <div class="inputBox">
                                <span>Setor:</span>
                                <br>
                                    <select name="setor" style="width: 100%;">
                                        
                                        <?php   

                                            $sql = "SELECT unidade.id_uni, unidade.unidade_cidade, unidade.unidade_descricao, 
                                            setor.id_set, setor.id_unidade, setor.setor_descricao 
                                            FROM unidade, setor
                                            where unidade.id_uni = setor.id_unidade";

                                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                                            while($registro = mysqli_fetch_array($resultado))
                                            {
                                                $id_set = $registro['id_set'];
                                                $id_uni = $registro['   '];
                                                $set_descricao = $registro['setor_descricao'];
                                                $uni_descricao = $registro['unidade_descricao'];
                                                $uni_cidade = $registro['unidade_cidade'];

                                                echo "<option value='".$registro['id_set']."'>$set_descricao - $uni_descricao - $uni_cidade</option>";

                                            }
                                        
                                        ?>

                                    </select>
                            <br><br> <button class="enter">Cadastrar</button><br>
                                </div>
                            </div>
                            <br><br><br>
                            <a style="color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/Colaborador/cadastro_colaborador.pdf" download="../../arquivos/Manual/Colaborador/cadastro_colaborador.pdf">
                                <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*Importante Lembrar que caso você não tenha cadastrado colaborador antes, será impossível prosseguir
                            </a>
                            <br><br>
                            <a style="color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/setor/cadastro_setor.pdf" download="../../arquivos/Manual/setor/cadastro_setor.pdf">
                                <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*É importante Lembrar que caso você não tenha cadastrado setor antes, será impossível prosseguir
                            </a>
                            <br><br>
                            <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/grupo_setores/cadastro_grupo_setores.pdf" download="../../arquivos/Manual/grupo_setores/cadastro_grupo_setores.pdf">
                                <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                            </a>
                            <br><br>
                            <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/grupo_setores/alteracao_grupo_setores.pdf" download="../../arquivos/Manual/grupo_setores/alteracao_grupo_setores.pdf">
                                <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                            </a>
                            </center>
                        </form>                   
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    mysqli_close($conn);
    include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>