<?php
include_once "bd/conexao.php";
session_start();
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

<?php
    include_once "header-footer/header.php";
?>

<body>
   
    <!-- Seção Entre em Contato -->
<section id="contato" class="py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="display-5 fw-bold text-body-emphasis">Entre em Contato</h2>
            <p>Estamos à disposição para responder às suas perguntas e ajudá-lo em sua jornada de aprendizado.</p>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h5>Informações de Contato</h5>
                <p><strong>Endereço:</strong> Rua Machado dos Santos, Edifício do Mercado Municipal, 2º Andar, Loja 50, Benguela</p>
                <p><strong>Telefone:</strong> +244 937 117 157 / 947 913 869 / 958 939 828</p>
                <p><strong>Email:</strong> grupoatc2004@gmail.com</p>
            </div>
            <div class="col-md-6">
                <h5>Formulário de Contato</h5>
                <form action="https://formspree.io/f/xrgwdryv" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control" name="Nome" placeholder="Seu Nome">
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" name="Email" placeholder="Seu Email">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" name="Mensagem" placeholder="Sua Mensagem"></textarea>
                    </div>
                    <div class="d-grid gap-2">
                      <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="text-center">
  <h2 class="display-5 fw-bold text-body-emphasis">Localização</h2>
</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49405.45671642645!2d13.335176421679689!3d-12.580527699999989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1bafd1192b099015%3A0x2887e61383b6c5bb!2sCentro%20de%20Forma%C3%A7%C3%A3o%20Profissional%20Grupo%20ATC!5e1!3m2!1spt-PT!2sao!4v1682814302744!5m2!1spt-PT!2sao" width="100% auto" height="800" style="border:0; margin-top: 30px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- Mais Itens Cativantes Aqui -->
</main>
    
</body>
<?php
include_once "header-footer/footer.php";
?>


</html>