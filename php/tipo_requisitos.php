<?php
include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

        <form class="login" method="post" action="https://senaivotuporanga.com.br/nr12/controller/tipos_requisitos/cadastro_tipos_requisitos.php"> 
             <center>
                <div class="container">
                    <div class="card">
                        <p class="login">Cadastro de Tipo de Requisitos</p>
                            
                        
                            <div class="inputBox">
                                <input type="text" class="login__input" name="tiposreq_topicos" required> 
                                <span>Tópicos: </span>
                            </div>
                            <div class="inputBox">
                                <input type="text" class="login__input" name="tiposreq_subtopicos" required> 
                                <span>Subtópicos: </span>
                            </div>
                            <div class="inputBox">
                                <input type="text" class="login__input" name="tiposreq_desc" required> 
                                <span>Descrição: </span>
                            </div>
                            <div class="inputBox">
                                <input type="text" class="login__input" name="tiposreq_sta_manu" required> 
                                <span>Status de Manutenção: </span>
                            </div>
                            <div class="inputBox">
                                <input type="text" class="login__input" name="tiposreq_moni_prof" required> 
                                <span>Monitoramento dos professores: </span>
                            </div>
                               
                        
                        <button name="enviar" class='enter'>Cadastrar</button>
                    </div>
                </div>
                <br><br><br>
                    <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/tipos_requisitos/cadastro_tipos_requisitos.pdf" download="../../arquivos/Manual/unidade/cadastro_tipos_requisitos.pdf">
                        <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                    </a>
                    <br><br>
                    <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/tipos_requisitos/alteracao_tipos_requisitos.pdf" download="../../arquivos/Manual/unidade/alteracao_tipos_requisitos.pdf">
                        <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                    </a>
            </center>
        </form>
   
<?php
include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>