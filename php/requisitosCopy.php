<?php
include ("../../view/php/header.php");
?>

        <form class="login" method="post" action="../../controller/requisitos/cadastro_requisitos.php"> 
        <link rel="icon" type="image/png" href="https://senaivotuporanga.com.br/nr12/view/img/iconepag.png"/>


            <div class="titulo3">Cadastro de requisitos</div>
            <br>

                        <?php
                            include "../../model/connection.php";

                            $requisitos_operacional = '1';
                            $requisitos_seguranca = '2';

                            $sql = "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
                                    tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
                                    setor.id_set, setor.id_unidade, setor.setor_descricao,
                                    unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado,
                                    requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
                                    tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc, tiposreq_topicos, tiposreq_subtopicos
                                    FROM maquina, tipo_maquina, setor, unidade, requisitos, tipos_requisitos
                                    WHERE maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                                    and maquina.id_setor = setor.id_set
                                    and setor.id_unidade = unidade.id_uni
                                    and requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
                                    and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                                    order by requisitos.requisitos_operacional and requisitos_seguranca and requisitos_preventivo asc ";             

                            $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");
                        ?>
                        <?php
                            include "../../model/connection.php";

                            echo "<span style='font-size:15px; margin: bottom -10px;'>Escolha o tipo De Máquina:</span>";

                            echo "<div class='inputDate'>
                                <select name='id_tipo_maquina' class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' style='width:30%;' style='margin:30px;'>";

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

                                echo "<span><center><option value='".$id_tipo_maquina."'>$tipo_maquina_nome - $tipo_maquina_fabricante - $tipo_maquina_modelo - $observacao</option></center></span>";

                            }
                                
                            echo "</select>";

                        ?>
                        
                        <span style='font-size:15px;' style='margin:bottom -10px;'>Data De Cadastro:</span><input type="date" name="requisitos_data_cadas" required="required">

                        <br><br>

                        <label style="font-size: 20px;">Check Operacional(1 ) :<input type="checkbox" value="1" name="check1" class="login__input"></label>

                        <label style="font-size: 20px;">Check Segurança(2) :<input type="checkbox" value="2" name="check2" class="login__input"></label>

                        <label style="font-size: 20px;">Check Preventivo(3) :<input type="checkbox" value="3" name="check3" class="login__input"></label>

                        <br>

                        <center>
        
        <div class="tabela">
<div style="overflow: auto; height: 440px">
    <table class="table table-hover" style="color:black; text-shadow: 10%; font-size:15px;">
        <thead>
            <tr>
                <th scope="col"> </th>
                <th scope="col">ID</th>
                <th scope="col">Tópicos:</th>
                <th scope="col">Subtópicos:</th>
                <th scope="col">Descrição:</th>
            </tr>    
        </thead>
        <tbody>

<?php

include "../../model/connection.php";

    $sql = "SELECT * FROM tipos_requisitos";

    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

    $id = 1;

    while( $registro = mysqli_fetch_array($resultado)){
        $tiposreq_topicos = $registro['tiposreq_topicos'];
        $tiposreq_subtopicos = $registro['tiposreq_subtopicos'];
        $id_tipos_requisitos = $registro['id_tipos_requisitos'];
        $tiposreq_desc = $registro['tiposreq_desc'];
        $tiposreq_obs = $registro['tiposreq_obs'];
        $tiposreq_sta_manu = $registro['tiposreq_sta_manu'];
        $tiposreq_moni_prof = $registro['tiposreq_moni_prof'];

        echo "<tr>";
        echo '<td scope="row" style="color:black"><input type="checkbox" value="'.$id_tipos_requisitos.'" name="id_tipos_requisitos[]" class="login__input"></td>';
        echo "<td scope='row' style='color:black'>".$id_tipos_requisitos."</td>";
        echo "<td style='color:black'>".$tiposreq_topicos."</td>";
        echo "<td style='color:black'>".$tiposreq_subtopicos."</td>";
        echo "<td style='color:black'>".$tiposreq_desc."</td>";
    
        echo "</tr>";

        $id = $id+1;

    }

    echo"</tbody>
    </table>";
        
    mysqli_close($conn);
?>

                             
    </table>
</div>
                            </div>

                            <button class="enter">Salvar</button>
                            <br>
                        </center>
                        <br>

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
                        <span aria-hidden="true">Ã—</span>
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

    <script src="../../view/js/datatables.min.js"></script>
    <script src="../../view/js/datatables.js"></script>

    <script>

    $(document).ready( function () {
        $('#tabela').DataTable({
            "language" : {
                "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
            }
        });
        
    } );

    </script>

</body>

</html>