<?php
include "header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>
    <link rel="icon" type="image/png" href="https://senaivotuporanga.com.br/nr12/view/img/iconepag.png"/>
    <form class="login" method="post" action="../../../nr12/controller/curso/cadastro_curso.php"> 
            <center>
                <div class="container">
                    <div class="card">
                        <p class="login">Cadastro de Curso</p>
                        <div class="inputBox">
                            <input type="text" name="curso_nome" required="required">
                            <span>Nome do Curso:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="curso_desc" required="required">
                            <span>Descrição do Curso:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="curso_autorizacao" required="required">
                            <span>Autorização do Curso:</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="curso_status_atv" required="required">
                            <span>Status de Atividade:</span>
                        </div>
                        <div class="inputBoxData">
                            <input type="date" name="curso_dt_criacao" required="required">
                            <span>Data de Criação:</span>
                        </div>
                        <!-- <div class="inputBox">
                            <input type="text" name="curso_gp_rec" required="required">
                            <span>Grupo de Recurso???:</span>
                        </div> -->
            
                        <button class="enter">Cadastrar</button>
            
                    </div>
                </div>
                <br><br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/curso/cadastro_curso.pdf" download="../../arquivos/Manual/curso/cadastro_curso.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/curso/alteracao_curso.pdf" download="../../arquivos/Manual/curso/alteracao_curso.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                </a>
        </center>
    </form>

<?php
include "footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>