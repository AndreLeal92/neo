<?php
include_once 'models/User.php';

class AuthController
{
    private $db;
    private $userModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->userModel = new User($db);
    }

    // Ação para exibir o formulário de login
    public function showLogin()
    {
        require_once 'views/auth/login.php';
    }
<?php
include_once 'models/User.php';

class AuthController
{
    private $db;
    private $userModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->userModel = new User($db);
    }

    // Exibe a visão de login
    public function showLogin()
    {
        require_once 'views/auth/login.php';  // Caminho para a view de login
    }

    // Processa o login
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user = $this->userModel->authenticate($username, $password);

            if ($user) {
                // Sessão iniciada e redirecionamento para o dashboard
                session_start();
                $_SESSION['username'] = $user['username'];
                header('Location: /index.php?action=dashboard');
            } else {
                echo "Usuário ou senha incorretos!";
            }
        }
    }

    // Processa o logout
    public function logout()
    {
        session_start();
        session_destroy(); // Destroi a sessão
        header('Location: /index.php?action=login');
    }
}
?>