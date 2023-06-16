<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>NR-12 | Login</title>
        <!-- <link rel='icon' type='imagem/png' href='borboleta.png' /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel='stylesheet' href='../css/login.css'>
        <link rel="icon" type="image/png" href="https://senaivotuporanga.com.br/nr12/view/img/iconepag.png"/>
        <script src="../js/sb-admin-2.js"></script>

    </head>
    <body>
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                    <form class="login"  method="post" action="../../controller/login_aluno/validacao_login2.php">
                        <center><img src="../img/senai.png" width="80%"></center><br>
                       <div id="formulario">
                        <div class="login__field">
                            <span id="msgAlerta1"></span>
                            <i class="login__icon fas fa-user"></i>
                            <center><input type="text" maxlength="10" class="login__input" placeholder="Escreva seu NI, professor" name="ni" required></center>
                            <br>
                            <center><input type="text" maxlength="10" class="login__input" placeholder="NI da máquina" name="ni_maquina" required></center>
                        </div>
                       </div> 
                        <button class="button login__submit">
                            <input type="hidden" name="submit">
                            <span name="submit" class="button__text">Entrar</span>  
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                    </form>
                </div>

                            <div class='screen__background'>
                                <span class='screen__background__shape screen__background__shape4'></span>
                                <span class='screen__background__shape screen__background__shape3'></span>	
                                <span class='screen__background__shape screen__background__shape2'></span>
                                <span class='screen__background__shape screen__background__shape1'></span>
                            </div>
                    </div>
            </div>
    </body>
</html>                 