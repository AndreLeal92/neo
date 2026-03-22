<?php
session_start();
include('includes/db.php'); // Conexão com o banco de dados

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Proteger contra SQL Injection
    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);

    // Consulta SQL para verificar se o usuário existe no banco de dados
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    // Se o usuário for encontrado
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verificar se a senha está correta
        if ($password == $user['password']) {
            $_SESSION['username'] = $user['username']; // Salvar o nome de usuário na sessão
            header('Location: index.php'); // Redirecionar para a página inicial após o login
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Neo</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="">
            <label for="username">Usuário:</label>
            <input type="text" name="username" id="username" required>
            <label for="password">Senha:</label>
            <input type="password" name="password" id="password" required>
            <button type="submit">Entrar</button>
        </form>
    </div>

</body>
</html>