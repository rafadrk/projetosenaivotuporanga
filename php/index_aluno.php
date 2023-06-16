<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>NR-12 | Menu Principal</title>
        <!-- <link rel='icon' type='imagem/png' href='borboleta.png' /> -->
        <link rel='stylesheet' href='../css/login.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="container">
            <div class="screen2">
                <form class="login">
                        <center><img src="../img/senai.png" width="80%"></center>
                        <div class="login__field">

                        <?php
                        include "../../model/connection.php";

                        session_start();
                        if((!isset($_SESSION['ni']) == true) and (!isset($_SESSION['ni_maquina']) == true)){
                            header('Location : ../../view/php/login.php');
                        }

                            $ni_maquina = $_SESSION['ni_maquina'];
                            $ni = $_SESSION['ni'];
                            $pess_nome = $_SESSION['pess_nome'];
                            $curso_nome = $_SESSION['curso_nome'];
                            $turma_nome = $_SESSION['turma_nome'];
                            $id_pessoa = $_SESSION['id_pessoa'];
                            $id_tipo_maquina = $_SESSION['id_tipo_maquina'];
                            $tipo_maquina_nome = $_SESSION['tipo_maquina_nome'];
                            $tipo_maquina_fabricante = $_SESSION['tipo_maquina_fabricante'];
                            $tipo_maquina_modelo = $_SESSION['tipo_maquina_modelo'];

                            echo '<fieldset class="campoteste"><center>
                            <h3> Seja bem vindo(a): <strong>' .$pess_nome.'</strong>. Turma: '.$curso_nome.' - '.$turma_nome.' </h3>
                            </center></fieldset><br>';
                            
                            echo '<fieldset class="campoteste"><center>
                            <h3> NI da máquina escolhida: '.$ni_maquina.', Tipo de máquina: '.$tipo_maquina_nome.'</h3>
                            <h3> Fabricante / Modelo: '.$tipo_maquina_fabricante.' / '.$tipo_maquina_modelo.'</h3>
                            </center></fieldset><br>';

                            $sql = "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
                                    arquivos_apoio.id_arquivos_apoio, arquivos_apoio.id_maquina, arquivos_apoio.arquiv_descric, arquivos_apoio.arquiv_grav, arquivos_apoio.arquiv_versao
                                    FROM maquina, arquivos_apoio
                                    where maquina.id_maquina = arquivos_apoio.id_maquina
                                    and maquina.maq_ni = $ni_maquina";

                            $resultado = mysqli_query($conn, $sql) or die("<h3><center><u>Não Há registros disponíveis</h3></center></u>");

                            echo "<fieldset class='campoteste'><center>
                                <h3> Arquivos de Apoio: </h3>
                                <table>";

                            while ($registro = mysqli_fetch_array($resultado)) {
                                $id_arquivos = $registro['id_arquivos_apoio'];
                                $arquiv_descri = $registro['arquiv_descric'];
                                $arquiv_data = $registro['arquiv_grav'];
                                $arquiv_apoio = $registro['arquiv_versao'];
                                $arquiv_data = implode("/", array_reverse(explode("-", $arquiv_data)));
                    
                                echo "<tr><td style='color:black'>" . $maquina . "</td>";
                                echo "<td style='color:black'>" . $arquiv_descri . " - </td>";
                                echo "<td style='color:black'>" . $arquiv_data . "</td>";
                                echo "<td>
                                    <button style='color:black;' class='butaon'><a href='/nr12/view/docs/arquivos_apoio/$arquiv_apoio' download='$arquiv_apoio'>Baixar</a></button>
                                </td></tr>";

                            }

                            echo "</table></center><br></fieldset>";

                        ?>
                </form>
                        
                        <form method="post" action="checklist_seguranca.php">
                        <button class="button login__submit">
                            <span class="button__text">Checklist de Segurança</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                        </form>

                        <form method="post" action="checklist_operacional.php">
                        <button class="button login__submit">
                            <span class="button__text">Checklist Operacional</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                        </form>
            </div>
        </div>
    </body>
    <script>Array.prototype.forEach.call(document.querySelectorAll('[type=radio]'), function(radio) {
            radio.addEventListener('click', function() {
                var self = this;
                // pega os radio com o mesmo nome menos o próprio e grava o status desmarcado
                Array.prototype.filter.call(document.getElementsByName(this.name), function(filterEl) {
                return self !== filterEl;
                }).forEach(function(otherEl) {
                delete otherEl.dataset.check
                })

                // grava o status baseado no estado anterior
                if (this.dataset.hasOwnProperty('check')) {
                this.checked = false
                delete this.dataset.check
                } else {
                this.dataset.check = ''
                }
            }, false)
            })
    </script>
</html>