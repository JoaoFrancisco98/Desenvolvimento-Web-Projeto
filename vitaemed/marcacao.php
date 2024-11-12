<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    $_SESSION['mensagem_erro'] = 'Você precisa estar logado para acessar esta página!';
    header('Location: login.php');
    exit();
}

// Conexão com o banco de dados
$host = 'localhost';
$dbname = 'bdvitaemed';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
    <title>Agendamento - Serviços Médicos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script>
        function validarFormulario() {
            var especialidadeSelect = document.getElementById("especialidade");
            var exameSelect = document.getElementById("exame");

            // Se uma especialidade for escolhida, desabilita o campo de exame
            if (especialidadeSelect.value != "") {
                exameSelect.disabled = true;
                exameSelect.value = "";  // Limpa o campo de exame se uma especialidade for escolhida
            } else {
                exameSelect.disabled = false;  // Se não houver especialidade, habilita o campo de exame
            }

            // Se um exame for escolhido, desabilita o campo de especialidade
            if (exameSelect.value != "") {
                especialidadeSelect.disabled = true;
                especialidadeSelect.value = "";  // Limpa o campo de especialidade se um exame for escolhido
            } else {
                especialidadeSelect.disabled = false;  // Se não houver exame, habilita o campo de especialidade
            }
        }

        function mostrarMensagemSucesso(event) {
            event.preventDefault();
            var botao = document.getElementById("btn-agendar");
            botao.innerHTML = "Agendamento realizado com sucesso!";
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2000);
        }
    </script>
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
                <li class="nav-item"><a class="nav-link" href="login.php">Acesso</a></li>
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

<main class="container my-4 d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <section class="col-md-6 col-lg-4">
        <h2 class="text-center mb-4">Agendamento</h2>
        <form action="processar_agendamento.php" method="POST" class="p-4 border rounded bg-light">
    <div class="form-group">
        <label for="especialidade">Especialidade (Clínica Médica)</label>
        <select class="form-control" id="especialidade" name="especialidade" onchange="validarFormulario()">
            <option value="">Escolha uma especialidade</option>
            <option value="Clínica Médica">Clínica Médica</option>
            <option value="Cardiologia">Cardiologia</option>
            <option value="Fisioterapia">Fisioterapia</option>
            <option value="Ginecologia">Ginecologia</option>
            <option value="Nutricionista">Nutricionista</option>
            <option value="Psicologia">Psicologia</option>
            <option value="Urologista">Urologista</option>
            <option value="Oftalmologia">Oftalmologia</option>
            <option value="Dermatologia">Dermatologia</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exame">Exame</label>
        <select class="form-control" id="exame" name="exame" onchange="validarFormulario()">
            <option value="">Escolha um exame</option>
            <option value="Hemograma Completo">Hemograma Completo</option>
            <option value="Endoscopia">Endoscopia</option>
            <option value="Tomografia">Tomografia</option>
            <option value="Colonoscopia">Colonoscopia</option>
            <option value="Raio-X">Raio-X</option>
            <option value="Ultrasonografia">Ultrasonografia</option>
        </select>
    </div>

    <div class="form-group">
    <label for="data_agendamento">Data</label>
    <input type="date" class="form-control" id="data_agendamento" name="data_agendamento" min="<?= date('Y-m-d'); ?>" required>
    </div>

    <div class="form-group">
        <label for="horario">Horário</label>
        <input type="time" class="form-control" id="horario" name="horario" required>
    </div>

    <button type="submit" class="btn btn-block" id="btn-agendar">Agendar</button>
</form>

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
