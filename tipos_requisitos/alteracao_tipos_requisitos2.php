<?php
include("../../view/php/header.php");
?>

<center>

    <div class="tabela" style="width:100%;">
        <div class="titulo2">Alteração tipos requisitos</div>
        <table class="table table-striped table-hover" style="color:black; text-shadow: 10%;">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tópicos:</th>
                    <th scope="col">Sub-tópicos:</th>
                    <th scope="col">Descrição:</th>
                    <th scope="col">Alterar</th>
                </tr>
            </thead>
            <br>
            <?php
            include "../../model/connection.php";

            echo "<form action='alteracao_tipos_requisitos.php' method='post'>";

            $chave = $_POST["dados"];

            // Verifica escolha de campos

            $sql1 = "SELECT * FROM tipos_requisitos WHERE id_tipos_requisitos = $chave";

            $resultado = mysqli_query($conn, $sql1) or die("Erro ao retornar dados");

            $registro = mysqli_fetch_array($resultado);

            echo "<tr>";

            $tiposreq_topicos = $registro['tiposreq_topicos'];
            $tiposreq_subtopicos = $registro['tiposreq_subtopicos'];
            $id_tipos_requisitos = $registro['id_tipos_requisitos'];
            $tiposreq_desc = $registro['tiposreq_desc'];
            $tiposreq_obs = $registro['tiposreq_obs'];
            $tiposreq_sta_manu = $registro['tiposreq_sta_manu'];
            $tiposreq_moni_prof = $registro['tiposreq_moni_prof'];

            echo "<tr>";
            echo "<td style='color:black'>".$registro['id_tipos_requisitos']."</td>";
            echo "<td style='color:black'>".$registro['tiposreq_topicos']."</td>";
            echo "<td style='color:black'>".$registro['tiposreq_subtopicos']."</td>";
            echo "<td style='color:black'>".$registro['tiposreq_desc']."</td>";
            echo "<td></td><td></td></tr>";

            echo "<td style='color:black'><input type='text' style='width: 40px;' value=" . $registro['id_tipos_requisitos'] . " disabled></td>";
            echo "<input type='hidden' style='width: 40px;' name='dados[]' value=" . $registro['id_tipos_requisitos'] . ">";
            echo "<td style='color:black'><input type='text' name='dados[]' value='" . $registro['tiposreq_topicos'] . "'></td>";
            echo "<td style='color:black'><input type='text' style='width:300px;' name='dados[]' value='" . $registro['tiposreq_subtopicos'] . "'></td>";
            echo "<td style='color:black'><input type='text' style='width:600px;' name='dados[]' value='" . $registro['tiposreq_desc'] . "'></td>";
            echo "<td style='color:black'> <input class='butaon' type=submit value='Alterar'></td>";

            echo "<td></tr><tr></table>
    
                            
                            
                            </form>";

            echo "<br><form action='leitura_tipos_requisitos.php' method='post'>                        
                            <input class='butaon' type=submit value='Retornar'></form>";



            mysqli_close($conn);

            echo "</table>";
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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