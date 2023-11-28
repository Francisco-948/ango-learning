<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "centro-atc";

try {
    $conexao = new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta padrão para obter todas as imagens
    $consulta = "SELECT * FROM imagens";
    $resultado = $conexao->query($consulta);
    
    // Inicializa as variáveis de imagem, título e descrição com os dados da primeira imagem
    if ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        $imagem_url = $row['imagem_url'];
        $titulo = $row['titulo'];
        $descricao = $row['descricao'];
    }
} catch (PDOException $erro) {
    echo "Ocorreu um erro de conexão: " . $erro->getMessage();
}

include_once "header-footer/header.php";
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/fotos.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://vjs.zencdn.net/7.10.2/video-js.css">
<script src="https://vjs.zencdn.net/7.10.2/video.js"></script>


  <title>Centro de Formação Profissional Grupo ATC</title>
</head>

<body>
<div class="container">
    <br>
    <div class="row mt-4">
        <div class="col-md-8">
            <div id="videoPlayer" style="width: 100%; height: auto;">
                <img id="imageDisplay" src="<?= $imagem_url ?? 'imagens/a.jpg' ?>" alt="Imagem do Vídeo 1" style="width: 100%;">
            </div>

            <!-- Barra de Reprodução e Controles (Bootstrap fornece estilos padrão para controles de vídeo) -->
            <div class="mt-2">
                <button class="btn btn-primary" onclick="loadPreviousImage()">Anterior</button>
                <button class="btn btn-primary" onclick="loadNextImage()">Próxima</button>
            </div>
            <h1 class="mt-4" id="imageTitle"><?= $titulo ?? 'Título da Imagem' ?></h1>
            <p class="mt-3 fs-6" id="imageDescription"><?= $descricao ?? 'Descrição da Imagem' ?></p>
        </div>
        <div class="col-md-4">
            <h3>Lista de Imagens</h3>
            <ul id="imageList">
                <?php
                if (isset($resultado)) {
                    // Reinicie o cursor para o início do resultado para evitar duplicatas
                    $resultado->execute();
                    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
                        echo '<li>';
                        echo '<a href="javascript:void(0);" onclick="loadImage(\'' . $row['imagem_url'] . '\', \'' . $row['titulo'] . '\', \'' . $row['descricao'] . '\')">';
                        echo '<img src="' . $row['imagem_url'] . '" alt="' . $row['titulo'] . '" style="width: 80px;">';
                        echo $row['titulo'];
                        echo '</a>';
                        echo '<p>Data de Carregamento: ' . $row['data_carregamento'] . '</p>';
                        echo '</li>';
                    }
                }
                
                ?>
            </ul>
        </div>
    </div>
</div>

<script >
    var images = [];
    var imageList = document.getElementById('imageList');
    var imageDisplay = document.querySelector('#imageDisplay');
    var imageTitle = document.querySelector('#imageTitle');
    var imageDescription = document.querySelector('#imageDescription');
    var currentImageIndex = 0; // Defina um valor padrão

    <?php
    if (isset($resultado)) {
        // Reinicie o cursor para o início do resultado para evitar duplicatas
        $resultado->execute();
        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            echo 'images.push({url: "' . $row['imagem_url'] . '", title: "' . $row['titulo'] . '", description: "' . $row['descricao'] . '"});';
        }
    }
    ?>

    function loadImage(index) {
        if (index >= 0 && index < images.length) {
            currentImageIndex = index;
            imageDisplay.src = images[index].url;
            imageTitle.textContent = images[index].title;
            imageDescription.textContent = images[index].description;
        }
    }

    function loadNextImage() {
        var nextIndex = (currentImageIndex + 1) % images.length;
        loadImage(nextIndex);
    }

    function loadPreviousImage() {
        var previousIndex = (currentImageIndex - 1 + images.length) % images.length;
        loadImage(previousIndex);
    }

    // Adicionar eventos de clique para os elementos da lista de imagens
    for (var i = 0; i < imageList.children.length; i++) {
        imageList.children[i].addEventListener('click', function() {
            var index = Array.from(this.parentNode.children).indexOf(this);
            loadImage(index);
        });
    }
</script>


</body>
<?php
include_once "header-footer/footer.php";
?>

</html>
