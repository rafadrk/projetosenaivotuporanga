<?php
include "header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>

    <form class="login" method="post" action="../../controller/aluno/cadastro_aluno.php"> 
            <center>
                <div class="container">
                    <div class="card">
                        <p class="login">Cadastro de aluno</p>
                            <?php
                            include "../../model/connection.php"; //ESSA LINHA É RESPONSAVEL POR CONECTAR NO BANCO, VOCÊ NÃO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.
                            ?>

                        <div class="tabela">
                    <div style="overflow: auto; height: 800px">
                        <table class="table table-hover" style="color:black; text-shadow: 10%; font-size:15px;">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome:</th>
                                </tr>    
                            </thead>
                            <tbody>

                    <?php

                    include "../../model/connection.php";

                    $sql2 = "SELECT * FROM pessoa";
                    $resultado = mysqli_query($conn,$sql2) or die("Erro ao retornar informação");

                        $id=1;

                        while( $registro = mysqli_fetch_array($resultado)){
                            $id_pess = $registro['id_pess'];
                            $pess_nome = $registro['pess_nome'];

                            echo "<tr>";
                            echo '<td scope="row" style="color:black"><input type="checkbox" value="'.$id_pess.'" name="checkpessoa['.$id.']" class="login__input">
                                 <input type="hidden" value="'.$id_pess.'" name="id_pess['.$id.']" class="login__input"></td>';
                            echo "<label><td scope='row' style='color:black'>".$id_pess."</td>";
                            echo "<td style='color:black'>".$pess_nome."</td></label>";
                        
                            echo "</tr>";

                            $id=$id+1;

                        }

                        echo"</tbody>
                        </table>";
    ?>
                        </div>
                    </div>
                        <button class="enter">Cadastrar</button><br>
            
                    </div>
                </div>
                <br><br><br>
                <a style="color:#ff0000 ; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/pessoa/cadastro_pessoa.pdf" download="../../arquivos/Manual/pessoa/cadastro_pessoa.pdf">
                    <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*Importante Lembrar que caso você não tenha cadastrado pessoa antes, será impossível prosseguir
                </a>
                <br><br>
                <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/Aluno/cadastro_aluno.pdf" download="../../arquivos/Manual/Aluno/cadastro_aluno.pdf">
                    <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                </a>
                <br><br>
        </center>
    </form>

<?php
include "footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>
