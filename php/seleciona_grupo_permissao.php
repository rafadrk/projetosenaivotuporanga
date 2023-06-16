<?php
include ("../../view/php/header.php");
?>

        <center>
            <div class="tabela" style="width:90%;">
                        <table class="table table-striped table-hover" style="color:black; text-shadow: 10%;">
                        <thead>
                            <tr>
                                <th scope="col">ID: </th> <th scope="col">Descrição: </th>
                                
                            </tr>
                        </thead>
                    <br>
 

                                <?php

                                    include "../../model/connection.php";

                                           /* $sql = "SELECT pessoa.id_pess, requisitos.id_requisitos, requisitos.id_tipo_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_data_cadas, requisitos.requisitos_ativo, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
                                                    tipos_requisitos.id_tipo_maquina, tipos_requisitos.tiposreq_desc, tiposreq_obs, tiposreq_sta_manu, tiposreq_moni_prof,
                                                    tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maq_fabricante, tipo_maquina.tipo_maq_modelo, tipo_maquina.observacao
                                                    FROM requisitos, tipo_requisitos, tipo_maquina
                                                    WHERE setor.id_unidade = unidade.id_uni
                                                    and requisitos.id_tipo_requisitos = tipo_requisitos.id_tipo_requisitos
                                                    and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina"; */

                                        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

                                        while( $registro = mysqli_fetch_array($resultado)){
                                            $id_grupo_permissao = $registro['id_grupo_permissao'];
                                            $grupopermi_descri = $registro['grupopermi_descri'];
                                           
                                        

                                            echo "<tr>";
                                            echo "<th scope='row' style='color:black'>".$id_grupo_permissao."</td>";
                                            echo "<td style='color:black'>".$grupopermi_descri."</td>";
                                           
                                            

                                        }
                                            
                                        echo "</select></center>";
                                ?>
                            </div>
                        </center>
                        <center>
                            <form action='../../view/php/grupo_permissao.php' method='post'>
                            <input type='hidden' name='deletar' value=".$id_grupo_permissao.">
                            <input type=submit value='Voltar para o menu inicial'>
                            </form>
                        </center>
                        <br>"

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