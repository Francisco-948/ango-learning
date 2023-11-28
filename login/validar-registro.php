<?php
include_once "../bd/conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // Verificar se o email já existe no banco de dados
    $verificarEmail = "SELECT COUNT(*) FROM usuarios WHERE email = :email";
    $stmtVerificar = $conexao->prepare($verificarEmail);
    $stmtVerificar->bindParam(':email', $email);
    $stmtVerificar->execute();
    $count = $stmtVerificar->fetchColumn();

    if ($count > 0) {
      echo "<script>
      alert('Este email já está cadastrado. Por favor, tente novamente.');
      window.location.href = '../'; // Substitua 'pagina_atual.php' pelo nome da sua página
      </script>";
    } else {
        // Prepare a instrução SQL para inserir os dados
        $sql = "INSERT INTO usuarios (nome_completo, email, senha) VALUES (:nome_completo, :email, :senha)";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':nome_completo', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        // Execute a instrução SQL
        if ($stmt->execute()) {
            // O cadastro foi bem-sucedido, você pode fechar o modal e atualizar a página
            echo "<script>
                alert('Cadastro bem-sucedido.');
                window.location.href = '../index.php'; // Substitua 'pagina_atual.php' pelo nome da sua página
                </script>";
        } else {
            echo "Erro ao cadastrar: " . implode(" - ", $stmt->errorInfo());
        }
    }
}
?>
