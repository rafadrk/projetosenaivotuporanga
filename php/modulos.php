<?php
    include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

<html Lang="pt-br">
    <link rel="icon" type="image/png" href="https://senaivotuporanga.com.br/nr12/view/img/iconepag.png"/>
    <form class="login" method="post" action="../../controller/modulos/cadastro_modulos.php"> 
            <center>
                <div class="container">
                    <div class="card">
                        <br>
                        <p class="modulos ">Cadastro de Módulos</p>
                        <div class="inputBox">
                            <input type="text" name="modulos_descricao" required="required">
                            <span>Descrição Do Módulo: </span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="modulos_endereco" required="required">
                            <span>Endereço de Módulo: </span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="modulos_endereco_leitura" required="required">
                            <span>Leitura De Endereço: </span>
                        </div>
                        <button class="enter">Cadastrar</button> 
            
                    </div>
                </div>
                <br><br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/modulos/cadastro_modulos.pdf" download="../../arquivos/Manual/grupo_setores/cadastro_grupo_setores.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/modulos/cadastro_modulos.pdf" download="../../arquivos/Manual/grupo_setores/alteracao_grupo_setores.pdf.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                </a>
            </center>
    </form>
</html>

<?php
    include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>