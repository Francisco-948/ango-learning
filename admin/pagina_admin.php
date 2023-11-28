<?php
  include_once "../bd/conexao.php";
  include_once "header-footer/header.php";
?>
<!-- Adicione os seguintes estilos ao cabeçalho ou diretamente à sua página -->
<style>
    body {
        overflow: auto;
        margin: 0;
        padding: 0;
    }

    section.content {
        overflow-y: auto;
        height: calc(100vh - 56px); /* Subtrai a altura do rodapé */
    }

    .tab-content {
        height: 100%;
    }

    body::-webkit-scrollbar {
        width: 12px;
    }

    body::-webkit-scrollbar-thumb {
        background-color: #6b6b6b;
        border-radius: 6px;
    }

    body::-webkit-scrollbar-track {
        background-color: #f1f1f1;
    }

    section.content::-webkit-scrollbar {
        width: 8px;
    }

    section.content::-webkit-scrollbar-thumb {
        background-color: blue;
        border-radius: 4px;
    }

    section.content::-webkit-scrollbar-track {
        background-color: #f1f1f1;
    }


        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 50px;
        }

        .card {
            margin-bottom: 20px;
            border: none;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-title {
            color: #007bff;
            display: flex;
            align-items: center;
        }

        .icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .card-text {
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
        }
</style>

<body class="d-flex flex-column h-100">
  <main class="d-flex flex-nowrap vh-100 flex-grow-1">
      <!-- Sidebar -->
      <aside class="sidebar d-flex flex-column flex-shrink-0 text-bg-dark">
          <h1 class="visually-hidden">Sidebars examples</h1>

          <div class="sidebar-content d-flex flex-column p-3">
              <span class="fs-4 d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white">Administração</span>
              <hr>

              <ul class="nav nav-tabs flex-column" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                      <button class="nav-link p-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Dashboard</button>
                      <hr>
                      <h3 class="fs-4 d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white">Página Inicial</h3>
                      <button class="nav-link p-3" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Slides</button>
                      <button class="nav-link p-3" id="sobre-tab" data-bs-toggle="tab" data-bs-target="#sobre-tab-pane" type="button" role="tab" aria-controls="sobre-tab-pane" aria-selected="false">Sobre Nós</button>
                      <button class="nav-link p-3" id="formacao-tab" data-bs-toggle="tab" data-bs-target="#formacao-tab-pane" type="button" role="tab" aria-controls="formacao-tab-pane" aria-selected="false">Formação e Serviços</button>
                      <button class="nav-link p-3" id="noticias-tab" data-bs-toggle="tab" data-bs-target="#noticias-tab-pane" type="button" role="tab" aria-controls="noticias-tab-pane" aria-selected="false">Notícias</button>
                      <hr>
                      <h3 class="fs-4 d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white">Sobre Nós</h3>
                      <button class="nav-link p-3" id="sobre-tab" data-bs-toggle="tab" data-bs-target="#sobre-tab-pane" type="button" role="tab" aria-controls="sobre-tab-pane" aria-selected="false">Sobre Nós</button>
                      <button class="nav-link p-3" id="politicas-tab" data-bs-toggle="tab" data-bs-target="#politicas-tab-pane" type="button" role="tab" aria-controls="politicas-tab-pane" aria-selected="false">Politicas e Privacidade</button>
<hr>
                      <h3 class="fs-4 d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white">Cursos</h3>
                      <button class="nav-link p-3" id="cursos-tab" data-bs-toggle="tab" data-bs-target="#cursos-tab-pane" type="button" role="tab" aria-controls="cursos-tab-pane" aria-selected="false">Cursos</button>
                      <button class="nav-link p-3" id="requisitos-tab" data-bs-toggle="tab" data-bs-target="#requisitos-tab-pane" type="button" role="tab" aria-controls="requisitos-tab-pane" aria-selected="false">Requisitos para a inscrição</button>
                      <button class="nav-link p-3" id="pagamento-tab" data-bs-toggle="tab" data-bs-target="#pagamento-tab-pane" type="button" role="tab" aria-controls="pagamento-tab-pane" aria-selected="false">Formas de pagamento</button>
                      <button class="nav-link p-3" id="inscricao-tab" data-bs-toggle="tab" data-bs-target="#inscricao-tab-pane" type="button" role="tab" aria-controls="inscricao-tab-pane" aria-selected="false">Inscrições</button>
<hr>
                      <h3 class="fs-4 d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white">Contactos</h3>
                      <button class="nav-link p-3" id="contactos-tab" data-bs-toggle="tab" data-bs-target="#contactos-tab-pane" type="button" role="tab" aria-controls="contactos-tab-pane" aria-selected="false">Contactos</button>
                      <button class="nav-link p-3" id="localizacao-tab" data-bs-toggle="tab" data-bs-target="#localizacao-tab-pane" type="button" role="tab" aria-controls="localizacao-tab-pane" aria-selected="false">Localização</button>

                      <hr>
                      <h3 class="fs-4 d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white">Galeria</h3>
                      <button class="nav-link p-3" id="galeria-fotos-tab" data-bs-toggle="tab" data-bs-target="#galeria-fotos-tab-pane" type="button" role="tab" aria-controls="galeria-fotos-tab-pane" aria-selected="false">Galeria - Fotos</button>
                      <button class="nav-link p-3" id="galeria-videos-tab" data-bs-toggle="tab" data-bs-target="#galeria-videos-tab-pane" type="button" role="tab" aria-controls="galeria-videos-tab-pane" aria-selected="false">Galeria - Videos</button>

                      <hr>
                      <h3 class="fs-4 d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white">Contas</h3>
                      <button class="nav-link p-3" id="usuarios-tab" data-bs-toggle="tab" data-bs-target="#usuarios-tab-pane" type="button" role="tab" aria-controls="usuarios-tab-pane" aria-selected="false">Contas</button>
                  </li>
              </ul>
          </div>
      </aside>

      <!-- Conteúdo principal à direita do sidebar -->
      <section class="content flex-grow-1">
          <!-- Conteúdos à Direita -->
          <div class="col">
              <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <h1 class="display-5 fw-bold text-center">Admin - Dashboard</h1>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="estatisticas-tab" data-bs-toggle="tab" data-bs-target="#estatisticas-tab-pane" type="button" role="tab" aria-controls="estatisticas-tab-pane" aria-selected="true">Estatísticas</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="inscricoes-matriculas-tab" data-bs-toggle="tab" data-bs-target="#inscricoes-matriculas-tab-pane" type="button" role="tab" aria-controls="inscricoes-matriculas-tab-pane" aria-selected="false">Inscrições e Matrículas</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="comunicacao-tab" data-bs-toggle="tab" data-bs-target="#comunicacao-tab-pane" type="button" role="tab" aria-controls="comunicacao-tab-pane" aria-selected="false">Comunicação</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gestao-alunos-tab" data-bs-toggle="tab" data-bs-target="#gestao-alunos-tab-pane" type="button" role="tab" aria-controls="gestao-alunos-tab-pane" aria-selected="false">Gestão de Alunos</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="avaliacao-desempenho-tab" data-bs-toggle="tab" data-bs-target="#avaliacao-desempenho-tab-pane" type="button" role="tab" aria-controls="avaliacao-desempenho-tab-pane" aria-selected="false">Avaliação e Desempenho</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="calendario-eventos-tab" data-bs-toggle="tab" data-bs-target="#calendario-eventos-tab-pane" type="button" role="tab" aria-controls="calendario-eventos-tab-pane" aria-selected="false">Calendário de Eventos</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gestao-instrutores-tab" data-bs-toggle="tab" data-bs-target="#gestao-instrutores-tab-pane" type="button" role="tab" aria-controls="gestao-instrutores-tab-pane" aria-selected="false">Gerenciamento de Instrutores</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="suporte-tecnico-tab" data-bs-toggle="tab" data-bs-target="#suporte-tecnico-tab-pane" type="button" role="tab" aria-controls="suporte-tecnico-tab-pane" aria-selected="false">Suporte Técnico</button>
                      </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="estatisticas-tab-pane" role="tabpanel" aria-labelledby="estatisticas-tab" tabindex="0">
                      
                        <!-- Seção de Estatísticas -->
                        <section id="stats" class="bg-light text-center">
                            <div class="container">
                                <h2 class="display-5 mb-4">Estatísticas</h2>
                                <div class="row text-center">
                                    <div class="col-md-3">
                                        <i class="icon fas fa-users"></i>
                                        <h5 class="card-title">Total de Usuários</h5>
                                        <p class="card-text">1.234</p>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="icon fas fa-book-open"></i>
                                        <h5 class="card-title">Cursos Disponíveis</h5>
                                        <p class="card-text">56</p>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="icon fas fa-calendar-alt"></i>
                                        <h5 class="card-title">Inscrições Esta Semana</h5>
                                        <p class="card-text">102</p>
                                    </div>
                                    <div class="col-md-3">
                                        <i class="icon fas fa-user-check"></i>
                                        <h5 class="card-title">Total de Inscritos</h5>
                                        <p class="card-text">28</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                      </div>
                      </div>

                      <div class="tab-pane fade" id="gestao-cursos-tab-pane" role="tabpanel" aria-labelledby="gestao-cursos-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="inscricoes-matriculas-tab-pane" role="tabpanel" aria-labelledby="inscricoes-matriculas-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="comunicacao-tab-pane" role="tabpanel" aria-labelledby="comunicacao-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="recursos-educacionais-tab-pane" role="tabpanel" aria-labelledby="recursos-educacionais-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="gestao-alunos-tab-pane" role="tabpanel" aria-labelledby="gestao-alunos-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="avaliacao-desempenho-tab-pane" role="tabpanel" aria-labelledby="avaliacao-desempenho-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="calendario-eventos-tab-pane" role="tabpanel" aria-labelledby="calendario-eventos-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="gestao-instrutores-tab-pane" role="tabpanel" aria-labelledby="gestao-instrutores-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="configuracoes-sistema-tab-pane" role="tabpanel" aria-labelledby="configuracoes-sistema-tab" tabindex="0">...</div>
                      <div class="tab-pane fade" id="suporte-tecnico-tab-pane" role="tabpanel" aria-labelledby="suporte-tecnico-tab" tabindex="0">...</div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Slides</h1>
                  </div>

                  <div class="tab-pane fade" id="sobre-tab-pane" role="tabpanel" aria-labelledby="sobre-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Sobre Nós</h1>
                  </div>

                  <div class="tab-pane fade" id="formacao-tab-pane" role="tabpanel" aria-labelledby="formacao-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Formação e Serviços</h1>
                  </div>

                  <div class="tab-pane fade" id="noticias-tab-pane" role="tabpanel" aria-labelledby="noticias-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Notícias</h1>
                  </div>

                  <div class="tab-pane fade" id="politicas-tab-pane" role="tabpanel" aria-labelledby="politicas-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Politicas e Privacidade</h1>
                  </div>

                  <div class="tab-pane fade" id="cursos-tab-pane" role="tabpanel" aria-labelledby="cursos-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Categorias & Cursos</h1>
                      <?php
                        include_once "../add_cursos.php";
                      ?>
                  </div>

                  <div class="tab-pane fade" id="requisitos-tab-pane" role="tabpanel" aria-labelledby="requisitos-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Requisitos para a inscrição</h1>
                  </div>

                  <div class="tab-pane fade" id="pagamento-tab-pane" role="tabpanel" aria-labelledby="pagamento-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Formas de pagamento</h1>
                  </div>
                  
                  <div class="tab-pane fade" id="inscricao-tab-pane" role="tabpanel" aria-labelledby="inscricao-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Inscrições</h1>
                  </div>

                  <div class="tab-pane fade" id="contactos-tab-pane" role="tabpanel" aria-labelledby="contactos-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Contactos</h1>
                  </div>

                  <div class="tab-pane fade" id="localizacao-tab-pane" role="tabpanel" aria-labelledby="localizacao-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Localização</h1>
                  </div>

                  <div class="tab-pane fade" id="galeria-fotos-tab-pane" role="tabpanel" aria-labelledby="galeria-fotos-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Galeria - Fotos</h1>
                      <?php
                        include_once "../add_imagens.html";
                      ?>
                  </div>

                  <div class="tab-pane fade" id="galeria-videos-tab-pane" role="tabpanel" aria-labelledby="galeria-videos-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Galeria - Videos</h1>
                      <?php
                        include_once "../add_videos.php";
                      ?>
                  </div>

                  <div class="tab-pane fade" id="usuarios-tab-pane" role="tabpanel" aria-labelledby="usuario-tab" tabindex="0">
                      <h1 class="display-5 fw-bold text-center">Admin - Contas</h1>
                  </div>

                  <!-- Adicione os demais conteúdos aqui -->
              </div>
          </div>
      </section>
  </main>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
  <script>
      document.addEventListener("DOMContentLoaded", function () {
          // Recupere o estado ativo do armazenamento local
          const activeTab = localStorage.getItem("activeTab");
          if (activeTab) {
              // Ative a guia armazenada
              const tab = document.getElementById(activeTab);
              if (tab) {
                  tab.classList.add("active");
                  const tabPane = document.querySelector(tab.getAttribute("data-bs-target"));
                  if (tabPane) {
                      tabPane.classList.add("show", "active");
                  }
              }
          }

          // Adicione um ouvinte de clique para armazenar a guia ativa
          const tabs = document.querySelectorAll(".nav-link[data-bs-toggle='tab']");
          tabs.forEach(function (tab) {
              tab.addEventListener("click", function () {
                  const activeTabId = this.getAttribute("id");
                  localStorage.setItem("activeTab", activeTabId);
              });
          });
      });
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

<?php
include_once "../header-footer/footer.php";
?>
</html>