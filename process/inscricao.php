<?php
// Conexão com o banco de dados (substitua com suas credenciais)
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "centro-atc";
$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

// Processa o envio do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta os dados do formulário
    $nome = $_POST["nc"];
    $apelido = $_POST["apelido"];
    $sexo = $_POST["sexo"];
    $estado_civil = $_POST["estado_civil"];
    $nome_pai = $_POST["nome_pai"];
    $nome_mae = $_POST["nome_mae"];
    $data_nascimento = $_POST["data_nascimento"];
    $data_inscricao = date("Y-m-d H:i:s"); // Captura a data e hora de inscrição
    $numero_bi = $_POST["numero_bi"];
    $email = $_POST["email"];
    $provincia = $_POST["provincia"];
    $municipio = $_POST["municipio"];
    $rua = $_POST["rua"];
    $telefone1 = $_POST["telefone1"];
    $telefone2 = $_POST["telefone2"];
    $curso = $_POST["curso"];
    $preco = $_POST["preco"];
    $duracao = $_POST["duracao"];
    $periodo = $_POST["periodo"];
    $valor_pago = $_POST["valor_pago"];

    // Manipula o upload do Documento de Identificação
    if (!empty($_FILES["foto-di"]["name"])) {
        $fotoDiPath = "caminho/para/sua/pasta/" . $_FILES["foto-di"]["name"];
        move_uploaded_file($_FILES["foto-di"]["tmp_name"], $fotoDiPath);
    } else {
        $fotoDiPath = null;
    }

    // Manipula o upload da Foto Tipo Passe
    if (!empty($_FILES["foto-passe"]["name"])) {
        $fotoPassePath = "caminho/para/sua/pasta/" . $_FILES["foto-passe"]["name"];
        move_uploaded_file($_FILES["foto-passe"]["tmp_name"], $fotoPassePath);
    } else {
        $fotoPassePath = null;
    }

    // Manipula o upload do Comprovativo
    if (!empty($_FILES["Imagem"]["name"])) {
        $comprovativoPath = "../imagens/upload/comprovativos-inscricao/" . $_FILES["Imagem"]["name"];
        move_uploaded_file($_FILES["Imagem"]["tmp_name"], $comprovativoPath);
    } else {
        $comprovativoPath = null;
    }

    // Insere os dados no banco de dados
    $sql = "INSERT INTO Inscricoes (nome, apelido, sexo, estado_civil, nome_pai, nome_mae, data_nascimento, data_inscricao, numero_bi, email, provincia, municipio, rua, telefone1, telefone2, curso, preco, duracao, periodo, foto_di, foto_passe, valor_pago, comprovativo) 
            VALUES ('$nome', '$apelido', '$sexo', '$estado_civil', '$nome_pai', '$nome_mae', '$data_nascimento', '$data_inscricao', '$numero_bi', '$email', '$provincia', '$municipio', '$rua', '$telefone1', '$telefone2', '$curso', '$preco', '$duracao', '$periodo', '$fotoDiPath', '$fotoPassePath', '$valor_pago', '$comprovativoPath')";

    if ($conexao->query($sql) === TRUE) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . $conexao->error;
    }

    $conexao->close();
}
?>
