<?php
session_start(); // Inicia a sessão

// Verifica se o usuário está logado
if (isset($_SESSION['usuario_id'])) {
    // O usuário está logado, exiba o conteúdo específico para ele
    $usuario_nome = $_SESSION['usuario_nome']; // Exemplo de nome armazenado na sessão
} else {
    // O usuário não está logado, exiba conteúdo para visitantes não autenticados
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - VitaeMed</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <!-- Barra de Navegação -->
    <header class="text-center py-3">
        <div class="container">
            <img src="./img/logo.png" class="img-fluid logo" alt="Logo">
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Serviços
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="servico.php">Clínica Médica</a>
                            <a class="dropdown-item" href="exames.php">Exames</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="quemsomos.php">Quem somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Acesso</a></li>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container my-4">
        <div class="row">
            <section class="col-md-4">
                <p>Clínica VitaeMed</p>
                <h1>Onde a saúde encontra <br> o cuidado</h1>
                <p>A VitaeMed é uma rede de clínicas médicas moderna que oferece atendimento especializado e humanizado, com qualidade superior a preços acessíveis, em clínicas de fácil acesso.</p>
            </section>
            <section class="col-md-2"></section>
            <img src="./img/medico.png" class="img-fluid medico" alt="medico">
        </div>       

        <!-- Carrossel de Fotos -->
        <div id="carouselExample" class="carousel slide my-4" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/dia-do-medico.jpeg" class="d-block w-100" alt="Imagem 1">
                </div>
                <div class="carousel-item">
                    <img src="./img/medico-do-trabalho-1.png" class="d-block w-100" alt="Imagem 2">
                </div>
                <div class="carousel-item">
                    <img src="./img/original-a5ec3913e1ae9cb2c075b3f2ab99e797.jpg" class="d-block w-100" alt="Imagem 3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

        <h1 class="text-center text-black">Atendimento em diversas especialidades</h1>

        <div class="row">
            <!-- Cards com os serviços -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="./img/clinica_medica.png" class="img-fluid servico" alt="servico">
                        <h3>Clínica Médica</h3>
                        <p>Área da medicina que trata de pacientes adultos, atuando na prevenção de doenças e na promoção da saúde.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="./img/cardiologia.png" class="img-fluid servico" alt="servico">
                        <h3>Cardiologia</h3>
                        <p>O médico cardiologista diagnostica e trata doenças cardíacas e do sistema circulatório.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="./img/psicologia.png" class="img-fluid servico" alt="servico">
                        <h3>Psicologia</h3>
                        <p>Estudo do comportamento e funções mentais. O psicólogo atua estudando os aspectos relacionados à mente humana.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botão para agendamento -->
        <section class="text-center">
            <button class="btn" onclick="window.location.href='servico.php'">Saiba Mais</button>
        </section>

        <!-- Contato -->
        <section id="contato" class="text-center">
            <h2>Fale conosco</h2>
            <p>Entre em contato pelo telefone <strong>(21) 97980-4026</strong> ou pelo e-mail <strong>contato@vitaemed.com</strong></p>
            <button class="btn" onclick="window.location.href='contato.php'">Enviar Mensagem</button>
        </section>
    </main>

    <!-- Rodapé -->
    <footer class="text-white text-center py-3">
        <p>&copy; 2024 Serviços Médicos. Todos os direitos reservados.</p>
    </footer>

    <!-- Scripts JavaScript necessários para o funcionamento do Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> <!-- jQuery completo -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script> <!-- Popper.js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> <!-- Bootstrap JS -->
</body>
</html>
