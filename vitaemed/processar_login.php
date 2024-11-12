<?php
session_start();

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

if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['password'];

    // Prepara a consulta para verificar se o usuário existe
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();

    // Verifica se o usuário foi encontrado
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($senha, $user['senha'])) {
        // Se o login for bem-sucedido, armazena os dados do usuário na sessão
        $_SESSION['usuario_id'] = $user['id'];
        $_SESSION['usuario_nome'] = $user['nome'];
        // Define a mensagem de sucesso
        $_SESSION['mensagem_sucesso'] = 'Bem-vindo! Login realizado com sucesso.';
        // Redireciona para a página de consulta
        header('Location: consulta.php');
        exit();
    } else {
        // Se o login falhar, exibe uma mensagem de erro
        $_SESSION['mensagem_erro'] = 'Usuário ou senha incorretos!';
        header('Location: login.php');
        exit();
    }
} else {
    // Se não houver dados no POST, redireciona para o login
    $_SESSION['mensagem_erro'] = 'Campos de usuário e senha são obrigatórios!';
    header('Location: login.php');
    exit();
}
?>
