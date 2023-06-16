<?php 
include "../../view/php/header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
include "../../model/connection.php"; //ESSA LINHA É RESPONSAVEL POR CONECTAR NO BANCO, VOCÊ NÃO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.
?>


<div class="tabela">
    <div class="titulo1">Histórico</div><br>
    Checklist Operacional  = 1<br>
    Checklist de Segurança = 2<br><br>

    <form method="POST" action="leitura_historico.php">
        <label for="data-inicial">Data Inicial:</label>
        <input type="date" id="data-inicial" name="data_inicial">

        <label for="data-final">Data Final:</label>
        <input type="date" id="data-final" name="data_final">

        <?php

            $sql = "SELECT turma.id_turma, turma.curso_id_curso, turma.turma_nome, turma.turma_obs, turma.turma_limite, turma.turma_quant, turma.turma_inicio, turma.turma_termino, turma.turma_cargaht, turma.turma_cargahs,
            curso.id_curso, curso.curso_nome, curso.curso_desc
            FROM turma, curso
            WHERE turma.curso_id_curso = curso.id_curso";

            $resultado = mysqli_query($conn, $sql) or die("Erro ao retornar dados.");

            echo '<label>Selecione a turma:</label>
                    <select name="turma_nome">
                        <option value=" " hidden disabled selected>Selecione</option>';

        while($registro = mysqli_fetch_array($resultado)){
            $id_turma = $registro['id_historico'];
            $turma_nome = $registro['turma_nome'];
            $curso_nome = $registro['curso_nome'];

            
            echo '<option value="'.$turma_nome.'">'.$turma_nome.'</option>';
        }

        ?>

                </select>

        <button type="submit">Filtrar</button>

        
        
    </form>

 

    <table id="tabela" class="display" style="color:black; text-shadow: 10%;">
        <thead>
            <tr>
                <th scope='col'>Nome:</th>
                <th scope='col'>Turma:</th>
                <th scope='col'>Curso:</th>
                <th scope='col'>Máquina:</th>
                <th scope='col'>NI da máquina:</th>
                <th scope='col'>Op / Seg:</th>
                <th scope='col'>Tópico:</th>
                <th scope='col'>Data</th>
                <th scope='col'>Hora</th>
                <th scope='col'>Status:</th>
            </tr>
        </thead>
        <tbody>
                            
<?php

    if (isset($_POST['data_inicial']) && isset($_POST['data_final']) && isset($_POST['turma_nome'])) {
        $data_inicial = $_POST['data_inicial'];
        $data_final = $_POST['data_final'];
        $turma_nome = $_POST['turma_nome'];

        $data_inicial_formatada = date('Y-m-d', strtotime($data_inicial));
        $data_final_formatada = date('Y-m-d', strtotime($data_final));

        $sql2 = "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
        tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
        setor.id_set, setor.id_unidade, setor.setor_descricao,
        unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado,
        requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
        tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc,
        historico.id_historico, historico.id_matricula, historico.id_maquina, historico.id_requisitos, historico.historico_data, historico.historico_hora, historico.historico_status,
        matricula.id_matricula, matricula.id_aluno, matricula.id_turma, matricula.matricula_ni,
        turma.id_turma, turma.curso_id_curso, turma.turma_nome,
        curso.id_curso, curso_nome,
        aluno.id_aluno, aluno.id_pessoa, aluno.aluno_email_educ,
        pessoa.id_pess, pessoa.pess_nome
        FROM maquina, tipo_maquina, setor, unidade, requisitos, tipos_requisitos, historico, matricula, turma, curso, aluno, pessoa
        WHERE maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina
        and maquina.id_setor = setor.id_set
        and setor.id_unidade = unidade.id_uni
        and requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
        and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina
        and historico.id_matricula = matricula.id_matricula
        and historico.id_maquina = maquina.id_maquina
        and historico.id_requisitos = requisitos.id_requisitos
        and matricula.id_aluno = aluno.id_aluno
        and matricula.id_turma = turma.id_turma
        and turma.curso_id_curso = curso.id_curso
        and aluno.id_pessoa = pessoa.id_pess
        and historico.historico_data between '$data_inicial_formatada' and '$data_final_formatada' 
        and turma.turma_nome = '$turma_nome' order by historico.historico_data desc";

            $resultado = mysqli_query($conn, $sql2) or die("Erro ao retornar dados.");

            echo $turma_nome;

    }else{

        $sql = "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
        tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
        setor.id_set, setor.id_unidade, setor.setor_descricao,
        unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado,
        requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
        tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc,
        historico.id_historico, historico.id_matricula, historico.id_maquina, historico.id_requisitos, historico.historico_data, historico.historico_hora, historico.historico_status,
        matricula.id_matricula, matricula.id_aluno, matricula.id_turma, matricula.matricula_ni,
        turma.id_turma, turma.curso_id_curso, turma.turma_nome,
        curso.id_curso, curso_nome,
        aluno.id_aluno, aluno.id_pessoa, aluno.aluno_email_educ,
        pessoa.id_pess, pessoa.pess_nome
        FROM maquina, tipo_maquina, setor, unidade, requisitos, tipos_requisitos, historico, matricula, turma, curso, aluno, pessoa
        WHERE maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina
        and maquina.id_setor = setor.id_set
        and setor.id_unidade = unidade.id_uni
        and requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
        and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina
        and historico.id_matricula = matricula.id_matricula
        and historico.id_maquina = maquina.id_maquina
        and historico.id_requisitos = requisitos.id_requisitos
        and matricula.id_aluno = aluno.id_aluno
        and matricula.id_turma = turma.id_turma
        and turma.curso_id_curso = curso.id_curso
        and aluno.id_pessoa = pessoa.id_pess 
        order by historico_data asc";

        $resultado = mysqli_query($conn, $sql) or die("Erro ao retornar dados.");

    }

    $filename = "Historico_data_8" . date('d-m-y'). ".xls";

    // monta cabeçalho 

    $excelData  = "<table>";
    $excelData .= "<tr> ";
    $excelData .= "<td> id_historico </td>";
    $excelData .='<td> pess_nome</td>';
    $excelData .='<td> turma_nome</td>';
    $excelData .='<td> curso_nome</td>';
    $excelData .='<td> tipo_maquina_nome</td>';
    $excelData .='<td> tipo_maquina_fabricante</td>';
    $excelData .='<td> tipo_maquina_modelo</td>';
    $excelData .='<td> maq_ni</td>';
    $excelData .='<td> tiposreq_desc</td>';
    $excelData .='<td> requisitos_operacional</td>';
    $excelData .='<td> requisitos_seguranca</td>';
    $excelData .='<td> historico_data</td>';
    $excelData .='<td> historico_hora</td>';
    $excelData .='<td> historico_hora</td>';
    $excelData .='<td> historico_status</td>';
    $excelData .= "</tr>";
    
    while($registro = mysqli_fetch_array($resultado)){
        $id_historico = $registro['id_historico'];
        $pess_nome = $registro['pess_nome'];
        $turma_nome = $registro['turma_nome'];
        $curso_nome = $registro['curso_nome'];
        $tipo_maquina_nome = $registro['tipo_maquina_nome'];
        $tipo_maquina_fabricante = $registro['tipo_maquina_fabricante'];
        $tipo_maquina_modelo = $registro['tipo_maquina_modelo'];
        $maq_ni = $registro['maq_ni'];
        $tiposreq_desc = $registro['tiposreq_desc'];
        $requisitos_operacional = $registro['requisitos_operacional'];
        $requisitos_seguranca = $registro['requisitos_seguranca'];
        $historico_data = $registro['historico_data'];
        $historico_hora = $registro['historico_hora'];
        $historico_status = $registro['historico_status'];

        $excelData .= "<tr>";
        $excelData .="<td>". $id_historico. "</td>";
        $excelData .="<td>". $pess_nome."</td>";
        $excelData .="<td>". $turma_nome."</td>";
        $excelData .="<td>". $curso_nome."</td>";
        $excelData .="<td>". $tipo_maquina_nome."</td>";
        $excelData .="<td>". $tipo_maquina_fabricante."</td>";
        $excelData .="<td>". $tipo_maquina_modelo."</td>";
        $excelData .="<td>". $maq_ni."</td>";
        $excelData .="<td>". $tiposreq_desc."</td>";
        $excelData .="<td>". $requisitos_operacional."</td>";
        $excelData .="<td>". $requisitos_seguranca."</td>";
        $excelData .="<td>". $historico_data."</td>";
        $excelData .="<td>". $historico_hora."</td>";
        $excelData .="<td>". $historico_status."</td>";
        $excelData .= "</tr>";

              
        echo "<tr>";
                    echo "<td style='color:black'>".$pess_nome."</td>";
                    echo "<td style='color:black'>".$turma_nome."</td>";
                    echo "<td style='color:black'>".$curso_nome."</td>";
                    echo "<td style='color:black'>".$tipo_maquina_fabricante.'/'.$tipo_maquina_modelo."</td>";
                    echo "<td style='color:black'>".$maq_ni."</td>";
                    echo "<td style='color:black'>".$requisitos_operacional." ".$requisitos_seguranca. "</td>";
                    echo "<td style='color:black'>".$tiposreq_desc."</td>";
                    echo "<td style='color:black'>".$historico_data."</td>";
                    echo "<td style='color:black'>".$historico_hora."</td>";
                    echo "<td style='color:black'>".$historico_status."</td>";
           echo "</tr>";
    }

    $excelData .= "</table>";
        echo "</tbody>
            </table>";


    mysqli_close($conn);
    include "../../view/php/footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END

?>

<form method="POST" action="excel_export.php">
        <input hidden name="excel" value="<?php echo $excelData ?>">
        <input hidden name="fileName" value="<?php echo $filename ?>">
        <button type="submit">Export Excel</button>
</form>

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