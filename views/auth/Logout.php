<?php
session_start();  // Inicia a sessão
session_destroy(); // Destroi a sessão, deslogando o usuário

// Redireciona para a página de login após o logout
header('Location: login.php');
exit();  // Garante que o código após o header não será executado
?>