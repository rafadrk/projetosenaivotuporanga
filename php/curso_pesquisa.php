<?php

    include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
    include "../../model/connection.php";
    
    ?>

        <form class="login" method="post" action="../../../nr12/controller/curso/leitura_curso.php"> 
                <center>
                    <div class="container">
                        <div class="card">
                            <br>
                            <p class="login">Pesquisa de Curso</p>
                            <div class="inputBox">
                                <input type="text" name="dado[]">
                                <span>Nome do Curso:</span>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="dado[]">
                                <span>Descrição do Curso:</span>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="dado[]">
                                <span>Autorização do Curso:</span>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="dado[]">
                                <span>Status de Atividade:</span>
                            </div>
                            <div class="inputBoxData">
                                <input type="date" name="dado[]">
                                <span>Data de Criação:</span>
                            </div>
                            <div class="inputBox">
                                <input type="text" name="dado[]">
                                <span>Grupo de Recurso???:</span>
                            </div>
                
                            <button class="enter">Prosseguir</button>

                            </form>
                
                        </div>
                    </div>
                </center>

    <?php

    include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END

?>