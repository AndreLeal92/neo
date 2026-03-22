<?php
// Definir o diretório base da aplicação
define('BASE_PATH', __DIR__);

// Iniciar a sessão e incluir os arquivos necessários
session_start();
require_once '../app/controllers/AuthController.php';
require_once '../app/controllers/DashboardController.php';
require_once '../app/models/User.php';
require_once '../includes/db.php';

// Definir a ação (login, logout, dashboard)
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

// Roteamento de ações
switch ($action) {
    case 'login':
        $controller = new AuthController($conn);
        $controller->showLogin();
        break;

    case 'logout':
        $controller = new AuthController($conn);
        $controller->logout();
        break;

    case 'dashboard':
        $controller = new DashboardController();
        $controller->index();
        break;

    default:
        // Caso a ação não seja reconhecida, redireciona para o login
        $controller = new AuthController($conn);
        $controller->showLogin();
        break;
}
?>