<?php

session_start();

// Conexão com o banco de dados
$host = 'localhost';
$dbname = 'bdvitaemed';
$username = 'root'; // Nome do usuário do banco
$password = ''; // Senha do banco

try {
    // Criar a conexão PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Receber dados do formulário
    $usuario = $_POST['usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nasc = $_POST['data_nasc'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografando a senha

    // Preparar a consulta SQL
    $sql = "INSERT INTO usuarios (usuario, nome, email, telefone, data_nasc, senha) 
            VALUES (:usuario, :nome, :email, :telefone, :data_nasc, :senha)";
    
    $stmt = $conn->prepare($sql);
    // Vincular os parâmetros
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefone', $telefone);
    $stmt->bindParam(':data_nasc', $data_nasc);
    $stmt->bindParam(':senha', $senha);

    // Executar a consulta
    $stmt->execute();

    // Mensagem de sucesso
    $_SESSION['mensagem_sucesso'] = 'Conta criada com sucesso!';

    // Redirecionando para a página index
    header('Location: ../index.php');
    exit();

} catch (PDOException $e) {
    // Em caso de erro, exibe a mensagem
    echo "Erro ao criar a conta: " . $e->getMessage();
}

?>
