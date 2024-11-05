<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - VitaeMed</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap-grid.css">
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
                </ul>
            </nav>
        </div>
    </header>
    <main class="container my-4">
        <div class="row">
        <section class="col-md-6">
            <h2>Contato</h2>
            <form>
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
                </div>
                <div class="form-group">
                    <label for="assunto">Assunto:</label>
                    <input type="text" class="form-control" id="assunto" placeholder="Digite o assunto" required>
                </div>
                <div class="form-group">
                    <label for="mensagem">Mensagem:</label>
                    <textarea class="form-control" id="mensagem" rows="4" placeholder="Digite sua mensagem" required></textarea>
                </div>
                <button type="submit" class="btn">Enviar</button>
            </form>
        </section>
        <section class=" contatos col-md-6">
            <h3 class="text-center">Telefone e Whatsapp</h3>
            <p class="text-center">(21) 97980-4026</p>
            <h3 class="text-center">Horário de funcionamento</h3>
            <p class="text-center">Segunda a Sexta: das 7:30h às 17h
                <br> Sábados: das 7:30h às 12h</p>
            <h3 class="text-center">E-Mail</h3>
            <p class="text-center">contato@vitaemed.com</p>
        </section>
    </div>
    </main>
    <footer class="text-center py-3">
        <p>&copy; 2024 Serviços Médicos. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>