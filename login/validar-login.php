<?php
// Conexão com o banco de dados (substitua as informações do banco de dados conforme necessário)
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "centro-atc";

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
}

// Processar o formulário quando for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta para verificar se o email existe no banco de dados
    $query = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = mysqli_query($conexao, $query);
    if ($result && $usuario = mysqli_fetch_assoc($result)) {
        var_dump($usuario); // Verifique os dados do usuário
        if (password_verify($senha, $usuario['senha'])) {
            // Senha correta
            if ($usuario['niveil_acesso'] === 'administrador') { // Use 'niveil_acesso' em vez de 'nivel_acesso'
                // Redirecionar para a página do administrador
                header("Location: ../admin/pagina_admin.php");
            } elseif ($usuario['niveil_acesso'] === 'usuario') {
                // Redirecionar para a página do usuário
                header("Location: ../usuario/pagina_usuario.php");
            }
            
        } else {
            echo "<script>
                    alert('Senha incorreta. Por favor, tente novamente.');
                    window.location.href = '../index.php'; // Substitua 'pagina_atual.php' pelo nome da sua página
                </script>";
        }
    } else {
        echo "<script>
                    alert('Email não encontrado no banco de dados. Por favor, registre-se ou verifique suas credenciais.');
                    window.location.href = '../index.php'; // Substitua 'pagina_atual.php' pelo nome da sua página
                </script>";
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conexao);
}
?>
