<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>NR-12 | Login</title>
        <!-- <link rel='icon' type='imagem/png' href='borboleta.png' /> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="https://senaivotuporanga.com.br/nr12/view/img/iconepag.png"/>
        <link rel='stylesheet' href='../css/login.css'>
    </head>
    <body>
        <div class="container">
            <div class="screen">
                <div class="screen__content">
                <center>
                    <form class="login" method="post" action="../../controller/login_colaborador/validacao_login.php">
                        <img src="../img/senai.png" width="80%">
                        <div class="login__field">
                            <br>
                            <i class="login__icon fas fa-user"></i>
                            <center><input type="text" name="email" class="login__input" placeholder="E-mail" required></center>
                            <br>
                            <center><input type="password" name="senha" class="login__input" placeholder="Senha" required></center>
                            <br>
                            <label><center><input type="checkbox" name="check" class="login__input"></center>
                            Selecione aqui se deseja realizar a Manutenção Preventiva</label>
                        </div>

                        <button class="button login__submit">
                            <input type='hidden' name='submit'>
                            <span name="submit" class="button__text">Entrar</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>				
                    </form>
            
                <br><br><h6><a href="login.php">Entre como Aluno.</a>
                </center>
                    
                </div>

                <div class="screen__background">
                    <span class="screen__background__shape screen__background__shape4"></span>
                    <span class="screen__background__shape screen__background__shape3"></span>		
                    <span class="screen__background__shape screen__background__shape2"></span>
                    <span class="screen__background__shape screen__background__shape1"></span>
                </div>		
            </div>
        </div>
    </body>
</html>
