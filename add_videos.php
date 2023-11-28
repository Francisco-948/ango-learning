<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "centro-atc";

try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['video'])) {
        $video_url = 'upload/galeria/videos/' . $_FILES['video']['name'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];

        move_uploaded_file($_FILES['video']['tmp_name'], $video_url);

        $inserir = "INSERT INTO videos (video_url, titulo, descricao) VALUES (:video_url, :titulo, :descricao)";
        $stmt = $conexao->prepare($inserir);
        $stmt->bindParam(':video_url', $video_url, PDO::PARAM_STR);
        $stmt->bindParam(':titulo', $titulo, PDO::PARAM_STR);
        $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
        $stmt->execute();

        echo "Vídeo carregado com sucesso!";
    }
} catch (PDOException $erro) {
    echo "Ocorreu um erro de conexão: " . $erro->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Carregar Vídeo</title>
</head>

<body>
<div class="container">
    <br>
    <h2>Carregar Vídeo</h2>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="video" class="form-label">Selecione um arquivo de vídeo:</label>
            <input type="file" class="form-control" name="video" id="video" required>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título do Vídeo:</label>
            <input type="text" class="form-control" name="titulo" id="titulo" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição do Vídeo:</label>
            <textarea class="form-control" name="descricao" id="descricao"></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100 py-2">Carregar Vídeo</button>
    </form>
</div>

</body>
</html>
