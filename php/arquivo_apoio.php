<?php

echo "<!DOCTYPE html>";

include "../../view/php/header.php";

echo "<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Senai Votuporanga - Arquivos de Apoio</title>
</head>";
?>
<body>
    <center>
        <div class="cardmaquina">
            <div class="screen6">
                <div class="screen__content">
                    <form class="login"  method="post" action="cadastro_arquivos_apoio.php"> 
                        <br><br>
                        <h2>Cadastro Arquivos apoio</h2><br><br>

                        <div class="div1">
                            
                            <div class="inputBox" style="margin:0 25%">
                                
                                <?php
                                    include "../../model/connection.php"; //ESSA LINHA É RESPONSAVEL POR CONECTAR NO BANCO, VOCÊ NÃO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.
                                    include "../../model/permissions.php"; //SERVE PARA VERIFICAR SE PODE ACESSAR A PAGINA.
                                    $sql1= "SELECT * FROM arquivos_apoio";
                                    $sql= "SELECT * FROM tipo_maquina";

                                        echo"<select name='modelo' style='width: 70%;' >";
                                        echo"<center><option selected disabled>- Selecione -</center></option>";
                                            $resultado1 = mysqli_query($conn,$sql) or die ("Erro ao retornar os pesquisas");
                                            while($registro = mysqli_fetch_array($resultado1))
                                            {
                                                $maqId = $registro['id_tipo_maquina'];
                                                $maqnome = $registro['tipo_maquina_nome'];
                                                echo "<option value='$maqId'>$maqnome</option>";
                                            }
                                        echo"</select>";
                                ?>
                            </div>
                            <div class="inputBox" style="margin:35px 25%">
                                <input type="text" class="login__input"name="descricao"  required> 
                                <span>Descrição do arquivo:</span>
                            </div>

                            <h3>Arquivo gravado no Sistema:</h3>
                            <div class="inputDate" style="margin:35px 25%">
                                <input type="date" class="inputDate" name="data" required> 
                                
                            </div><br>

                            <div class="inputBox" style="margin:35px 25%">
                                <input type="text" class="login__input" name="versao"    required> 
                                <span>Versão do arquivo:</span>
                            </div><br>

                            <h3>Arquivo: </h3>
                            <div>
                                <label for="formFileLg" class="form-label">Large file input example</label>
                                <input class="form-control form-control-lg" id="formFileLg" type="file">
                            </div>
                        </div>
            </div>
                        <input type='submit' value='Cadastrar' class='button login__submit'>
                            <span class='button__text'>Cadastrar</span>
                    </form> 
                    </center>           
</body>
    <script>
        function Checkfiles(){
            var fup = document.getElementById('formFileLg');
            var fileName = fup.value;
            var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

            if(ext =="pdf"){
                return true;
            }
            else {
                alert("Arquivo inválido");
                return false;
                
            }
        }
    </script>
</html>