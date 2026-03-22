<?php
$servername = "localhost";  // Endereço do servidor MySQL
$username = "and28477_neo"; // Seu nome de usuário MySQL
$password = "5@X16sr&&K_y";    // Sua senha MySQL
$dbname = "and28477_neo";   // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>