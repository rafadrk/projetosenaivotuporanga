<!-- codigo que alanna cabaça esta mexendo -->

<?php
    include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
    include "../../view/php/style.css"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

<form class="login" method="post" action="../../controller/pessoa/cadastro_pessoa.php"> 
            <center>
                <div class="container">
                    <div class="card">
                        <p class="login">Cadastro de Pessoa</p>
                        
                        <div class="inputBox">
                            <input type="text" name="pess_nome" required="required">
                            <span>Nome</span>
                        </div>
            
                        <button class="enter">Cadastrar</button>
            
                    </div>
                </div>
</form>
<br><br><br>
        <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/pessoa/cadastro_pessoa.pdf" download="../../arquivos/Manual/pessoa/cadastro_pessoa.pdf">
            <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
        </a>
        <br><br>
        <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/pessoa/alteracao_pessoa.pdf" download="../../arquivos/Manual/pessoa/alteracao_pessoa.pdf">
            <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
        </a>
        </center>

        <?php
    include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>