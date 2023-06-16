<?php
include ("../../view/php/header.php");
?>

                <br>

        <center>
            <div class="tabela">
                        <table class="table table-sm" style="color:black; text-shadow: 10%;">
                        <thead>
                            <tr><th scope="col">ID</th> <th scope="col">Tipo Requisitos:</th>
                             <th scope="col">Tipo máquina</th>
                             <th scope="col">Requisito Operacional</th> <th scope="col">Requisito De Segurança</th>
                              <th scope="col">Requisito Preventivo</th><th scope="col">Alterar</th>
                        </tr>
                        </thead>
                    <br>

                <?php 
                include "../../model/connection.php"; 

                    $chave = $_POST["dados"];

                    $sql =  "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
                        tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
                        setor.id_set, setor.id_unidade, setor.setor_descricao,
                        unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado,
                        requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
                        tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc
                        FROM maquina, tipo_maquina, setor, unidade, requisitos, tipos_requisitos
                        WHERE maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                        and maquina.id_setor = setor.id_set
                        and setor.id_unidade = unidade.id_uni
                        and requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
                        and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                        and requisitos.id_requisitos = $chave";
                
                        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

                    // loop para ler todos os registros
                        $registro = mysqli_fetch_array($resultado);

                                $id_tipo_maquina = $registro['id_tipo_maquina'];
                                $id_requisitos = $registro['id_requisitos'];
                                $id_tipos_requisitos = $registro['id_tipos_requisitos'];
                                $tiposreq_desc = $registro['tiposreq_desc'];
                                $tiposreq_topicos = $registro['tiposreq_topicos'];
                                $tiposreq_subtopicos = $registro['tiposreq_subtopicos'];
                                $tipo_maquina_nome = $registro['tipo_maquina_nome'];
                                $tipo_maquina_fabricante = $registro['tipo_maquina_fabricante'];
                                $tipo_maquina_modelo = $registro['tipo_maquina_modelo'];
                                $requisitos_operacional = $registro['requisitos_operacional'];
                                $requisitos_seguranca = $registro['requisitos_seguranca'];
                                $requisitos_preventivo = $registro['requisitos_preventivo'];

                        echo "<tr>";
                        echo "<td scope='row' style='color:black'>".$id_requisitos."</td>";
                        echo "<td style='color:black'>".$tiposreq_desc."</td>";
                        echo "<td style='color:black'>".$tipo_maquina_nome."</td>";
                        echo "<td style='color:black'>".$requisitos_operacional."</td>";
                        echo "<td style='color:black'>".$requisitos_seguranca."</td>";
                        echo "<td style='color:black'>".$requisitos_preventivo."</td>";  
                        echo "<td style='color:black'></td>";                
                        echo "</tr>";

                    
                            echo "<tr>";
                            echo "<form action='alteracao_requisitos.php' method='post'>";
                            echo "<th style='color:black'><input type='text' name='dado[]' value='".$registro['id_requisitos']."' readonly>";
                            echo '<td style="color:black"><select style="width: 100%;" name="dado[]" value="'.$registro['id_tipos_requisitos'].'">
                                    <optgroup>
                                    <option selected hidden>Selecione</option>';

                                $id=1;

                            $sql2 = "SELECT * from tipos_requisitos";

                            $resultado = mysqli_query($conn,$sql2) or die("Erro ao retornar dados");

                            while($registro = mysqli_fetch_array($resultado)){

                                $id_tipos_requisitos = $registro['id_tipos_requisitos'];
                                $tiposreq_descricao = $registro['tiposreq_desc'];

                                echo '<option value="'.$id_tipos_requisitos.'">'.$tiposreq_descricao.'</option><optgroup>';      
                                $id=$id+1;
                            }

                            echo '</select></td>';

                            $sql =  "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
                            tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
                            setor.id_set, setor.id_unidade, setor.setor_descricao,
                            unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado,
                            requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
                            tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc
                            FROM maquina, tipo_maquina, setor, unidade, requisitos, tipos_requisitos
                            WHERE maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                            and maquina.id_setor = setor.id_set
                            and setor.id_unidade = unidade.id_uni
                            and requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
                            and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                            and requisitos.id_requisitos = $chave";
                
                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

                    // loop para ler todos os registros
                            $registro = mysqli_fetch_array($resultado);

                            echo '<td style="color:black"><select name="dado[]" value="'.$registro['tipo_maquina_nome'].'" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width:70%;" style="margin:30px;">';

                                $sql = "SELECT tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo, observacao
                                FROM tipo_maquina
                                WHERE tipo_maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina";

                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                            while( $registro = mysqli_fetch_array($resultado))
                            {
                                $id_tipo_maquina = $registro['id_tipo_maquina'];
                                $tipo_maquina_nome = $registro['tipo_maquina_nome'];
                                $tipo_maquina_fabricante = $registro['tipo_maquina_fabricante'];
                                $tipo_maquina_modelo = $registro['tipo_maquina_modelo'];
                                $observacao = $registro['observacao'];

                                echo "<span><center><option value='".$id_tipo_maquina."'>$tipo_maquina_nome - $tipo_maquina_fabricante - $tipo_maquina_modelo - $observacao</option></span>";

                            }

                                    $sql5 =  "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
                                    tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
                                    setor.id_set, setor.id_unidade, setor.setor_descricao,
                                    unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado,
                                    requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
                                    tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc
                                    FROM maquina, tipo_maquina, setor, unidade, requisitos, tipos_requisitos
                                    WHERE maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                                    and maquina.id_setor = setor.id_set
                                    and setor.id_unidade = unidade.id_uni
                                    and requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
                                    and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                                    and requisitos.id_requisitos = $chave";
                
                                    $resultado = mysqli_query($conn,$sql5) or die("Erro ao retornar dados");

                                    $registro = mysqli_fetch_array($resultado);

                            echo"</select></center></td>";

                            echo "<td style='color:black'><input type='number' name='dado[]' value='".$registro['requisitos_operacional']."'></td>";
                            echo "<td style='color:black'><input type='number' name='dado[]' value='".$registro['requisitos_seguranca']."'></td>";
                            echo "<td style='color:black'><input type='number' name='dado[]' value='".$registro['requisitos_preventivo']."'></td>";
                            echo "<td>
    
                            <center> 
                            <input class='butaon' type=submit value='Alterar' ></form></td></tr>";
                           
                            mysqli_close($conn);
                            
                     echo "</table>";  
                     echo "<br><form action='leitura_requisitos.php' method='post'>                        
                            <input class='butaon' type=submit value='Retornar'></form>";   
                     
                ?>
            </div>
        </center>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                        </div>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../view/vendor/jquery/jquery.min.js"></script>
    <script src="../../view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../view/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../view/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../view/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../view/js/demo/chart-area-demo.js"></script>
    <script src="../../view/js/demo/chart-pie-demo.js"></script>

</body>

</html>