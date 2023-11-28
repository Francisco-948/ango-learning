<?php
// Conectar ao banco de dados (substitua com suas credenciais)
$conexao = new mysqli("localhost", "root", "", "centro-atc");

// Verificar a conexão
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Processar a criação de uma nova categoria
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nova_categoria"])) {
    $nova_categoria = $conexao->real_escape_string($_POST["nova_categoria"]);
    $conexao->query("INSERT INTO categorias (nome) VALUES ('$nova_categoria')");
}

// Processar a adição de um novo curso
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["novo_curso"])) {
    $nome_curso = $conexao->real_escape_string($_POST["nome_curso"]);
    $descricao_curso = $conexao->real_escape_string($_POST["descricao_curso"]);
    $imagem_url_curso = ''; // Definiremos isso abaixo
    $preco_curso = $_POST["preco_curso"];
    $duracao_curso = $_POST["duracao_curso"];
    $legenda_curso = $conexao->real_escape_string($_POST["legenda_curso"]);
    $categoria_curso = $conexao->real_escape_string($_POST["categoria_curso"]);

    // Processar a imagem do curso
    if (isset($_FILES['imagem_url_curso']) && $_FILES['imagem_url_curso']['error'] == UPLOAD_ERR_OK) {
        $imagem_temp = $_FILES['imagem_url_curso']['tmp_name'];
        $imagem_nome = $_FILES['imagem_url_curso']['name'];

        // Substitua 'caminho/para/sua/pasta/' pelo caminho correto para o seu diretório de destino
        $diretorio_destino = 'upload/imagens-cursos/';

        // Garante que o diretório de destino existe ou tenta criá-lo
        if (!is_dir($diretorio_destino)) {
            mkdir($diretorio_destino, 0755, true);
        }

        $imagem_destino = $diretorio_destino . $imagem_nome;

        if (move_uploaded_file($imagem_temp, $imagem_destino)) {
            $imagem_url_curso = $imagem_destino;

            // Inserir dados na tabela de cursos
            $stmt = $conexao->prepare("INSERT INTO cursos (nome, descricao, imagem_url, preco, duracao, legenda, categoria_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssdssi", $nome_curso, $descricao_curso, $imagem_url_curso, $preco_curso, $duracao_curso, $legenda_curso, $categoria_curso);
            
            if ($stmt->execute()) {
                echo "";
            } else {
                echo "Erro ao adicionar o novo curso: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Erro ao mover o arquivo para o diretório de destino.";
        }
    }
}

// Consulta para obter todas as categorias
$categorias_result = $conexao->query("SELECT * FROM categorias");
$categorias = $categorias_result->fetch_all(MYSQLI_ASSOC);
?>

<body>
    <div class="container py-5" id="gerenciamento">
        <!-- Adicionar Nova Categoria -->
        <div class="mb-4">
            <h4>Adicionar Nova Categoria</h4>
            <form method="post" action="">
                <div class="input-group">
                    <input type="text" class="form-control" name="nova_categoria" placeholder="Nome da Nova Categoria" required>
                    <button type="submit" class="btn btn-primary">Adicionar Categoria</button>
                </div>
            </form>
        </div>

        <!-- Adicionar Novo Curso -->
        <div>
            <h4>Adicionar Novo Curso</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <!-- Se o formulário foi enviado com sucesso, exiba a mensagem -->
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["novo_curso"])): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo "Novo curso adicionado com sucesso."; ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nome_curso" class="form-label">Nome do Curso</label>
                            <input type="text" class="form-control" id="nome_curso" name="nome_curso" required>
                        </div>
                        <div class="mb-3">
                            <label for="legenda_curso" class="form-label">Legenda do Curso</label>
                            <input type="text" class="form-control" id="legenda_curso" name="legenda_curso" required>
                        </div>
                        <div class="mb-3">
                            <label for="descricao_curso" class="form-label">Descrição do Curso</label>
                            <textarea class="form-control" id="descricao_curso" name="descricao_curso" rows="3" required></textarea>
                        </div>                        
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="imagem_url_curso" class="form-label">Imagem do Curso</label>
                            <input type="file" class="form-control" id="imagem_url_curso" name="imagem_url_curso">
                        </div>
                        <div class="mb-3">
                            <label for="preco_curso" class="form-label">Preço do Curso</label>
                            <input type="number" class="form-control" id="preco_curso" name="preco_curso" step="0.01" required>
                        </div>
                        <div class="mb-3">
                            <label for="duracao_curso" class="form-label">Duração do Curso</label>
                            <input type="text" class="form-control" id="duracao_curso" name="duracao_curso" required>
                        </div>
                        <div class="mb-3">
                            <label for="categoria_curso" class="form-label">Selecione a Categoria</label>
                            <select class="form-select" id="categoria_curso" name="categoria_curso" required>
                                <?php foreach ($categorias as $categoria): ?>
                                    <option value="<?php echo $categoria['id']; ?>"><?php echo $categoria['nome']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 py-2" name="novo_curso">Adicionar Curso</button>
            </form>
        </div>
    </div>
    

    <!-- Restante do seu código permanece inalterado -->

</body>

</html>
