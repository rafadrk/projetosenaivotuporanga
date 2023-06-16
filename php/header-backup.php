<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>SENAI - Portal Checklist</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/css/style.css">
    <link rel="stylesheet" href="../../view/bootstrap/css/bootstrap.min.css">
</head>
<body>

  <div class='all'>
    <div class='admin-header'>
      <div class='header-text'>
        <img src="../../view/images/senai.png" style = "width:9%; margin: 10px 0px 0px 35px ">
        <div class='header-greet'>
          <br><span>Olá Roberto!</span> <!--puxar do banco o nome do colaborador-->
          <a href='' class='logout-btn'><img src="../../view/images/pessoa.png" class="fa" width="14px"></a>
        </div>
      </div>
    </div>

      <span class='screen__background__shape screen__background__shape4'></span>
      <span class='screen__background__shape screen__background__shape3'></span>		
      <span class='screen__background__shape screen__background__shape2'></span>
      <span class='screen__background__shape screen__background__shape1'></span>
    
      <span class='screen__background__shape screen__background__shape8'></span>
      <span class='screen__background__shape screen__background__shape6'></span>
      <span class='screen__background__shape screen__background__shape5'></span>

    <div class='admin-sidebar'>

      <span onclick="size4()">
        <li id='all-nav4' onclick="myFunction4()" style="background: #361d1d">
          <a class='dropdown-btn'><img src="../../view/images/engrenagem.png" class="fa" width="20px"> Máquina </a> <i class="fa fa-angle-down" aria-hidden="true"></i>
          <ul id='nav4' class='fifth-nav-ul'>
            <li class='nav-items'>
              <a href='c-maquina.html'>Cadastro</a><br><br>
              <a href='#'>Consulta e Alteração</a>
            </li><br><br>
          </ul>
        </li>
      </span>

      <span onclick="size3()">
        <li id='all-nav3' onclick="myFunction3()" >
          <a class='dropdown-btn'><img src="https://senaivotuporanga.com.br/nr12/view/images/alunos.png" class="fa" width="20px"> Aluno </a> <i class="fa fa-angle-down" aria-hidden="true"></i>
          <ul id='nav3' class='fourth-nav-ul'>
            <li class='nav-items'>
              <a href='c-aluno.html'>Cadastro</a><br><br>
              <a href='#'>Consulta e Alteração</a>
            </li><br>
          </ul>
        </li>
      </span>
    
      <span onclick="size2()">
      <li id='all-nav2' onclick="myFunction2()">
        <a href='#' class='dropdown-btn'><img src="https://senaivotuporanga.com.br/nr12/view/images/classroom.png" class="fa"width="20px"../images/h="20px"> Turma </a> <i class="fa fa-angle-down" aria-hidden="true"></i>
        <ul id='nav2' class='third-nav-ul'>
          <li class='nav-items'>
            <a href='#'>Cadastrar</a><br><br>
            <a href='#'>Consulta e Alteração</a>
          </li><br>
        </ul> 
      </li>
      </span>

      <span onclick="size()">
        <li id='all-nav' onclick="myFunction()">
          <a href='#' class='dropdown-btn'><img src="https://senaivotuporanga.com.br/nr12/view/images/chave.png" images/ class="fa" width="20px"> Manutenção </a> <i class="fa fa-angle-down" aria-hidden="true"></i>
          <ul id='nav' class='second-nav-ul'>
            <li class='nav-items'>
              <a href='#'>Preventiva</a><br><br>
              <a href='#'>Corretiva</a>
            </li><br>
          </ul>
        </li>
      </span>
 
    </div>

  </div>