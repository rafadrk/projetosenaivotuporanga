<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>NR-12 | Login</title>
        <!-- <link rel='icon' type='imagem/png' href='borboleta.png' /> -->
        <link rel='stylesheet' href='../css/login.css'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
        <div class="container">
            <div class="screen2">
                    <form class="login" method="post" action="cadastro_manuprev.php">
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
                            
                            $sql = "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
                            tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
                            setor.id_set, setor.id_unidade, setor.setor_descricao,
                            unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado,
                            requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_topicos, requisitos.requisitos_subtopicos, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
                            tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc
                            FROM maquina, tipo_maquina, setor, unidade, requisitos, tipos_requisitos
                            WHERE maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                            and maquina.maq_ni = $ni_maquina
                            and maquina.id_setor = setor.id_set
                            and setor.id_unidade = unidade.id_uni
                            and requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
                            and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina";

                            $resultado = mysqli_query($conn, $sql) or die("Erro ao retornar dados.");

                            $registro = mysqli_fetch_array($resultado);
                                $id_tipo_maquina = $registro['id_tipo_maquina'];
                                $id_requisitos = $registro['id_requisitos'];
                                $tiposreq_desc = $registro['tiposreq_desc'];
                                $tipo_maquina_nome = $registro['tipo_maquina_nome'];
                                $tipo_maquina_fabricante = $registro['tipo_maquina_fabricante'];
                                $tipo_maquina_modelo = $registro['tipo_maquina_modelo'];
                                $requisitos_operacional = $registro['requisitos_operacional'];

                            echo '<fieldset class="campoteste"><center>
                            <h3> Seja bem vindo(a): <strong>' .$pess_nome.'</strong>, turma: '.$curso_nome.' - '.$turma_nome.' </h3>
                            </center></fieldset><br>';

                            echo '<fieldset class="campoteste"><center>
                            <h3> NI da máquina escolhida: '.$ni_maquina.', Tipo de máquina: '.$tipo_maquina_nome.'</h3>
                            <h3> Fabricante / Modelo: '.$tipo_maquina_fabricante.' / '.$tipo_maquina_modelo.'</h3>
                            </center></fieldset>';

                            echo '<h2>↪Checklist Manutenção Preventiva:</h2>';

                            $requisitos_preventivo = 3;

                            $sql2 = "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
                            tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
                            setor.id_set, setor.id_unidade, setor.setor_descricao,
                            unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado,
                            requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_topicos, requisitos.requisitos_subtopicos, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
                            tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc, tipos_requisitos.tiposreq_topicos, tipos_requisitos.tiposreq_subtopicos
                            FROM maquina, tipo_maquina, setor, unidade, requisitos, tipos_requisitos
                            WHERE maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                            and maquina.maq_ni = $ni_maquina
                            and maquina.id_setor = setor.id_set
                            and setor.id_unidade = unidade.id_uni
                            and requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
                            and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                            and requisitos.requisitos_ativo = 'ativo'
                            and requisitos.id_tipo_maquina = $id_tipo_maquina
                            and requisitos.requisitos_preventivo = $requisitos_preventivo";

                            $resultado = mysqli_query($conn, $sql2) or die("Erro ao retornar dados.");

                            $id=1;

                            while($registro = mysqli_fetch_array($resultado)){
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
                                

                                echo "<h2>$tiposreq_topicos</h2>";

                                echo '<h3>'.$tiposreq_subtopicos.'</h3>';
                                

                                echo '<div class="account-type">
                                      <input type="radio" id="radio'.$id_requisitos.'" value="Check" name="requisitos['.$id.']" required/>
                                      <label for="radio'.$id_requisitos.'" class="radio" id="radio'.$id_requisitos.'">'.$tiposreq_desc.'</label>
                                      <input type="hidden" id="leitura" value="Check" name="leitura['.$id.']"/>
                                      <input type="hidden" id="leitura" value="Not-Check" name="leitura['.$id.']"/>
                                      <input type="hidden" id="id_requisitos" value="'.$id_requisitos.'" name="id_requisitos['.$id.']"/>                      
                                      </div>';

                                    $id=$id+1;

                            }
                            
                        mysqli_close($conn); 
                        ?>

                        <br><hr><span style="color: red;">Se deseja prosseguir, por favor selecione todas as opções.</span><hr><br>
                        <center>
                        <button class="button login__submit">
                            <span class="button__text">Prosseguir</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>
                        </center>
		
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