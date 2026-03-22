<?php
session_start();

// Se o usuário não estiver logado, redireciona para o login
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

echo "<h1>Bem-vindo, " . $_SESSION['username'] . "!</h1>";
echo "<a href='logout.php'>Sair</a>";
?>