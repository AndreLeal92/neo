<?php

class User
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    // Método para verificar se o usuário existe no banco de dados
    public function authenticate($username, $password)
    {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Verificar a senha
            if (password_verify($password, $user['password'])) {
                return $user; // Retorna o usuário se a senha estiver correta
            }
        }

        return false; // Retorna false se o usuário não for encontrado ou a senha for errada
    }
}
?>