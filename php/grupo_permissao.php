<?php

    include "header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END

    ?>
        <form class="login" method="post" action="../../../nr12/controller/grupo_permissao/cadastro_grupo_permissao.php"> 
                <center>
                    <div class="container">
                        <div class="card">
                        <p class="login">Cadastro de Grupo de Permissão</p>
                        <div class="inputBox">
                                <input type="text" name="descricao" required>
                            <span>Descrição do Grupo de Permissão</span>
                        </div>
     
                            <button class="enter">Cadastrar</button>
                
                        </div>
                    </div>
                    <br><br><br>
                    <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" 
                    href="../../arquivos/Manual/grupo_permissao/cadastro_grupo_permissao.pdf" download="../../arquivos/Manual/grupo_permissao/cadastro_grupo_permissao.pdf">
                        <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                    </a>
                    <br><br>
                    <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" 
                    href="../../arquivos/Manual/grupo_permissao/alteracao_grupo_permissao.pdf" download="../../arquivos/Manual/grupo_permissao/alteracao_grupo_permissao.pdf">
                        <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                    </a>
            </center>
        </form>

    <?php

    include "footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
    
?>