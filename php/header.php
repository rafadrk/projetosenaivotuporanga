<html lang="pt-br">
<head>
    <link rel="icon" type="image/png" href="https://senaivotuporanga.com.br/nr12/view/img/iconepag.png"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SENAI Votuporanga</title>

    <!-- Custom fonts for this template-->
    <link href="https://senaivotuporanga.com.br/nr12/view/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://senaivotuporanga.com.br/nr12/view/css/datatables.min.css" rel="stylesheet"/>
    <link href="https://senaivotuporanga.com.br/nr12/view/css/datatables.css" rel="stylesheet"/>
    <!-- Custom styles for this template-->
    <link href="https://senaivotuporanga.com.br/nr12/view/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://senaivotuporanga.com.br/nr12/view/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://senaivotuporanga.com.br/nr12/view/img/favicon.png">

    <!-- CSS para os ícones do bootstrap -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-sidebar-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="https://senaivotuporanga.com.br/nr12/view/php/index.php">
                <img style="width: 100%;" src="https://senaivotuporanga.com.br/nr12/view/img/senai.png">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="https://senaivotuporanga.com.br/nr12/view/php/index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Menu Principal</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" style="margin-bottom: -2px;">

            <!-- Heading -->

            <!-- Nav Item - Pages Collapse Menu -->

    <?php

        include "../../model/connection.php";

        session_start();
        if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
            header('Location : ../../view/php/loginprofessor.php');
        }
        $email = $_SESSION['email'];
        $senha = $_SESSION['senha'];
        $id = $_SESSION['id_pessoa'];
        $nome = $_SESSION['pess_nome'];
        $array1 = array();
        $array2 = array();

        $sql = "SELECT login.id_login, login.id_pessoa,
                liberacao.id_liberacao, liberacao.id_login, liberacao.id_grupo_permissao,
                validacao.id_modulos, validacao.id_grupo_permissao, validacao.validacao_permissao_rwx,
                modulos.id_modulos, modulos.modulos_descricao , modulos.modulos_endereco, modulos.modulos_endereco_leitura
                FROM pessoa, login, liberacao, validacao, modulos
                WHERE pessoa.id_pess = '$id'
                and  login.id_pessoa = pessoa.id_pess
                and login.id_login = liberacao.id_login
                and validacao.id_grupo_permissao = liberacao.id_grupo_permissao
                and validacao.id_modulos = modulos.id_modulos";

        $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar os dados");

        while( $registro = mysqli_fetch_array($resultado)){

                $id_modulos = $registro['id_modulos'];
                $modulos_descricao = $registro['modulos_descricao'];
                $modulos_endereco = $registro['modulos_endereco'];
                $modulos_endereco_leitura = $registro['modulos_endereco_leitura'];
                $tiposreq_moni_prof = $registro['tiposreq_moni_prof'];
                $validacao_permissao_rwx = $registro['validacao_permissao_rwx'];
    
                $_SESSION['permissao'] = $validacao_permissao_rwx;
    
                array_push($array1, '
                <li class="nav-item">
                    <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapse'.$id_modulos.'"
                        aria-expanded="true" aria-controls="collapse'.$id_modulos.'">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>'.$modulos_descricao.'</span>
                    </a>
                    <div id="collapse'.$id_modulos.'" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-black py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Tópicos:</h6>
                                <a class="collapse-item" href="https://senaivotuporanga.com.br/'.$modulos_endereco.'">Cadastro</a>
                                <a class="collapse-item" href="https://senaivotuporanga.com.br/'.$modulos_endereco_leitura.'">Consulta / Alteração</a>
                        </div>
                    </div>
                 </li>');
    
                 array_push($array2, $modulos_descricao);

                echo"";

        }

        $cont = 0;
        while($cont != sizeof($array1)){
            if ($array2[$cont] == "Tipo de Máquina"){
                echo $array1[$cont];
                break;

            }
            $cont++;
        }

        $cont = 0;
        while($cont != sizeof($array1)){
            if ($array2[$cont] == "Máquinas"){
                echo $array1[$cont];
                break;

            }
            $cont++;
        }

        $cont = 0;
        while($cont != sizeof($array1)){
            if ($array2[$cont] == "Requisitos"){
                echo $array1[$cont];
                break;

            }
            $cont++;
        }

        $cont = 0;
        while($cont != sizeof($array1)){
            if ($array2[$cont] == "Pessoa"){
                echo $array1[$cont];
                break;

            }
            $cont++;
        }

        $cont = 0;
        while($cont != sizeof($array1)){
            if ($array2[$cont] == "Alunos"){
                echo $array1[$cont];
                break;

            }
            $cont++;
        }

        $cont = 0;
        while($cont != sizeof($array1)){
            if ($array2[$cont] == "Curso"){
                echo $array1[$cont];
                break;

            }
            $cont++;
        }

        $cont = 0;
        while($cont != sizeof($array1)){
            if ($array2[$cont] == "Turma"){
                echo $array1[$cont];
                break;

            }
            $cont++;
        }

        $cont = 0;
        while($cont != sizeof($array1)){

            if ($array2[$cont] != "Turma" && $array2[$cont] != "Curso" && $array2[$cont] != "Alunos" && $array2[$cont] != "Pessoa" && $array2[$cont] != "Requisitos" && $array2[$cont] != "Máquinas" && $array2[$cont] != "Tipo de Máquina"){
                echo $array1[$cont];
            }
            
            //unset($array1[$cont]);
            $cont++;
        }
            
        mysqli_close($conn);

    ?>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" style="margin-bottom: 15px;">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-black topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->

                        <?php
                        

                            echo   "<li class='nav-item dropdown no-arrow'>
                                    <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                        <span class='mr-2 d-none d-lg-inline text-white-600 small'>Olá, $nome<b></b></span>
                                        <img class='img-profile rounded-circle' src='https://senaivotuporanga.com.br/nr12/view/img/undraw_profile.svg'>
                                    </a>
                                <div class='dropdown-menu dropdown-menu-right shadow animated--grow-in' aria-labelledby='userDropdown'>
                                <center>
                                    <a class='btn btn-primary' href='https://senaivotuporanga.com.br/nr12/view/php/loginprofessor.php'>
                                        <i class='fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400'></i>
                                        Logout
                                    </a>
                                </center>
                                </div>
                            </li>";
                        ?>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->


                <span class='screen__background__shape screen__background__shape4'></span>
                <span class='screen__background__shape screen__background__shape3'></span>		
                <span class='screen__background__shape screen__background__shape2'></span>
                <span class='screen__background__shape screen__background__shape1'></span>
              
                <span class='screen__background__shape screen__background__shape8'></span>
                <span class='screen__background__shape screen__background__shape6'></span>
                <span class='screen__background__shape screen__background__shape5'></span>

                <br>