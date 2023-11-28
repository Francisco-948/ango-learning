<?php
include_once "header-footer/header.php";

// Conectar ao banco de dados (substitua com suas credenciais)
$conexao = new mysqli("localhost", "root", "", "centro-atc");

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Consulta para obter todas as categorias
$categorias_result = $conexao->query("SELECT * FROM categorias");
$categorias = $categorias_result->fetch_all(MYSQLI_ASSOC);

// Consulta para obter todos os cursos
$cursos_result = $conexao->query("SELECT * FROM cursos");
$cursos = $cursos_result->fetch_all(MYSQLI_ASSOC);

// Organizar os cursos por categoria
$cursos_por_categoria = array();
foreach ($cursos as $curso) {
    $categoria_id = $curso['categoria_id'];
    if (!isset($cursos_por_categoria[$categoria_id])) {
        $cursos_por_categoria[$categoria_id] = array();
    }
    $cursos_por_categoria[$categoria_id][] = $curso;
}
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

<body>
    <div class="container py-5" id="cursos">
        <h2 class="display-5 fw-bold text-center">Nossos Cursos</h2>

        <!-- Categorias -->
        <ul class="nav nav-tabs mb-4" id="categorias">
            <?php $primeiraCategoriaAtivada = false; ?>
            <?php foreach ($categorias as $categoria): ?>
                <li class="nav-item">
                    <?php
                    $classeAtiva = (!$primeiraCategoriaAtivada) ? 'active' : '';
                    $primeiraCategoriaAtivada = true;
                    ?>
                    <a class="nav-link <?php echo $classeAtiva; ?>"
                        id="categoria<?php echo $categoria['id']; ?>-tab"
                        data-toggle="tab"
                        href="#categoria<?php echo $categoria['id']; ?>">
                        <?php echo $categoria['nome']; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Conteúdo das Categorias -->
        <div class="tab-content">
            <?php foreach ($categorias as $categoria): ?>
                <div class="tab-pane fade <?php echo ($categoria['id'] == 17) ? 'show active' : ''; ?>"
                    id="categoria<?php echo $categoria['id']; ?>">
                    <div class="row">
                        <?php
                        if (isset($cursos_por_categoria[$categoria['id']])) {
                            foreach ($cursos_por_categoria[$categoria['id']] as $curso):
                        ?>
                                <div class="col-md-4">
                                    <div class="card mb-4">
                                        <img src="<?php echo $curso['imagem_url']; ?>"
                                            class="card-img-top"
                                            alt="<?php echo $curso['nome']; ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $curso['nome']; ?></h5>
                                            <p class="card-text"><?php echo $curso['legenda']; ?></p>
                                            <button class="btn btn-primary w-100 py-2"
                                                data-toggle="modal"
                                                data-target="#modalCategoria<?php echo $categoria['id']; ?>Curso<?php echo $curso['id']; ?>">Detalhes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            endforeach;
                        } else {
                            echo '<p>Não há cursos disponíveis nesta categoria.</p>';
                        }
                        ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Modais de Detalhes dos Cursos -->
        <?php foreach ($categorias as $categoria): ?>
            <?php
            if (isset($cursos_por_categoria[$categoria['id']])) {
                foreach ($cursos_por_categoria[$categoria['id']] as $curso):
            ?>
                    <div class="modal fade"
                        id="modalCategoria<?php echo $categoria['id']; ?>Curso<?php echo $curso['id']; ?>"
                        data-backdrop="static"
                        data-keyboard="false"
                        tabindex="-1"
                        aria-labelledby="modalCurso<?php echo $curso['id']; ?>Label"
                        aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5"
                                        id="modalCurso<?php echo $curso['id']; ?>Label">Detalhes do Curso de <?php echo $curso['nome']; ?>
                                    </h1>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo $curso['imagem_url']; ?>" class="d-block w-100" alt="<?php echo $curso['nome']; ?>">
                                    <h5>Preço: <?php echo $curso['preco']; ?></h5>
                                    <h5>Duração: <?php echo $curso['duracao']; ?></h5>
                                    <p><?php echo $curso['descricao']; ?></p>
                                    <!-- Adicione mais informações conforme necessário -->
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-success text-left">Inscrever-se</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            }
            ?>
        <?php endforeach; ?>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </div>

    <?php
    include_once "header-footer/footer.php";
    ?>
</body>
</html>
