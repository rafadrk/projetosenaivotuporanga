<?php
include "../../model/connection.php";
include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>
    <link rel="icon" type="image/png" href="https://senaivotuporanga.com.br/nr12/view/img/iconepag.png"/>
    <center>
        <table class="table">
         <tr><th>ID</th> <th>Nome do Curso</th>
        <th>Descricao do Curso:</th> <th>Autorizacao do Curso:</th> 
        <th>Status de Atividade do Curso:</th> <th>Data GP REC</th> 
        <th>Data de Criação do Curso:</th></tr>
        <br>

    <?php
        $campo= ["id_curso","curso_nome", "curso_desc", "curso_autorizacao", "curso_status_atv", "curso_dt_criacao", "curso_gp_rec"];
        $i = 0;
        $sequencia="";
        $comando="";

        if(!$conn){
            die("Falha na Conexão: " . mysqli_connect_error());
        }
        echo "Conectado com sucesso";

        if(isset($_POST["dado"])){

            foreach($_POST["dado"] as $dado){

                    if($dado <> ""){

                        if($sequencia == "")
                            $sequencia = 1;

                        else
                            $comando = $comando . " and ";
                        

                        $comando = $comando . $campo[$i] ."="."'".$dado."' ";
                        //echo "- " . $campo[$i] . "---". $check. "<br>";              
                    }
                    $i++;
                }

        } else {

            echo "nenhum campo selecionado";
        }

        if($comando <> ""){

            $sql =  "SELECT * FROM curso where $comando";

        } else {

            $sql =  "SELECT * FROM curso";
        }

        $resultado = mysqli_query($conn, $sql) or die("Erro ao retornar");

        while($registro = mysqli_fetch_array($resultado)){
            $id_curso = $registro['id_curso'];
            $curso_nome = $registro['curso_nome'];
            $curso_desc = $registro['curso_desc'];
            $curso_autorizacao = $registro['curso_autorizacao'];
            $curso_status_atv = $registro['curso_status_atv'];
            $curso_gp_rec = $registro['curso_gp_rec'];
            $curso_dt_criacao = $registro['curso_dt_criacao'];
        
            echo "<tr>";
            echo "<td>".$id_curso."</td>";
            echo "<td>".$curso_nome."</td>";
            echo "<td>".$curso_desc."</td>";
            echo "<td>".$curso_autorizacao."</td>";
            echo "<td>".$curso_status_atv."</td>";
            echo "<td>".$curso_gp_rec."</td>";
            echo "<td>".$curso_dt_criacao."</td>";
            echo "<td>
                  <form action='alteracao_curso.php' method='post'>
                  <center>
                  <input type='hidden' name='dado' value=".$id_vendedor.">
                  <input type=submit value='Editar'></form>";
        
            echo "<td>
                  <form action='4Remover.php' method='post'>
                  <center>
                  <input type='hidden' name='deletar' value=".$id_vendedor.">
                  <input type=submit value='Remover'></form>";
        
            echo "</tr>";
        }

        mysqli_close($conn);
    ?>

<?php
include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>