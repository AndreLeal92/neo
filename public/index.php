<?php
// Iniciar a sessão
session_start();

// Variáveis para armazenar mensagens de erro e sucesso
$error = '';
$success = '';

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura as variáveis de usuário e senha
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Validação simples para login (substitua com sua lógica de autenticação real)
    if ($usuario == 'admin' && $senha == '1234') {
        // Login bem-sucedido
        $_SESSION['usuario'] = $usuario; // Armazenar usuário na sessão
        $success = "Login bem-sucedido!";
    } else {
        // Se os dados estiverem incorretos
        $error = "Usuário ou senha incorretos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>

<body>
