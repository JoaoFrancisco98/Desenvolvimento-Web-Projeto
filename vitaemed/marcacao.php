<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Exames Médicos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script>
        // Função que exibe a mensagem de sucesso no botão e redireciona após 2 segundos
        function mostrarMensagemSucesso(event) {
            event.preventDefault();

            var botao = document.getElementById("btn-agendar");
            botao.innerHTML = "Agendamento realizado com sucesso!";

            // Após 2 segundos, redireciona o usuário para a página inicial
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2000); // Atraso de 2 segundos
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
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container my-4">
    <div class="row">
    <section class="col-md-6">
        <h2 class="text-center">Agendamento</h2>
        <form action="processar_agendamento.php" method="POST" class="p-4 border rounded bg-light" onsubmit="mostrarMensagemSucesso(event)">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" pattern="\d{10,11}" placeholder="Somente números" required>
            </div>
            <div class="form-group">
                <label for="data_exame">Data</label>
                <input type="date" class="form-control" id="data_exame" name="data_exame" required>
            </div>
            <div class="form-group">
                <label for="data_exame">Horário</label>
                <input type="time" class="form-control" id="data_exame" name="data_exame" required>
            </div>
            <div class="form-group">
                <label for="observacoes">Observações (opcional)</label>
                <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-custom btn-block" id="btn-agendar">Agendar Exame</button>
        </form>
    </section>
    </main>

    <footer class="text-white text-center py-3 mt-5" style="background-color: #343a40;">
        <p>&copy; 2024 Serviços Médicos. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
