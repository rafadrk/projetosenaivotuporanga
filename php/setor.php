<?php
    include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
    include "../../model/connection.php";
?>
  
<form class="login" method="post" action="../../controller/setor/cadastro_setor.php"> 
    <center>
        <div class="container">
            <div class="card">
            <p class="login">Cadastro de setores:</p>
            <div class="inputBox">
            <span>Unidade:</span>
        <br>
                                
            
        <?php

                    echo "<div class='inputDate'>
                    <td style='color:black'><select name='id_uni' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width:100%;'>
                        <option disabled selected> - Selecione - </option>";

                    $sql3 = "SELECT * FROM unidade";

                    $resultado = mysqli_query($conn, $sql3) or die("Erro ao retornar os dados");

                    while ($registro = mysqli_fetch_array($resultado)) {
                    $id_uni = $registro['id_uni'];
                    $unidade_cidade = $registro['unidade_cidade'];
                    $unidade_estado = $registro['unidade_estado'];

                    echo "<span><center><option value=".$id_uni."> $unidade_cidade - $unidade_estado </option></center></span>";
                    }

                    echo "</select><br>";

        ?>
                        <br>
                        <div class="inputBox">
                            <input type="text" id='setor_descricao' name="setor_descricao" required>
                            <span>Descrição: </span>
                        </div>
                        <br>
            
                        <button class="enter">Cadastrar</button><br>
            
                    </div>
                </div>              
        </center>
    </form>


                        <br>
                       
                    </div>
                    <center>
                    <br><br><br>
                        <a style="color:#ff0000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/unidade/cadastro_unidade.pdf" download="../../arquivos/Manual/unidade/cadastro_unidade.pdf">
                            <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*Importante Lembrar que caso você não tenha cadastrado unidade antes, será impossível prosseguir
                        </a>
                        <br><br>
                        <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/setor/cadastro_setor.pdf" download="../../arquivos/Manual/setor/cadastro_setor.pdf">
                            <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                        </a>
                        <br><br>
                        <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/setor/alteracao_setor.pdf" download="../../arquivos/Manual/setor/alteracao_setor.pdf">
                            <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    mysqli_close($conn);
    include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>