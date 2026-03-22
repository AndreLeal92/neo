<?php
// Defina as credenciais do banco de dados
$servername = "localhost";  // ou o endereço do banco de dados (pode ser "localhost" para HostGator)
$username = "and07952_neo_fleet_saas_user";  // Nome de usuário do banco de dados
$password = "SZDr9(QKsKqO";  // Sua senha de banco de dados
$dbname = "and07952_neo_fleet_saas";  // Nome do banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>