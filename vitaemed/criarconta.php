<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Exames Médicos</title>
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

<main class="container my-4 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <section class="col-md-6 col-lg-5">
        <h2 class="text-center mb-4">Criar Conta</h2>
        <form action="banco/insere.php" method="POST" class="p-4 border rounded bg-light" onsubmit="mostrarMensagemSucesso(event)">
            <div class="form-group">
                <label for="nome">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="@email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" pattern="\d{10,11}" placeholder="ex: 11912345678" maxlength="11" required>
            </div>
            <div class="form-group">
                <label for="data_exame">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nasc" name="data_nasc" required>
            </div>
            <div class="form-group">
                <label for="nome">Senha</label>
                <input type="text" class="form-control" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn btn-block" id="btn-criarconta">Criar Conta</button>
        </form>
    </section>
    <script>
    document.getElementById("telefone").addEventListener("input", function (e) {
        // Remove qualquer caractere não numérico
        e.target.value = e.target.value.replace(/\D/g, "");
    });
</main>

<footer class="text-white text-center py-3 mt-5" style="background-color: #343a40;">
    <p>&copy; 2024 Serviços Médicos. Todos os direitos reservados.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
