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
  <!-- Secção 1 -->
<h1 class="py-5 display-5 fw-bold text-body-emphasis text-center">Sobre Nós</h1>
<br>
<div class="content px-4 text-center">
  <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
    <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
    <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
  </svg>
  <p class="col-lg-10 mx-auto lead">O Centro de Formação Profissional - Grupo ATC: é uma instituição de ensino em Benguela, que se dedica a fornecer formação profissional de alta qualidade em diversas áreas de conhecimento. Nossa localização é no segundo andar do Mercado Municipal Heróis de Demóncada, Loja nº 50, tornando-nos acessíveis a todos na região.</p>

  <p class="col-lg-10 mx-auto lead">Nossos instrutores são altamente qualificados, e nossas instalações são modernas, garantindo uma experiência de aprendizado excepcional para nossos alunos. O Grupo ATC se orgulha de preparar indivíduos para o mercado de trabalho e aprimorar suas habilidades profissionais.</p>
  
  <p class="col-lg-10 mx-auto lead">Estamos comprometidos em fornecer uma educação de qualidade que não apenas capacita indivíduos, mas também contribui para o crescimento econômico e o desenvolvimento da sociedade por meio da educação. Acreditamos que a educação é a chave para o sucesso e estamos dedicados a fazer a diferença na vida de nossos alunos.</p>
</div>
<div class="row bg-body-tertiary">
  <div class="col">
    <div class="my-5s">
      <div class="p-5 text-center ">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M0 0h1v15h15v1H0V0Zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5Z"/>
        </svg>
        <h1 class="text-body-emphasis">Nossa Missão</h1>              
        <p class="col-lg-10 mx-auto lead">
          Nossa missão é capacitar pessoas por meio da educação e formação profissional. Acreditamos que o conhecimento é fundamental para o desenvolvimento pessoal e profissional, e estamos empenhados em fornecer acesso a cursos de alta qualidade que inspiram a aprendizagem contínua.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="my-5s">
      <div class="p-5 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
          <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
        </svg>
        <h1 class="text-body-emphasis">Nossa Visão</h1>
        <p class="col-lg-10 mx-auto lead">
          Nossa visão é criar um mundo onde a aprendizagem seja acessível a todos, independentemente de sua localização ou circunstâncias. Queremos ser um catalisador de oportunidades, conectando alunos a instrutores talentosos e conteúdos educacionais relevantes.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="my-5s">
      <div class="p-5 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-duffle" viewBox="0 0 16 16">
          <path d="M8 5.75c1.388 0 2.673.193 3.609.385a18.404 18.404 0 0 1 1.43.354l.112.034.002.001h.001a.5.5 0 0 1-.308.952l-.004-.002-.018-.005a17.416 17.416 0 0 0-1.417-.354A17.282 17.282 0 0 0 8 6.75a17.3 17.3 0 0 0-3.408.365 17.42 17.42 0 0 0-1.416.354l-.018.005-.003.001a.5.5 0 1 1-.308-.95A17.26 17.26 0 0 1 8 5.75Z"/>
          <path d="M5.229 2.722c-.126.461-.19.945-.222 1.375-1.401.194-2.65.531-3.525 1.012C-.644 6.278.036 11.204.393 13.127a.954.954 0 0 0 .95.772h13.314a.954.954 0 0 0 .95-.772c.357-1.923 1.037-6.85-1.09-8.018-.873-.48-2.123-.818-3.524-1.012a7.361 7.361 0 0 0-.222-1.375c-.162-.593-.445-1.228-.971-1.622-1.115-.836-2.485-.836-3.6 0-.526.394-.81 1.03-.971 1.622ZM9.2 1.9c.26.195.466.57.606 1.085.088.322.142.667.173.998a23.307 23.307 0 0 0-3.958 0 6.06 6.06 0 0 1 .173-.998c.14-.515.346-.89.606-1.085.76-.57 1.64-.57 2.4 0ZM8 4.9c2.475 0 4.793.402 6.036 1.085.238.13.472.406.655.93.183.522.28 1.195.303 1.952.047 1.486-.189 3.088-.362 4.032H1.368c-.173-.944-.409-2.545-.362-4.032.024-.757.12-1.43.303-1.952.183-.524.417-.8.655-.93C3.207 5.302 5.525 4.9 8 4.9Z"/>
        </svg>
        <h1 class="text-body-emphasis">Nossos Valores</h1>
        <p class="col-lg-10 mx-auto lead">
          <ol>
            <li><p class="col-lg-10 mx-auto lead">Acessibilidade: Queremos que o aprendizado seja acessível a todos, independentemente de sua origem.</p></li>
            <li><p class="col-lg-10 mx-auto lead">Excelência: Buscamos a excelência em tudo o que fazemos, desde a seleção de cursos até a experiência do usuário.</p></li>
            <li><p class="col-lg-10 mx-auto lead">Inovação: Estamos sempre buscando novas maneiras de melhorar e expandir nossa plataforma.</p></li>
            <li><p class="col-lg-10 mx-auto lead">Comunidade: Acreditamos no poder da comunidade para enriquecer o aprendizado e compartilhar conhecimento.</p></li>
          </ol>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Secção 1 Fim -->

<div class="b-example-divider"></div>

<!-- Cursos -->
<main>
  <div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold text-body-emphasis">O Que Nos Torna Únicos</h1>
    <div class="col-lg-20 mx-auto">
      <div class="row">
        <div class="col">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                  Variedade de Cursos
                </button>
              </h2>
              <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Oferecemos uma ampla variedade de cursos em diversas categorias, desde ciências e tecnologia até artes e humanidades. Nossa plataforma é um hub de aprendizado, permitindo que os alunos escolham cursos que atendam aos seus interesses e metas.</p>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                  Qualidade do Conteúdo
                </button>
              </h2>
              <div id="collapse2" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Estamos comprometidos em fornecer cursos de alta qualidade ministrados por instrutores experientes e especialistas em seus campos. Cada curso passa por uma avaliação rigorosa para garantir que atenda aos mais altos padrões de aprendizado.</p>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                  Flexibilidade de Aprendizado
                </button>
              </h2>
              <div id="collapse3" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Reconhecemos que a vida é agitada, e é por isso que oferecemos uma experiência de aprendizado flexível. Nossos cursos podem ser acessados a qualquer momento e em qualquer lugar, permitindo que os alunos aprendam no seu próprio ritmo.</p>
                </div>
              </div>
            </div>
          </div>          
        </div>
        <div class="col">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                  Comunidade de Aprendizado
                </button>
              </h2>
              <div id="collapse4" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>Acreditamos no poder da comunidade. O Centro de Formação Profissional - Grupo ATC oferece recursos para promover interações entre alunos e professores, como fóruns de discussão e mensagens diretas, para enriquecer a experiência de aprendizado.</p>
                </div>
              </div>
            </div>
          </div>                    
        </div>
      </div>
    </div>
    <br>
    <!-- Cursos Fim -->
    
    <h1 class="display-5 fw-bold text-body-emphasis text-center">Políticas e Regulamentações</h1>
    <br>
    <div class="content px-4 text-center">
      <p class="col-lg-10 mx-auto lead">Transparência e ética são fundamentais para nós. Leia nossas <a href="politicas-e-privacidade.php">políticas de privacidade</a> para entender nossos compromissos com a segurança e a proteção de dados.</p>
    </div>
  </div>
</div>
<!-- Secção 2 Fim -->

</body>
<?php
include_once "header-footer/footer.php";
?>


</html>