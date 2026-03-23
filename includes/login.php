<?php
session_start(); // Inicia a sessão

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conexão com o banco de dados (ajuste conforme necessário)
    $host = 'localhost';
    $db = 'and07952_neo_fleet_saas';
    $user = 'and07952_neo_fleet_saas_user';
    $pass = 'SZDr9(QKsKqO';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta para verificar o usuário e a senha
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :username LIMIT 1");
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verifica se o usuário foi encontrado e se a senha está correta
        if ($user && password_verify($password, $user['password'])) {
            // Se o login for bem-sucedido, cria a sessão
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['email'];

            // Se o usuário optou por lembrar a senha
            if (isset($_POST['remember'])) {
                setcookie('username', $username, time() + (3600 * 24 * 30), "/"); // Lembrar por 30 dias
            }

            // Redireciona para o dashboard após o login bem-sucedido
            header('Location: ../index.php');
            exit;
        } else {
            // Caso o login falhe
            echo '<p style="color: red;">Usuário ou senha incorretos!</p>';
        }
    } catch (PDOException $e) {
        echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    }
}
?>