<?php
include ("../../view/php/header.php");
?>

        <center>
            <div class="tabela">
            <div class="titulo1">Requisitos</div><br>
                        <table id="tabela" class="display" style="color:black; text-shadow: 10%;">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Tópico de Requisitos</th>
                                <th scope="col">Sub-Tópico de Requisitos</th>
                                <th scope="col">Tipo de Requisitos</th>
                                <th scope="col">Tipo de Maquina</th>
                                <th scope="col">Tipo de Fabricante</th>
                                <th scope="col">Tipo de Modelo</th>
                                <th scope="col">Data De Cadastro</th> 
                                <th scope="col">Ativo</th>
                                <th scope="col">Operacional</th>
                                <th scope="col">Segurança</th>
                                <th scope="col">Preventivo</th>
                                <th scope="col">Editar:</th>
                                <th scope="col">Remover:</th>
                            </tr>
                        </thead>
                        <tbody>

                <?php

                    include "../../model/connection.php";

                        $sql =  "SELECT tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
                        requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_ativo, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
                        tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc, tipos_requisitos.tiposreq_topicos, tipos_requisitos.tiposreq_subtopicos
                        FROM tipo_maquina, requisitos, tipos_requisitos
                        where requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
                        and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                        order by requisitos.id_requisitos asc";

                    $resultado = mysqli_query($conn, $sql) or die("Erro ao retornar");

                    while($registro = mysqli_fetch_array($resultado)){

                        $id_requisitos = $registro['id_requisitos'];
                        $id_tipos_requsitos = $registro['id_tipos_requisitos'];
                        $tiposreq_topicos = $registro['tiposreq_topicos'];
                        $tiposreq_subtopicos = $registro['tiposreq_subtopicos'];
                        $tiposreq_desc = $registro['tiposreq_desc'];
                        $tipo_maquina_nome = $registro['tipo_maquina_nome'];
                        $tipo_maquina_fabricante = $registro['tipo_maquina_fabricante'];
                        $tipo_maquina_modelo = $registro['tipo_maquina_modelo'];
                        $id_tipo_maquina = $registro['id_tipo_maquina'];
                        $requisitos_data_cadas = $registro['requisitos_data_cadas'];
                        $requisitos_ativo = $registro['requisitos_ativo'];
                        $requisitos_operacional = $registro['requisitos_operacional'];
                        $requisitos_seguranca = $registro['requisitos_seguranca'];
                        $requisitos_preventivo = $registro['requisitos_preventivo'];

                        echo "<tr>";
                        echo "<td scope='row' style='color:black'>".$id_requisitos."</td>";
                        echo "<td style='color:black'>".$tiposreq_topicos."</td>";
                        echo "<td style='color:black'>".$tiposreq_subtopicos."</td>";
                        echo "<td style='color:black'>".$tiposreq_desc."</td>";
                        echo "<td style='color:black'>".$tipo_maquina_nome."</td>";
                        echo "<td style='color:black'>".$tipo_maquina_fabricante."</td>";
                        echo "<td style='color:black'>".$tipo_maquina_modelo."</td>";
                        echo "<td style='color:black'>".$requisitos_data_cadas."</td>";
                        echo "<td style='color:black'>".$requisitos_ativo."</td>";
                        echo "<td style='color:black'>".$requisitos_operacional."</td>";
                        echo "<td style='color:black'>".$requisitos_seguranca."</td>";
                        echo "<td style='color:black'>".$requisitos_preventivo."</td>";
                        echo "<td style='color:black'>
                            <form action='alteracao_requisitos2.php' method='post'>
                            <center>
                            <input type='hidden' name='dados' value=".$id_requisitos.">
                            <input class='butaon' type=submit value='Editar'>
                            </form>
                            </td>";

                            switch ($requisitos_ativo) {
                                case 'ativo':
                                        echo "<td style='color:black'>
                                            <form action='remocao_requisitos.php' method='post'>
                                            <center>
                                            <input type='hidden' name='dados' value=".$id_requisitos.">
                                            <input class='butaon' type=submit value='Desabilitar'>
                                            </form>
                                            </td>";
                                    break;

                                case 'inativo':
                                        echo "<td style='color:black'>
                                            <form action='habilitar_requisitos.php' method='post'>
                                            <center>
                                            <input type='hidden' name='dados' value=".$id_requisitos.">
                                            <input class='butaon' type=submit value='Habilitar'>
                                            </form>
                                            </td>";
                                    break;
                            }
                    
                        echo "</tr>";
                    }

                    echo "</tbody>
                         </table>";

                    mysqli_close($conn);
                ?>
            </div>
            <br><br><br>
                            <a style="color:#ff0000 ; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/tipo_maquina/cadastro_tipo_maquina.pdf" download="../../arquivos/Manual/tipo_maquina/cadastro_tipo_maquina.pdf">
                                <img src="/nr12/view/img/sinal-de-aviso.png" style="width: 3%;">*Importante Lembrar que caso você não tenha cadastrado o tipo de máquina será impossível prosseguir
                            </a>
                            <br><br>
                            <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/requisitos/cadastro_requisitos.pdf" download="../../arquivos/Manual/requisitos/cadastro_requisitos.pdf">
                                <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                            </a>
                            <br><br>
                            <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/requisitos/alteracao_requisitos.pdf" download="../../arquivos/Manual/requisitos/alteracao_requisitos.pdf">
                                <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
                            </a>
                            <br><br>
                            <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/requisitos/habilita_desabilita_requisitos.pdf" download="../../arquivos/Manual/requisitos/habilita_desabilita_requisitos.pdf">
                                <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa desabilitar algum certo requisito?? aqui está um tutorial
                            </a>

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