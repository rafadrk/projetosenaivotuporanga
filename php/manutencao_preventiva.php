<?php
include "header.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>
<link rel="icon" type="image/png" href="https://senaivotuporanga.com.br/nr12/view/img/iconepag.png"/>

            <center>
            <div class="container">
                <div class="screen2">
                    <form class="login" method="post" action="../../controller/colaborador/cadastro_colaborador.php"> 
                        <br>
                        <div class="login__field">
                            <?php
                            include "../../model/connection.php"; //ESSA LINHA É RESPONSAVEL POR CONECTAR NO BANCO, VOCÊ NÃO PRECISA CONECTAR QUALQUER DUVIDAR CHAMAR MATHEUS.

                            echo '<h2>↪Checklist Manutenção Preventiva:</h2>';

                            $sql = "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
                            tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
                            setor.id_set, setor.id_unidade, setor.setor_descricao,
                            unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado,
                            requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
                            tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc, tipos_requisitos.tiposreq_obs, tipos_requisitos.tiposreq_topicos, tiposreq_subtopicos
                            FROM maquina, tipo_maquina, setor, unidade, requisitos, tipos_requisitos
                            WHERE maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                            and maquina.id_setor = setor.id_set
                            and setor.id_unidade = unidade.id_uni
                            and requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
                            and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina";

                            $resultado = mysqli_query($conn, $sql) or die("Erro ao retornar dados.");

                            $registro = mysqli_fetch_array($resultado);
                                $id_tipo_requisitos = $registro['id_tipos_requisitos'];
                                $id_tipo_maquina = $registro['id_tipo_maquina'];
                                $id_requisitos = $registro['id_requisitos'];
                                $tiposreq_desc = $registro['tiposreq_desc'];
                                $tipo_maquina_nome = $registro['tipo_maquina_nome'];
                                $tipo_maquina_fabricante = $registro['tipo_maquina_fabricante'];
                                $tipo_maquina_modelo = $registro['tipo_maquina_modelo'];
                                $requisitos_operacional = $registro['requisitos_operacional'];

                            $requisitos_preventivo = 3;

                            $sql = "SELECT maquina.id_maquina, maquina.id_tipo_maquina, maquina.id_setor, maquina.maq_ni,
                            tipo_maquina.id_tipo_maquina, tipo_maquina.tipo_maquina_nome, tipo_maquina.tipo_maquina_fabricante, tipo_maquina.tipo_maquina_modelo,
                            setor.id_set, setor.id_unidade, setor.setor_descricao,
                            unidade.id_uni, unidade.unidade_descricao, unidade.unidade_cidade, unidade.unidade_estado,
                            requisitos.id_requisitos, requisitos.id_tipos_requisitos, requisitos.id_tipo_maquina, requisitos.requisitos_operacional, requisitos.requisitos_seguranca, requisitos.requisitos_preventivo,
                            tipos_requisitos.id_tipos_requisitos, tipos_requisitos.tiposreq_desc, tipos_requisitos.tiposreq_obs, tipos_requisitos.tiposreq_topicos, tiposreq_subtopicos
                            FROM maquina, tipo_maquina, setor, unidade, requisitos, tipos_requisitos
                            WHERE maquina.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                            and maquina.id_setor = setor.id_set
                            and setor.id_unidade = unidade.id_uni
                            and requisitos.id_tipos_requisitos = tipos_requisitos.id_tipos_requisitos
                            and requisitos.id_tipo_maquina = tipo_maquina.id_tipo_maquina
                            and requisitos.requisitos_preventivo = $requisitos_preventivo";

                            $resultado = mysqli_query($conn, $sql) or die("Erro ao retornar dados.");

                            $id=1;

                            while($registro = mysqli_fetch_array($resultado)){
                                $id_tipo_maquina = $registro['id_tipo_maquina'];
                                $id_requisitos = $registro['id_requisitos'];
                                $id_tipos_requisitos = $registro['id_tipos_requisitos'];
                                $tiposreq_desc = $registro['tiposreq_desc'];
                                $tipo_maquina_nome = $registro['tipo_maquina_nome'];
                                $tipo_maquina_fabricante = $registro['tipo_maquina_fabricante'];
                                $tipo_maquina_modelo = $registro['tipo_maquina_modelo'];
                                $requisitos_preventivo = $registro['requisitos_preventivo'];
                                $tiposreq_topicos = $registro['tiposreq_topicos'];
                                $tiposreq_subtopicos = $registro['tiposreq_subtopicos'];

                                echo "<h2>$tiposreq_topicos</h2>";

                                echo '<h3>'.$tiposreq_subtopicos.'</h3>';

                                echo '<div class="account-type">
                                    <input type="radio" id="radio'.$id_tipos_requisitos.'" value="Check" name="requisitos['.$id.']"/>
                                    <label for="radio'.$id_tipos_requisitos.'" class="radio" id="radio'.$id_tipos_requisitos.'">'.$tiposreq_desc.'</label>
                                    <input type="hidden" id="leitura" value="Check" name="leitura['.$id.']"/>
                                    <input type="hidden" id="leitura" value="Not-Check" name="leitura['.$id.']"/> 
                                    <input type="hidden" id="id_requisitos" value="'.$id_requisitos.'" name="id_requisitos['.$id.']"/>              
                                    </div>';
                                    
                                    $id=$id+1;

                            }
                            
                            mysqli_close($conn); 
                            ?>
                        </div>
            
                        <button class="button login__submit">
                            <span class="button__text">Prosseguir</span>
                            <i class="button__icon fas fa-chevron-right"></i>
                        </button>				
                    </form>
                </div>
            </div>
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

<?php
include "footer.php"; //LINHA RESPOSNAVEL POR PUXAR FRONT-END
?>
