<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: /index.php?action=login');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistema de Frotas</title>
</head>
<body>
    <h1>Bem-vindo, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Aqui você pode gerenciar sua frota de veículos, motoristas e manutenções.</p>
    <a href="/index.php?action=logout">Sair</a>
</body>
</html>