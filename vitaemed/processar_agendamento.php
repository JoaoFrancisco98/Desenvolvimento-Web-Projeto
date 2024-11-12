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

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Verifica se o usuário está logado
        if (!isset($_SESSION['usuario_id'])) {
            $_SESSION['mensagem_erro'] = 'Você precisa estar logado para agendar!';
            header('Location: login.php');
            exit();
        }
    
        // Recebe os dados do formulário
        $usuario_id = $_SESSION['usuario_id'];  // Pega o ID do usuário logado
        $especialidade = $_POST['especialidade'] ?? '';
        $exame = $_POST['exame'] ?? '';
        $data = $_POST['data_agendamento'];  // Alterado de 'data_agendamento' para 'data'
        $horario = $_POST['horario'];
    
        // Verifica se foi preenchido uma especialidade ou exame
        if (!empty($especialidade) && empty($exame)) {
            // Inserir no banco de dados para agendamentos_clinica
            $stmt = $conn->prepare("INSERT INTO agendamentos_clinica (usuario_id, especialidade, data, horario) VALUES (:usuario_id, :especialidade, :data, :horario)");
            $stmt->bindParam(':usuario_id', $usuario_id);  // Adiciona o usuário_id na consulta
            $stmt->bindParam(':especialidade', $especialidade);
            $stmt->bindParam(':data', $data);
            $stmt->bindParam(':horario', $horario);
            $stmt->execute();
    
            $_SESSION['mensagem_sucesso'] = 'Agendamento realizado com sucesso!';
        } elseif (empty($especialidade) && !empty($exame)) {
            // Inserir no banco de dados para agendamentos_exames
            $stmt = $conn->prepare("INSERT INTO agendamentos_exames (usuario_id, tipo_exame, data, horario) VALUES (:usuario_id, :exame, :data, :horario)");
            $stmt->bindParam(':usuario_id', $usuario_id);  // Adiciona o usuário_id na consulta
            $stmt->bindParam(':exame', $exame);
            $stmt->bindParam(':data', $data);
            $stmt->bindParam(':horario', $horario);
            $stmt->execute();
    
            $_SESSION['mensagem_sucesso'] = 'Agendamento de exame realizado com sucesso!';
        } else {
            $_SESSION['mensagem_erro'] = 'Você deve escolher uma especialidade ou um exame!';
        }
    
        header('Location: consulta.php'); // Redireciona de volta para a página de agendamento
        exit();
    }
    
    

} catch (PDOException $e) {
    $_SESSION['mensagem_erro'] = 'Erro ao processar o agendamento: ' . $e->getMessage();
    header('Location: marcacao.php'); // Redireciona de volta para a página de agendamento
    exit();
}
?>
