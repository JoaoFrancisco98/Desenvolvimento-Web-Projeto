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
    <title>Exames - VitaeMed</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
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
        <section id="servicos">
            <h2 class="text-center">Nossos Exames</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/exame.png" class="img-fluid servico" alt="servico">
                            <h3>Hemograma Completo</h3>
                            <p>O hemograma completo é um dos exames de sangue mais realizados e pode ser usado para diagnosticar uma ampla variedade de condições.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/ecocardiograma.png" class="img-fluid servico" alt="servico">
                            <h3>Ecocardiograma</h3>
                            <p>É um exame de imagem não invasivo que utiliza ondas sonoras para obter imagens do coração.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/endoscopia.png" class="img-fluid servico" alt="servico">
                            <h3>Endoscopia</h3>
                            <p>É um exame que permite a visualização do sistema digestivo, em especial do esôfago, estômago e duodeno, para identificar alterações ou lesões.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/colonoscopia.png" class="img-fluid servico" alt="servico">
                            <h3>Colonoscopia</h3>
                            <p>É um exame que permite avaliar o interior do cólon e do reto, identificando problemas de saúde como câncer, úlceras, diverticulite, entre outros.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/raios.png" class="img-fluid servico" alt="servico">
                            <h3>Raio-X</h3>
                            <p>É um exame que usa radiação ionizante para captar imagens internas de diferentes partes do corpo.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/sonografia.png" class="img-fluid servico" alt="servico">
                            <h3>Ultrasonografia</h3>
                            <p>É um exame de imagem simples, indolor e que é realizado com o objetivo de observar órgãos e tecidos do nosso corpo em tempo real.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="text-center py-3">
        <p>&copy; 2024 Serviços Médicos. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
