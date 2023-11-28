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

  <!-- Inclua o Bootstrap CSS -->
    <!-- Inclua o jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Inclua o JavaScript do Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                <h2 class="display-5 fw-bold text-body-emphasis">Inscrição Online</h2>
            </div>
            <div class="row mt-4">
                <h4>Preencha o Formulário</h4>
                <form class="insc" method="POST" action="process/inscricao.php">
                    <div class="row">
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="nc" class="form-label fw-bold">Nome</label>
                            <input type="text" class="form-control" id="nc" name="nc" placeholder="Nome" required="required">
                        </div>
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="apelido" class="form-label fw-bold">Apelido</label>
                            <input type="text" class="form-control" id="apelido" name="apelido" placeholder="Apelido" required="required">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="sexo" class="form-label fw-bold">Sexo:</label>
                            <select class="form-select" id="sexo" name="sexo" required="required">
                                <option selected="selected" disabled="disabled">Selecionar</option>
                                <option>Masculino</option>
                                <option>Feminino</option>
                            </select>
                        </div>
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="Estado-civil" class="form-label fw-bold">Estado Civil</label>
                            <select class="form-select" id="Estado-civil" name="estado_civil" required="required">
                                <option selected="selected" disabled="disabled">Selecionar</option>
                                <option>Solteiro (a)</option>
                                <option>Casado (a)</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3 animate__animated animate__fadeIn">
                        <label for="nome-pai" class="form-label fw-bold">Filiação</label>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="nome-pai" name="nome_pai" placeholder="Nome do Pai" required="required">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nome-mae" name="nome_mae" placeholder="Nome da Mãe" required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="datanascimento" class="form-label fw-bold">Data de Nascimento</label>
                            <input type="date" class="form-control" id="datanascimento" name="data_nascimento" required="required">
                        </div>
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="data" class="form-label fw-bold">Data de inscrição</label>
                            <input type="date" class="form-control" id="data" name="data_inscricao" value="<?php echo date('Y-m-d'); ?>" readonly required="required">
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="numbi" class="form-label fw-bold">Nº do B.I</label>
                            <input type="text" class="form-control" id="numbi" name="numero_bi" placeholder="Nº do Bilhete de Identidade" required="required">
                        </div>
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="enderecoele" class="form-label fw-bold">Email</label>
                            <input type="email" class="form-control" id="enderecoele" name="email" placeholder="exemplo@gmail.com" required="required">
                        </div>
                    </div>

                    <h4>Residência</h4>
                    <div class="mb-3 animate__animated animate__fadeIn">
                        <div class="row">
                            <div class="col">
                                <label for="provincia" class="form-label fw-bold">Província</label>
                                <select class="form-select" id="provincia" name="provincia" required="required">
                                    <option selected="selected" disabled="disabled">Selecione uma Província</option>
                                    <option value="Bengo">Bengo</option>
                                    <option value="Benguela">Benguela</option>
                                    <option value="Bié">Bié</option>
                                    <option value="Cabinda">Cabinda</option>
                                    <option value="Cunene">Cunene</option>
                                    <option value="Huambo">Huambo</option>
                                    <option value="Huíla">Huíla</option>
                                    <option value="Kuando Kubango">Kuando Kubango</option>
                                    <option value="Kwanza Norte">Kwanza Norte</option>
                                    <option value="Kwanza Sul">Kwanza Sul</option>
                                    <option value="Luanda">Luanda</option>
                                    <option value="Lunda Norte">Lunda Norte</option>
                                    <option value="Lunda Sul">Lunda Sul</option>
                                    <option value="Malanje">Malanje</option>
                                    <option value="Moxico">Moxico</option>
                                    <option value="Namibe">Namibe</option>
                                    <option value="Uíge">Uíge</option>
                                    <option value="Zaire">Zaire</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="municipio" class="form-label fw-bold">Município</label>
                                <select class="form-select" id="municipio" name="municipio" required="required">
                                    <option selected="selected" disabled="disabled">Selecione uma Província primeiro</option>
                                    <!-- Adicione todos os municípios para cada província aqui -->
                                </select>
                            </div>
                            <div class="col">
                                <label for="rua" class="form-label fw-bold">Região, Bairro ou Rua</label>
                                <input type="text" class="form-control" id="rua" name="rua" placeholder="Região, Bairro ou Rua" required="required">
                            </div>
                        </div>
                    </div>


                    <h4>Telefone</h4>
                    <div class="mb-3 animate__animated animate__fadeIn">
                        <div class="row">
                            <div class="col">
                                <label for="tel1" class="form-label fw-bold">Telefone Principal</label>                        
                                <input type="text" class="form-control" id="tel1" name="telefone1" placeholder="900 000 000" required="required">
                            </div>
                            <div class="col">
                                <label for="tel2" class="form-label fw-bold">Telefone Alternativo</label>                        
                                <input type="text" class="form-control" id="tel2" name="telefone2" placeholder="900 000 000" required="required">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 animate__animated animate__fadeIn">
                        <label for="curso" class="form-label fw-bold">Curso</label>
                        <select id="curso" name="curso" required="required" class="form-select">
                            <option selected="selected" disabled="disabled">Escolha o Curso</option>
                            <option value="Autocad">Autocad</option>
                            <option value="Climatização e Frio">Climatização e Frio</option>
                            <option value="Comandos Eléctricos">Comandos Eléctricos</option>
                            <option value="Contabilidade Geral">Contabilidade Geral</option>
                            <option value="Contabilidade Informatizada">Contabilidade Informatizada</option>
                            <option value="Culinária">Culinária</option>
                            <option value="Decoração Geral">Decoração Geral</option>
                            <option value="Decoração Infantil">Decoração Infantil</option>
                            <option value="Design Gráfico">Design Gráfico</option>
                            <option value="Edição de Vídeo">Edição de Vídeo</option>
                            <option value="Electricidade">Electricidade</option>
                            <option value="Electricidade Automóvel">Electricidade Automóvel</option>
                            <option value="Electrónica">Electrónica</option>
                            <option value="Empreendedorismo">Empreendedorismo</option>
                            <option value="Excel Avançado">Excel Avançado</option>
                            <option value="Gestão de Empresas">Gestão de Empresas</option>
                            <option value="Gestão de Recursos Humanos">Gestão de Recursos Humanos</option>
                            <option value="Gestão de Recursos Humanos (Primavera)">Gestão de Recursos Humanos (Primavera)</option>
                            <option value="Hardware & Software">Hardware & Software</option>
                            <option value="Higiene e Segurança no Trabalho">Higiene e Segurança no Trabalho</option>
                            <option value="Informática">Informática</option>
                            <option value="Inglês">Inglês</option>
                            <option value="Jornalismo">Jornalismo</option>
                            <option value="Liderança">Liderança</option>
                            <option value="Marketing Digital">Marketing Digital</option>
                            <option value="Oratória e Retórica">Oratória e Retórica</option>
                            <option value="Pastelaria">Pastelaria</option>
                            <option value="Pedagogia">Pedagogia</option>
                            <option value="Programação Web e Base de Dados">Programação Web e Base de Dados</option>
                            <option value="Redes de Computadores">Redes de Computadores</option>
                            <option value="Secretariado Executivo">Secretariado Executivo</option>
                        </select>
                    </div>
                    
                    <div class="row">
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="valor" class="form-label fw-bold">Valor do Curso</label>
                            <input type="text" class="form-control" id="valor" name="preco" placeholder="Valor do Curso" readonly required="required">
                        </div>

                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="duracao" class="form-label fw-bold">Duração do Curso</label>
                            <input type="text" class="form-control" id="duracao" name="duracao" placeholder="Duração do Curso" readonly required="required">
                        </div>

                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="periodo" class="form-label fw-bold">Período</label>
                            <select class="form-select" id="periodo" name="periodo" required="required">
                                <option selected="selected" disabled="disabled">Escolha o Período</option>
                                <option>Manhã</option>
                                <!-- Adicione mais opções de período aqui -->
                            </select>
                        </div>
                    </div>

                    <h4>Anexos:</h4>
                    <div class="row">
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="foto-di" class="form-label fw-bold">Documento de Identificação</label>
                            <input type="file" class="form-control" id="foto-di" name="foto-di" accept="image/*, .pdf" required="required">
                        </div>

                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="foto-passe" class="form-label fw-bold">Foto Tipo Passe</label>
                            <input type="file" class="form-control" id="foto-passe" name="foto-passe" accept="image/*" required="required">
                        </div>
                    </div>

                    <h4>Pagamento</h4>
                    <div class="row">
                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="valor_pago" class="form-label fw-bold">Valor Pago</label>
                            <input type="text" class="form-control" id="valor_pago" name="valor_pago" placeholder="Valor Pago" required="required" oninput="formatarMoeda(this)">
                        </div>

                        <div class="mb-3 animate__animated animate__fadeIn col">
                            <label for="Comprovativo" class="form-label fw-bold">Comprovativo</label>
                            <input type="file" class="form-control" id="Comprovativo" name="Imagem" accept="image/*, .pdf" required="required">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary"><b class="icon icon-paper-plane-o"> Enviar</b></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

    <script src="js/inscricao.js"></script>
    <script src="js/provincias-municipios.js"></script>

<?php
include_once "header-footer/footer.php";
?>
</html>