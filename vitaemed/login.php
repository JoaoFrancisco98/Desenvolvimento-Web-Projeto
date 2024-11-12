<?php
session_start();

if (isset($_SESSION['usuario_id'])) {
    header('Location: consulta.php');
    exit();
}

if (isset($_SESSION['mensagem_erro'])) {
    echo '<div class="alert alert-danger text-center">' . $_SESSION['mensagem_erro'] . '</div>';
    unset($_SESSION['mensagem_erro']);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Serviços Médicos</title>
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
                <li class="nav-item"><a class="nav-link" href="servico.php">Serviços</a></li>
                <li class="nav-item"><a class="nav-link" href="quemsomos.php">Quem somos</a></li>
                <li class="nav-item"><a class="nav-link" href="contato.php">Contato</a></li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['usuario_id'])): ?>
                        <a class="nav-link" href="consulta.php">Consulta</a>
                    <?php else: ?>
                        <a class="nav-link" href="login.php">Acesso</a>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main class="container my-4 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <section class="col-md-6 col-lg-4">
        <h2 class="text-center mb-4">Login</h2>
        <form action="processar_login.php" method="POST" class="p-4 border rounded bg-light">
    <div class="form-group">
        <label for="usuario">Usuário</label>
        <input type="text" class="form-control" id="usuario" name="usuario" required>
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <button type="submit" class="btn btn-block">Entrar</button>
    <p class="text-center mt-3">
        <a href="recuperar_senha.php">Esqueceu a senha?</a>
    </p>
    <button onclick="window.location.href='criarconta.php'" type="button" class="btn btn-block mt-3">Criar Conta</button>
</form>

    </section>
</main>

<footer class="text-center py-3 mt-5">
    <p>&copy; 2024 Serviços Médicos. Todos os direitos reservados.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
