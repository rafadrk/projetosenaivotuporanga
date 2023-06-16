<?php
    include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

<html Lang="pt-br">
    <form class="login" method="post" action="../../../nr12/controller/tipo_maquina/cadastro_tipo_maquina.php"> 
            <center>
                <div class="container">
                    <div class="card">
                        <p class="login">Cadastro do Tipo de Máquina</p>
                        <div class="inputBox">
                            <input type="text" name="tipo_maquina_nome" required="required">
                            <span>Tipo de Máquina:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="tipo_maquina_fabricante" required="required">
                            <span>Fabricante:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="tipo_maquina_modelo" required="required">
                            <span>Modelo:</span>
                        </div>
            
                        <button class="enter">Cadastrar</button>
            
                    </div>                   
                </div>
                <br><br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/tipo_maquina/cadastro_tipo_maquina.pdf" download="../../arquivos/Manual/tipo_maquina/cadastro_tipo_maquina.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/tipo_maquina/alteracao_tipo_maquina.pdf" download="../../arquivos/Manual/tipo_maquina/alteracao_tipo_maquina.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                </a>
        </center>
    </form>

</html>



<?php
    include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>