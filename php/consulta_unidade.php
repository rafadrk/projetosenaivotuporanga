<?php

    include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
    include "../../model/connection.php";
    
?>
    <link rel="icon" type="image/png" href="https://senaivotuporanga.com.br/nr12/view/img/iconepag.png"/>
    <form class="login" method="post" action="../../../nr12/controller/unidade/leitura_unidade.php"> 
        <center>
            <div class="container">
                <div class="card">
                <br>
                <p class="login">Pesquisa de unidade</p>
                    <div class="inputBox">
                        <input type="text" name="dado[]">
                         <span>Descrição da Unidade:</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="dado[]">
                        <span>Cidade:</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="dado[]">
                        <span>Estado:</span>
                    </div>
                    <button class="enter">Prosseguir</button>
    </form>
                
                    </div>
                    </div>
                </center>

    <?php

    include "../../view/php/footer.php"; //LINHA RESPONSAVEL POR PUXAR FRONT-END

?>