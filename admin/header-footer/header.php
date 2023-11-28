<?php
  include_once "../bd/conexao.php";
  session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <script src="../js/validar-registro.js"></script>

  <style>
        .sidebar-content .nav-link {
            width: 100%;
            text-align: left;
        }

        .sidebar-content .nav-link:hover {
            background-color: #007bff;
            color: #fff;
        }

        .sidebar {
            overflow-y: auto;
            max-height: 100vh;
        }
    </style>
  <title>Centro de Formação Profissional Grupo ATC</title>
</head>
<body class="d-flex flex-column h-100">
  <div class="b-example-divider nav1 fixed-top">
    <header class="bg-dark d-flex flex-wrap p-3 align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="../index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="../imagens/logos/logo_2.png" class="bi" width="200" height="auto" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></img>
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="../index.php" class="nav px-2 btn btn-outline-primary me-3">Página Inicial</a></li>
        <li><a href="../index.php" class="nav px-2 btn btn-outline-primary me-2">Sobre Nós</a></li>
        <li class="nav-item dropdown">
          <button class="btn dropdown-toggle btn-outline-primary me-2" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="paginas/cursos.php">Cursos Disponíveis</a></li>
            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#requisitos-inscricao" href="paginas/benguela.php">Requisitos para a Inscrição</a></li>
            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#formas-pagamento" href="paginas/namibe.php">Formas de Pagamento</a></li>
            <li><a class="dropdown-item" href="paginas/inscricao.php">Inscrições</a></li>
            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#imprimir-recibo" href="paginas/recibo.php">Imprimir Recibo</a></li>
          </ul>
        </li>
        <li><a href="paginas/contactos.html" class="nav px-2 btn btn-outline-primary me-3">Contactos</a></li>
        <li class="nav-item dropdown">
          <button class="btn dropdown-toggle btn-outline-primary me-2" data-bs-toggle="dropdown" aria-expanded="false">
            Galeria
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="paginas/fotos.php">Fotos</a></li>
            <li><a class="dropdown-item" href="paginas/videos.php">Videos</a></li>
          </ul>
        </li>
      </ul>

      <div class="col-md-3 text-end">
        <div class="dropdown btn">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Francisco Fela Carlos</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../login/logout.php">Terminar Sessão</a></li>
          </ul>
        </div>
      </div>
    </header>
  </div>

  <nav class="navbar bg-dark nav2 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../imagens/logos/logo_2.png" class="bi" width="200" height="auto" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></img></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-primary"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>

          <div class="dropdown nav px-2 btn me-4">
          <a href="#" class="d-flex align-items-center text-black text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong class="text-black">Francisco Fela Carlos</strong>
          </a>
          <ul class="dropdown-menu me-2 dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">Configurações</a></li>
            <li><a class="dropdown-item" href="#">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../login/logout.php">Terminar Sessão</a></li>
          </ul>
        </div>
        
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-dark">

          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li><a href="../index.php" class="nav px-2 btn btn-outline-primary me-2">Página Inicial</a></li>
            <li><a href="../index.php" class="nav px-2 btn btn-outline-primary me-2">Sobre Nós</a></li>
            <li class="nav-item dropdown">
              <a class="nav px-2 btn btn-outline-primary me-2" data-bs-toggle="dropdown" aria-expanded="false">
                Cursos
              </a>
              <ul class="dropdown-menu me-2">
                <li><a class="dropdown-item" href="paginas/cursos.php">Cursos Disponíveis</a></li>
                <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#requisitos-inscricao" href="paginas/benguela.php">Requisitos para a Inscrição</a></li>
                <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#formas-pagamento" href="paginas/namibe.php">Formas de Pagamento</a></li>
                <li><a class="dropdown-item" href="paginas/inscricao.php">Inscrições</a></li>
                <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#imprimir-recibo" href="paginas/recibo.php">Imprimir Recibo</a></li>
              </ul>
            </li>
            <li><a href="paginas/contactos.html" class="nav px-2 btn btn-outline-primary me-2">Contactos</a></li>
            <li class="nav-item dropdown">
              <a class="nav px-2 btn btn-outline-primary me-2" data-bs-toggle="dropdown" aria-expanded="false">
                Galeria
              </a>
              <ul class="dropdown-menu me-2">
                <li><a class="dropdown-item" href="paginas/fotos.php">Fotos</a></li>
                <li><a class="dropdown-item" href="paginas/videos.php">Videos</a></li>
              </ul>
            </li>
          </ul>      

          

        </div>
      </div>
    </div>
  </nav>
  <!-- Cabeçalho Fim-->

  <div class="conteudo">
    <!-- Modal Requisitos -->
    <div class="modal fade" id="requisitos-inscricao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Requisitos para a inscrição</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
  
            <div class="container">
                <h6>PARA A INSCRIÇÃO PRESENCIAL, OS REQUISITOS NECESSÁRIOS SÃO OS SEGUINTES:</h6>
                <p>&rArr; Cópia do Documento de Identificação (BI ou Cédula)</p>
                <p>&rArr; Duas Fotografias Tipo Passe</p>
                <p>&rArr; Número de Telefone</p>
                <p>&rArr; Email Funcional</p>
                <p>&rArr; Valor do Curso</p>

                <h6>PARA A INSCRIÇÃO ONLINE, OS REQUISITOS NECESSÁRIOS SÃO OS SEGUINTES:</h6>
                <p>&rArr; Documento de Identificação (BI ou Cédula) no Formato PDF ou JPG</p>
                <p>&rArr; Uma Fotografia Tipo Passe no Formato JPG</p>
                <p>&rArr; Número de Telefone</p>
                <p>&rArr; Email Funcional</p>
                <p>&rArr; Comprovativo de Pagamento no Formato PDF ou JPG</p>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Pagamentos -->
    <div class="modal fade" id="formas-pagamento" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Formas de pagamento</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
  
            <div class="container">
              <p>As formas de pagamento são as diferentes modalidades de receber pelo serviço prestado e os meios de pagamento são as tecnologias que viabilizam essas tranzações.</p>
              <p>A seguir vamos apresentar as principais formas e meios de pagamento disponíveis no Centro de Formação Profissional GRUPO ATC.</p>
              <h6>PARA A INSCRIÇÃO PRESENCIAL, O PAGAMENTO É FEITO  PELOS SEGUINTES MEIOS:</h6>
              <p>&rArr; Depósito;</p>
              <p>&rArr; Transferência;</p>
              <p>&rArr; Dinheiro a vista.</p>
              

              <h6>PARA A INSCRIÇÃO ONLINE, O PAGAMENTO É FEITO  PELOS SEGUINTES MEIOS:</h6>
              <p>&rArr; Depósito;</p>
              <p>&rArr; Transferência;</p>
              <br>
              <br>
              <h6>&rArr; IBAN: AO06 0025 0000 56484601234 71</h6>
              <h6>&rArr; Número de Conta: 2325618/79624</h6>
              <h6>&rArr;Titular da Conta: Angelina Tomas e Filhos LDA</h6>
          </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Pagamentos -->
    <div class="modal fade" id="imprimir-recibo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Formas de pagamento</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
  
            <p>Para imprimir o seu recibo de Inscrição, <a class="link-offset-2 link-underline link-underline-opacity-25" href="#" data-bs-toggle="modal" data-bs-target="#iniciarSessao">Inicie Sessão</a></p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>