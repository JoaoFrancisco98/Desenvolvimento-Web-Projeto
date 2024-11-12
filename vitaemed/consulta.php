<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.php');
    exit();
}

if (isset($_SESSION['mensagem_sucesso'])) {
    echo '<div class="alert alert-success text-center">' . $_SESSION['mensagem_sucesso'] . '</div>';
    unset($_SESSION['mensagem_sucesso']); // Remove a mensagem após exibir
}

// Conexão com o banco de dados
$host = 'localhost';
$dbname = 'bdvitaemed';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta de agendamentos de clínica médica
    $stmtClinica = $conn->prepare("SELECT * FROM agendamentos_clinica WHERE usuario_id = :usuario_id");
    $stmtClinica->bindParam(':usuario_id', $_SESSION['usuario_id']);
    $stmtClinica->execute();
    $agendamentosClinica = $stmtClinica->fetchAll(PDO::FETCH_ASSOC);

    // Consulta de exames agendados
    $stmtExames = $conn->prepare("SELECT * FROM agendamentos_exames WHERE usuario_id = :usuario_id");
    $stmtExames->bindParam(':usuario_id', $_SESSION['usuario_id']);
    $stmtExames->execute();
    $agendamentosExames = $stmtExames->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Agendadas - Serviços Médicos</title>
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAcesso" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Acesso
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownAcesso">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>

<?php
if (isset($_SESSION['mensagem_erro'])) {
    echo '<div class="alert alert-danger text-center">' . $_SESSION['mensagem_erro'] . '</div>';
    unset($_SESSION['mensagem_erro']);
}
?>

<main class="container my-4">
    <h2 class="text-center mb-4">Consultas Agendadas</h2>

    <!-- Seção de Clínica Médica -->
    <section>
        <h3>Clínica Médica</h3>
        <?php if (empty($agendamentosClinica)): ?>
            <p class="text-center">Você não tem agendamentos de clínico.</p>
        <?php else: ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Especialidade</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($agendamentosClinica as $clinica): ?>
                        <tr>
                            <td><?php echo $clinica['data']; ?></td>
                            <td><?php echo $clinica['horario']; ?></td>
                            <td><?php echo $clinica['especialidade']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </section>

    <!-- Seção de Exames -->
    <section>
        <h3>Exames</h3>
        <?php if (empty($agendamentosExames)): ?>
            <p class="text-center">Você não tem exames agendados.</p>
        <?php else: ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Horário</th>
                        <th>Tipo de Exame</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($agendamentosExames as $exame): ?>
                        <tr>
                            <td><?php echo $exame['data']; ?></td>
                            <td><?php echo $exame['horario']; ?></td>
                            <td><?php echo $exame['tipo_exame']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </section>
</main>

<footer class="text-white text-center py-3 mt-5">
    <p>&copy; 2024 Serviços Médicos. Todos os direitos reservados.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
