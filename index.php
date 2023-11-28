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
    <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="imagens/a.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/b.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="imagens/c.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Secção 1 -->
    <div class="row bg-body-tertiary">
      <div class="col">
        <div class="my-5s">
          <div class="p-5 text-center bg-body-tertiary">
              <h1 class="text-body-emphasis">+2000</h1>
              <p class="col-lg-8 mx-auto lead">
                Alunos formados desde nosso início em 2004.
              </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="my-5s">
          <div class="p-5 text-center bg-body-tertiary">
              <h1 class="text-body-emphasis">+25</h1>
              <p class="col-lg-8 mx-auto lead">
                Cursos ministrados, nas mais diversas categorias.
              </p>
          </div>
        </div>
      </div>
    </div>
    <!-- Secção 1 Fim -->
    
     <!-- Seção Sobre Nós -->
    <section id="sobre" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="display-5 fw-bold text-body-emphasis">Sobre Nós</h2>
                    <p>O Centro de Formação Profissional Grupo ATC é uma instituição de ensino renomada, fundada em 2004 por Américo Tomás Carlos. Há mais de duas décadas, temos sido líderes na formação, capacitação e consultoria financeira.</p>
                    <p>Nossa missão é proporcionar educação de alta qualidade e recursos para que nossos alunos alcancem o sucesso profissional. Estamos comprometidos em oferecer um ambiente de aprendizado enriquecedor, com instrutores experientes e programas de estudo atualizados.</p>
                    <p>Nossos valores fundamentais incluem excelência, comprometimento, ética e inovação. Acreditamos que o conhecimento é a chave para o progresso, e é por isso que buscamos continuamente aprimorar nossos cursos e serviços para atender às necessidades em constante evolução do mercado de trabalho.</p>
                </div>
                <div class="col-md-6">
                    <!-- Adicione uma imagem representativa aqui -->
                    <img src="imagens/1.jpg" alt="Sobre Nós" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>
  
    <!-- Seção Depoimentos -->
<section id="depoimentos" class="bg-light py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="display-5 fw-bold text-body-emphasis">Formação e Serviços</h2>
            <p>O Grupo ATC oferece uma variedade de programas de formação e serviços de consultoria financeira, todos projetados para atender às necessidades de nossos alunos e clientes. Nossa instituição tem um histórico sólido e uma equipe de instrutores altamente qualificados que estão comprometidos em oferecer educação de qualidade e orientação especializada em finanças.</p>
        </div>        
    </div>
</section>        

    <!-- Outros Itens Cativantes -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Nossos Cursos</h3>
                            <p class="card-text">Oferecemos uma variedade de cursos para atender às suas necessidades de formação profissional.</p>
                            <a href="cursos.php" class="btn btn-primary">Ver Cursos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Consultoria Financeira</h3>
                            <p class="card-text">Oferecemos serviços de consultoria financeira para indivíduos e empresas.</p>
                            <a href="consultoria.php" class="btn btn-primary">Saiba Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title">Inscrições Online</h3>
                            <p class="card-text">Faça sua inscrição online de forma conveniente e segura.</p>
                            <a href="inscricao.php" class="btn btn-primary">Inscreva-se</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- Seção de Notícias -->
<section id="noticias" class="bg-light py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="display-5 fw-bold text-body-emphasis">Últimas Notícias</h2>
            <p>Fique atualizado com as últimas notícias e eventos do Grupo ATC.</p>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="imagens/a.jpg" class="card-img-top" alt="Notícia 1">
                    <div class="card-body">
                        <h5 class="card-title">Workshop sobre Gestão Financeira</h5>
                        <p class="card-text">Participe do nosso workshop gratuito sobre gestão financeira e aprenda com especialistas da área.</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="imagens/a.jpg" class="card-img-top" alt="Notícia 2">
                    <div class="card-body">
                        <h5 class="card-title">Novo Curso de Marketing Digital</h5>
                        <p class="card-text">Estamos lançando um novo curso de marketing digital. Inscreva-se e expanda suas habilidades.</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="imagens/a.jpg" class="card-img-top" alt="Notícia 3">
                    <div class="card-body">
                        <h5 class="card-title">Parceria com Empresas Locais</h5>
                        <p class="card-text">Estamos orgulhosos de anunciar parcerias com empresas locais para oferecer oportunidades de estágio aos nossos alunos.</p>
                        <a href="#" class="btn btn-primary">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Seção Entre em Contato -->
<section id="contato" class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="display-5 fw-bold text-body-emphasis">Entre em Contato</h2>
            <p>Estamos à disposição para responder às suas perguntas e ajudá-lo em sua jornada de aprendizado.</p>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h5>Informações de Contato</h5>
                <p><strong>Endereço:</strong> Rua Machado dos Santos, Edifício do Mercado Municipal, 2º Andar, Loja 50, Benguela</p>
                <p><strong>Telefone:</strong> +244 937 117 157 / 947 913 869 / 958 939 828</p>
                <p><strong>Email:</strong> grupoatc2004@gmail.com</p>
            </div>
            <div class="col-md-6">
                <h5>Formulário de Contato</h5>
                <form action="https://formspree.io/f/xrgwdryv" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="Nome" placeholder="Seu Nome">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="Email" placeholder="Seu Email">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" name="Mensagem" placeholder="Sua Mensagem"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    <!-- Mais Itens Cativantes Aqui -->
</main>

    
</body>
<?php
include_once "header-footer/footer.php";
?>


</html>