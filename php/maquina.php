<?php
include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
include "../../model/connection.php";
?>

        <form class="login" method="post" action="../../../nr12/controller/maquina/cadastro_maquina.php"> 
            <center>
                <div class="container">
                    <div class="card">
                        <p class="login">Cadastro de Máquina</p>

                        <?php
                            include "../../model/connection.php";

                            echo "<span style='font-size:15px;'>Escolha o Tipo de Máquina:</span>";

                            echo "<div class='inputDate'>
                                <select name='id_tipo_maquina' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width:75%;' style='margin:30px;'>";

                            $sql = "SELECT * FROM tipo_maquina";

                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                            while( $registro = mysqli_fetch_array($resultado))
                            {
                                $id_tipo_maquina = $registro['id_tipo_maquina'];
                                $tipo_maquina_nome = $registro['tipo_maquina_nome'];
                                $tipo_maquina_fabricante = $registro['tipo_maquina_fabricante'];
                                $tipo_maquina_modelo = $registro['tipo_maquina_modelo'];

                                echo "<span><center><option value='$id_tipo_maquina'>$tipo_maquina_nome - $tipo_maquina_fabricante - $tipo_maquina_modelo</option></center></span>";

                            }

                            echo "</select>";
                        ?>
                        
                        <br>
                        
                        <br>

                        <?php
                            include "../../model/connection.php";

                            echo "<span style='font-size:15px; margin: bottom -10px;'>Escolha o Setor de Máquina:</span><br><br>";

                            echo "<div class='inputDate'>
                                <select name='id_set' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width:75%;' style='margin:40px;'>";

                                $sql = "SELECT setor.id_set, setor.id_unidade, setor.setor_descricao,
                                unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado
                                FROM setor, unidade
                                WHERE setor.id_unidade = unidade.id_uni";

                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                            while( $registro = mysqli_fetch_array($resultado))
                            {
                                $id_set = $registro['id_set'];
                                $id_unidade = $registro['id_unidade'];
                                $unidade_descricao = $registro['unidade_descricao'];
                                $unidade_cidade = $registro['unidade_cidade'];
                                $unidade_estado = $registro['unidade_estado'];
                                $setor = $registro['setor_descricao'];

                                echo "<span><center><option value='$id_set'>$setor - $unidade_cidade</option></center></span>";

                            }
                                
                            echo "</select>";

                        ?>

                        <br>
                        <br>    

                        <div class="inputBox">
                            <input type="text" name="maq_ni" required="required">
                            <span>Digite o NI:</span>
                        </div>
                        <br>
                        
                        <div class="inputBox">
                            <input type="text" name="maq_peso" required="required">
                            <span>Peso de Máquina:</span>
                        </div>

                        <br>

                        <div class="inputBox">
                            <input type="text" name="maq_capacidade" required="required">
                            <span>Capacidade da Máquina:</span>
                        </div>


                        <br>
                        
                        <span style='font-size:15px; margin: bottom -10px;'>Motor Elétrico:</span><br>
<center>
                        <div class="inputBox">
                            <textarea rows="2" cols="18" maxlength="9999" type="text" name="maq_motor_eletrico" required="required"></textarea>
                        </div>
                        </center>

                        <br>

                     <select name="maq_ano_fabricacao"class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style='width:70%';>
                     <center><option selected>Selecione o ano</option></center>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>

                        <br>
                        <br>
            
                        <button class="enter">Cadastrar</button>
            
                    </div>
                </div>
            </center>
        </form>           
        <center>       
            <br><br><br>
                    <a style="color:#ff0000 ; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/tipo_maquina/cadastro_tipo_maquina.pdf" download="../../arquivos/Manual/tipo_maquina/cadastro_tipo_maquina.pdf">
                        <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*Importante Lembrar que caso você não tenha cadastrado o tipo de máquina será impossível prosseguir
                    </a>
                    <br><br>
                    <a style="color:#ff0000 ; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/setor/cadastro_setor.pdf" download="../../arquivos/Manual/setor/cadastro_setor.pdf">
                        <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*Também é importante Lembrar que será necessário o cadastro de setor para que você consiga prosseguir com cadastro de máquinas
                    </a>
                    <br><br>
                    <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/maquina/cadastro_maquina.pdf" download="../../arquivos/Manual/maquina/cadastro_maquina.pdf">
                        <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                    </a>
                    <br><br>
                    <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/maquina/alteracao_maquina.pdf" download="../../arquivos/Manual/maquina/alteracao_maquina.pdf">
                        <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                    </a>       
        </center>           

<?php
include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
include "../../model/connection.php"; //OOOOOIIIIIIIIIII
?>