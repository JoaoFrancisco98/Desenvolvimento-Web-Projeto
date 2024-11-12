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
    <title>Serivços - VitaeMed</title>
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
            <h2 class="text-center">Nossos Serviços</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/servicos.png" class="img-fluid servico" alt="servico">
                            <h3>Clínica médica</h3>
                            <p>É a área da medicina que trata de pacientes adultos,atuando na prevenção de doenças e na promoção da saúde.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>

                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/coracao.png" class="img-fluid servico" alt="servico">
                            <h3>Cardiologia</h3>
                            <p>O médico cardiologista diagnostica e trata doenças cardíacas e do sistema circulatório.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/osso.png" class="img-fluid servico" alt="servico">
                            <h3>Fisioterapia</h3>
                            <p>Diagnostica, previne e recupera pacientes com distúrbios cinéticos funcionais no corpo humano. </p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/ginecologia.png"class="img-fluid servico" alt="servico">
                            <h3>Ginecologia</h3>
                            <p>É a especialidade clínico-cirúrgica responsável pelo cuidado com a saúde da mulher.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/nutricionista.png" class="img-fluid servico" alt="servico">
                            <h3>Nutricionista</h3>
                            <p>É o profissional da área da saúde capacitado a atuar visando a segurança alimentar e a atenção dietética.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/psi.png" class="img-fluid servico" alt="servico">
                            <h3>Psicologia</h3>
                            <p>É o estudo do comportamento e funções mentais. O psicólogo é o profissional que atua estudando a mente humana.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/urologia.png" class="img-fluid servico" alt="servico">
                            <h3>Urologista</h3>
                            <p>Médico especialista no tratamento de doenças que afetam o sistema urinário e reprodutor masculino.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/oftalmologia.png" class="img-fluid servico" alt="servico">
                            <h3>Oftalmologia</h3>
                            <p>O médico oftalmologista é o especialista que acompanha as doenças relacionadas com os olhos e com a visão.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="./img/dermatologia.png" class="img-fluid servico" alt="servico">
                            <h3>Dermatologia</h3>
                            <p>Especialidade médica que previne e trata doenças e afecções relacionadas à pele, mucosas, cabelo e unha.</p>
                            <a href="marcacao.php" class="btn btn-custom">Agendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="text-white text-center py-3">
        <p>&copy; 2024 Serviços Médicos. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>