<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "centro-atc";

try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se foi enviado um arquivo
    if (isset($_FILES['imagem'])) {
        $imagem = $_FILES['imagem'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $data_carregamento = date('Y-m-d H:i:s');

        // Verifica se o arquivo é uma imagem válida
        $permitidos = array('image/jpeg', 'image/png', 'image/gif');
        if (in_array($imagem['type'], $permitidos)) {
            // Move o arquivo para uma pasta de imagens
            $caminho = 'upload/galeria/fotos/' . $imagem['name'];
            move_uploaded_file($imagem['tmp_name'], $caminho);

            // Insere os detalhes da imagem na base de dados sem a coluna "nome"
            $inserir = "INSERT INTO imagens (imagem_url, titulo, descricao, data_carregamento) VALUES (:imagem_url, :titulo, :descricao, :data_carregamento)";
            $stmt = $conexao->prepare($inserir);
            $stmt->bindParam(':imagem_url', $caminho, PDO::PARAM_STR);
            $stmt->bindParam(':titulo', $titulo, PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
            $stmt->bindParam(':data_carregamento', $data_carregamento, PDO::PARAM_STR);
            $stmt->execute();

            echo "Imagem enviada com sucesso!";
        } else {
            echo "Apenas imagens JPEG, PNG ou GIF são permitidas.";
        }
    }
} catch (PDOException $erro) {
    echo "Ocorreu um erro de conexão: " . $erro->getMessage();
}
?>
