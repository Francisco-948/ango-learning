<?php
include_once "bd/conexao.php";
session_start();

// Consulta para obter os vídeos a partir do banco de dados
$consulta = "SELECT * FROM videos";
$resultado = $conexao->query($consulta);
$videos = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/galeria.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://vjs.zencdn.net/7.10.2/video-js.css">
  <script src="https://vjs.zencdn.net/7.10.2/video.js"></script>
  <title>Centro de Formação Profissional Grupo ATC</title>
</head>

<?php
include_once "header-footer/header.php";
?>

<body>
<div class="container">
<br>
    <div class="row mt-4">
        <div class="col-md-8">
            <video id="videoPlayer" width="100%" controls>
                <!-- A URL do vídeo será carregada dinamicamente -->
                <source src="<?= $videos[0]['video_url'] ?? 'imagens/2.mp4' ?>" type="video/mp4">
            </video>

            <!-- Barra de Reprodução e Controles (Bootstrap fornece estilos padrão para controles de vídeo) -->
            <div class="mt-2">
                <button class="btn btn-primary mr-2" onclick="playVideo()">Play</button>
                <button class="btn btn-danger mr-2" onclick="pauseVideo()">Pause</button>
                <button class="btn btn-primary" onclick="loadPreviousVideo()">Anterior</button>
                <button class="btn btn-primary" onclick="loadNextVideo()">Próximo</button>
            </div>
            <h1 class="mt-4" id="videoTitle"><?= $videos[0]['titulo'] ?? 'Título do Vídeo' ?></h1>
            <p class="mt-3" id="videoDescription"><?= $videos[0]['descricao'] ?? 'Descrição do Vídeo' ?></p>
        </div>
        <div class="col-md-4">
            <h3>Lista de Reprodução</h3>
            <ul id="videoList">
                <?php foreach ($videos as $index => $video): ?>
                    <li>
                        <a href="javascript:void(0);" onclick="loadVideo('<?= $video['video_url'] ?>', '<?= $video['titulo'] ?>', '<?= $video['descricao'] ?>')">
                            <video width="80" controls title="<?= $video['titulo'] ?>" data-description="<?= $video['descricao'] ?>">
                                <source src="<?= $video['video_url'] ?>" type="video/mp4">
                            </video>
                            <?= $video['titulo'] ?>
                        </a>
                        <p>Data de Carregamento: <?= $video['data_carregamento'] ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<script>
    function playVideo() {
        document.querySelector('#videoPlayer').play();
    }

    function pauseVideo() {
        document.querySelector('#videoPlayer').pause();
    }

    function loadVideo(videoSrc, title, description) {
        document.querySelector('#videoPlayer source').setAttribute('src', videoSrc);
        document.querySelector('#videoPlayer').load();
        document.querySelector('#videoTitle').textContent = title;
        document.querySelector('#videoDescription').textContent = description;
    }

    const videoList = document.getElementById('videoList');
    const videos = videoList.querySelectorAll('a');
    let currentVideoIndex = 0;

    function loadNextVideo() {
        currentVideoIndex = (currentVideoIndex + 1) % videos.length;
        loadVideo(
            videos[currentVideoIndex].querySelector('video source').getAttribute('src'),
            videos[currentVideoIndex].querySelector('video').getAttribute('title'),
            videos[currentVideoIndex].querySelector('video').getAttribute('data-description')
        );
    }

    function loadPreviousVideo() {
        currentVideoIndex = (currentVideoIndex - 1 + videos.length) % videos.length;
        loadVideo(
            videos[currentVideoIndex].querySelector('video source').getAttribute('src'),
            videos[currentVideoIndex].querySelector('video').getAttribute('title'),
            videos[currentVideoIndex].querySelector('video').getAttribute('data-description')
        );
    }
</script>

</body>

<?php
include_once "header-footer/footer.php";
?>
</html>
