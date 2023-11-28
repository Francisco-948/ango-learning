<?php
include_once "bd/conexao.php";
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <title>Centro de Formação Profissional Grupo ATC</title>
</head>

<?php
    include_once "header-footer/header.php";
?>

<body>

<style>
        body {
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background-color: #007bff;
        }

        .navbar-brand, .navbar-nav .nav-link {
            color: #ffffff;
        }

        section {
            padding: 80px 0;
        }

        .icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">

    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Consultoria Financeira</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#highlight">Destaque</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#stats">Estatísticas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Seção de Destaque -->
    <section id="highlight" class="bg-light text-center">
        <div class="container">
            <h1 class="display-4 mb-4">Soluções Financeiras Personalizadas</h1>
            <p class="lead">Oferecemos consultoria financeira especializada para ajudar você a alcançar seus objetivos financeiros.</p>
            <a class="btn btn-primary btn-lg" href="#contact">Entre em Contato</a>
        </div>
    </section>

    <!-- Seção de Serviços -->
    <section id="services">
        <div class="container">
            <h2 class="display-5 text-center mb-4">Nossos Serviços</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="icon fas fa-chart-pie"></i>
                    <h5 class="card-title">Planejamento Financeiro</h5>
                    <p class="card-text">Desenvolvemos estratégias personalizadas para o seu sucesso financeiro.</p>
                </div>
                <div class="col-md-4">
                    <i class="icon fas fa-hand-holding-usd"></i>
                    <h5 class="card-title">Investimentos</h5>
                    <p class="card-text">Ajudamos na escolha de investimentos alinhados aos seus objetivos.</p>
                </div>
                <div class="col-md-4">
                    <i class="icon fas fa-file-invoice-dollar"></i>
                    <h5 class="card-title">Assessoria Fiscal</h5>
                    <p class="card-text">Oferecemos orientação para otimizar sua situação fiscal.</p>
                </div>
            </div>
        </div>
    </section>

    
</body>
<?php
include_once "header-footer/footer.php";
?>


</html>