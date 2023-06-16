<?php

    include "header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END

    ?>
        <form class="login" method="post" action="../../../nr12/controller/unidade/cadastro_unidade.php"> 
                <center>
                    <div class="container">
                        <div class="card">
                        
                            <p class="login">Cadastro de Unidade</p>

                            <div class="inputBox">
                                <input type="text" name="descricao" required="required">
                                <span>Descricao da unidade:</span>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="cidade" required="required">
                                <span>Cidade:</span>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="estado" required="required">
                                <span>Estado:</span>
                            </div>
                
                            <button class="enter">Cadastrar</button>
                
                        </div>
                    </div>
                    <br><br><br>
                    <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/unidade/cadastro_unidade.pdf" download="../../arquivos/Manual/unidade/cadastro_unidade.pdf">
                        <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                    </a>
                    <br><br>
                    <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/unidade/alteracao_unidade.pdf" download="../../arquivos/Manual/unidade/alteracao_unidade.pdf">
                        <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                    </a>
            </center>
        </form>

    <?php

    include "footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
    
?>