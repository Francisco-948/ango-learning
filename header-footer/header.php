<?php 
    include_once "bd/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <title>Centro de Formação Profissional Grupo ATC</title>
  <script src="js/validar-registro.js"></script>
</head>
<body>
  <div class="b-example-divider nav1 fixed-top">
    <header class="bg-dark d-flex flex-wrap p-3 align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
          <img src="imagens/logos/logo_2.png" class="bi" width="200" height="auto" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></img>
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav px-2 btn btn-outline-primary me-3">Página Inicial</a></li>
        <li><a href="sobre.php" class="nav px-2 btn btn-outline-primary me-2">Sobre Nós</a></li>
        <li class="nav-item dropdown">
          <button class="btn dropdown-toggle btn-outline-primary me-2" data-bs-toggle="dropdown" aria-expanded="false">
            Cursos
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cursos.php">Cursos Disponíveis</a></li>
            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#requisitos-inscricao" href="benguela.php">Requisitos para a Inscrição</a></li>
            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#formas-pagamento" href="namibe.php">Formas de Pagamento</a></li>
            <li><a class="dropdown-item" href="inscricao.php">Inscrições</a></li>
            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#imprimir-recibo" href="recibo.php">Imprimir Recibo</a></li>
          </ul>
        </li>
        <li><a href="contactos.php" class="nav px-2 btn btn-outline-primary me-3">Contactos</a></li>
        <li class="nav-item dropdown">
          <button class="btn dropdown-toggle btn-outline-primary me-2" data-bs-toggle="dropdown" aria-expanded="false">
            Galeria
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="fotos.php">Fotos</a></li>
            <li><a class="dropdown-item" href="videos.php">Videos</a></li>
          </ul>
        </li>
      </ul>

      <div class="col-md-3 text-end">
        <button  type="button" class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#iniciarSessao">Iniciar Sessão</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrar">Registrar</button>
      </div>
    </header>
  </div>

  <nav class="navbar bg-dark nav2 fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.phps"><img src="imagens/logos/logo_2.png" class="bi" width="200" height="auto" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></img></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon bg-primary"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body bg-dark">

          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li><a href="index.php" class="nav px-2 btn btn-outline-primary me-2">Página Inicial</a></li>
            <li><a href="sobre.php" class="nav px-2 btn btn-outline-primary me-2">Sobre Nós</a></li>
            <li class="nav-item dropdown">
              <a class="nav px-2 btn btn-outline-primary me-2" data-bs-toggle="dropdown" aria-expanded="false">
                Cursos
              </a>
              <ul class="dropdown-menu me-2">
                <li><a class="dropdown-item" href="cursos.php">Cursos Disponíveis</a></li>
                <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#requisitos-inscricao" href="benguela.php">Requisitos para a Inscrição</a></li>
                <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#formas-pagamento" href="namibe.php">Formas de Pagamento</a></li>
                <li><a class="dropdown-item" href="inscricao.php">Inscrições</a></li>
                <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#imprimir-recibo" href="recibo.php">Imprimir Recibo</a></li>
              </ul>
            </li>
            <li><a href="contactos.php" class="nav px-2 btn btn-outline-primary me-2">Contactos</a></li>
            <li class="nav-item dropdown">
              <a class="nav px-2 btn btn-outline-primary me-2" data-bs-toggle="dropdown" aria-expanded="false">
                Galeria
              </a>
              <ul class="dropdown-menu me-2">
                <li><a class="dropdown-item" href="fotos.php">Fotos</a></li>
                <li><a class="dropdown-item" href="videos.php">Videos</a></li>
              </ul>
            </li>
          </ul>      

          <a  type="button" class="nav px-2 btn btn-outline-primary me-4" data-bs-toggle="modal" data-bs-target="#iniciarSessao">Iniciar Sessão</a>
          <a type="button" class="nav px-2 btn me-4 btn-primary" data-bs-toggle="modal" data-bs-target="#registrar">Registrar</a>

        </div>
      </div>
    </div>
  </nav>
  <!-- Cabeçalho Fim-->

  <div class="conteudo">
    <!-- Modal Login -->
    <div class="modal fade" id="iniciarSessao" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Iniciar Sessão</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <main class="form-signin w-100 m-auto">
            <form method="post" action="login/validar-login.php">
              <img class="mb-4 rounded mx-auto d-block" src="imagens/logos/logo_1.png" alt="" width="200" height="auto">
              <div class="form-floating mx-auto p-2">
                  <input type="email" class="form-control" name="email" placeholder="nome@gmail.com" required>
                  <label for="floatingInput">Endereço de Email</label>
              </div>
              <div class="form-floating mx-auto p-2">
                  <input type="password" class="form-control" name="senha" placeholder="Password" required>
                  <label for="floatingPassword">Palavra-Passe</label>
              </div>
              <div class="form-check text-start my-3">
                  <input class="form-check-input" type="checkbox" name="lembrar" value="remember-me" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                      Lembrar-me
                  </label>
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
          </form>

            </main>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Registrar -->
    <div class="modal fade" id="registrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Registrar</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

            <main class="form-signin w-100 m-auto">   
              <form method="POST" action="login/validar-registro.php" onsubmit="return validarFormulario();">
                  <img class="mb-4 rounded mx-auto d-block" src="imagens/logos/logo_1.png" alt="" width="200" height="auto">
              
                  <div class="form-floating p-2 g-col-6">
                      <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo">
                      <label for="nome">Nome Completo</label>
                      <div class="error-message" id="error-nome"></div>
                  </div>
                  <div class="form-floating p-2 g-col-6">
                      <input type="email"name="email" class="form-control" id="email" placeholder="nome@gmail.com">
                      <label for="email">Endereço de Email</label>
                      <div class="error-message" id="error-email"></div>
                  </div>
                  <div class="form-floating p-2 g-col-6">
                      <input type="password" name="senha" class="form-control" id="senha" placeholder="Password">
                      <label for="senha">Palavra-Passe</label>
                      <div class="error-message" id="error-senha"></div>
                  </div>
                  <div class="form-floating p-2 g-col-6">
                      <input type="password" class="form-control" id="senha2" placeholder="Password">
                      <label for="senha2">Confirmar a Palavra-Passe</label>
                      <div class="error-message" id="error-senha2"></div>
                  </div>          
                  <button class="btn btn-primary w-100 py-2" type="submit">Registrar</button>
              </form>
            </main>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

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
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Recibo de Incrição</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
  
            <p><a class="link-offset-2 link-underline link-underline-opacity-25" href="#" data-bs-toggle="modal" data-bs-target="#iniciarSessao">Inicie Sessão</a> para imprimir o recibo de inscrição.</p>

            <p><strong>OBS:</strong> O recibo de inscrição só está disponível para aqueles que estão inscritos em um curso.</p>

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