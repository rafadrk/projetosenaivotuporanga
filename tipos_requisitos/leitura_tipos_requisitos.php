<?php
include ("../../view/php/header.php");
?>

        <center>
        
        <div class="tabela" style="width:100%;">
        <div class="titulo3">Tipos de requisitos</div>
        
    <table id="tabela" class="display" style="color:black; text-shadow: 10%;">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tópicos:</th>
                <th scope="col">Subtópicos:</th>
                <th scope="col">Descrição:</th>
                <th scope="col">Editar:</th>
                <th scope="col">Remover:</th>
            </tr>    
        </thead>
        <tbody>

<?php

include "../../model/connection.php";

    $sql = "SELECT * FROM tipos_requisitos";

    $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

    while( $registro = mysqli_fetch_array($resultado)){
        $tiposreq_topicos = $registro['tiposreq_topicos'];
        $tiposreq_subtopicos = $registro['tiposreq_subtopicos'];
        $id_tipos_requisitos = $registro['id_tipos_requisitos'];
        $tiposreq_desc = $registro['tiposreq_desc'];
        $tiposreq_obs = $registro['tiposreq_obs'];
        $tiposreq_sta_manu = $registro['tiposreq_sta_manu'];
        $tiposreq_moni_prof = $registro['tiposreq_moni_prof'];

        echo "<tr>";
        echo "<td scope='row' style='color:black'>".$id_tipos_requisitos."</td>";
        echo "<td style='color:black'>".$tiposreq_topicos."</td>";
        echo "<td style='color:black'>".$tiposreq_subtopicos."</td>";
        echo "<td style='color:black'>".$tiposreq_desc."</td>";
        echo "<td style='color:black'>
            <form action='alteracao_tipos_requisitos2.php' method='post'>
            <input type='hidden' name='dados' value=".$id_tipos_requisitos.">
            <input class='butaon' type=submit value='↻ Editar'>
            </form></td>";
    
        echo"<td>
            <form action='remocao_tipos_requisitos.php' method='post'>
            <input type='hidden' name='deletar' value=".$id_tipos_requisitos.">
            <input class='butaon' type=submit value='☓ Remover'>
            </form>
            </td>";
    
        echo "</tr>";

    }

    echo"</tbody>
    </table>";
        
    mysqli_close($conn);
?>

                             
</table>
                            </div>
                            <br><br><br>
                            <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/tipos_requisitos/cadastro_tipos_requisitos.pdf" download="../../arquivos/Manual/unidade/cadastro_tipos_requisitos.pdf">
                                <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Precisa de ajuda para cadastrar? Clique aqui!
                            </a>
                            <br><br>
                            <a style="color:#000; text-transform: uppercase;letter-spacing: 2px;font-weight: bold;" href="../../arquivos/Manual/tipos_requisitos/alteracao_tipos_requisitos.pdf" download="../../arquivos/Manual/unidade/alteracao_tipos_requisitos.pdf">
                                <img src="/nr12/view/img/video-tutorials.png" style="width: 3%;">Cadastrou algo errado e não sabe como alterar? Clique aqui e aprenda!
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