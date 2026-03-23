<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Login</title>
</head>

<body>
  
    <div class="container">
        <h1>Login - Neofleet</h1>

        <!-- Mensagens de erro e sucesso -->
        <?php if ($success): ?>
            <div class="success-message"><?= $success; ?></div>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="error-message"><?= $error; ?></div>
        <?php endif; ?>

        <!-- Formulário de login -->
        <form method="POST" action="">
            <div class="input-box">
                <i class="bx bx-user"></i> <!-- Ícone de usuário -->
                <input type="text" id="usuario" name="usuario" placeholder="Usuário" required>
            </div>
            <div class="input-box">
                <i class="bx bx-lock"></i> <!-- Ícone de senha -->
                <input type="password" id="senha" name="senha" placeholder="Senha" required>
                <i class="bx bx-show" id="togglePassword" style="cursor: pointer;"></i> <!-- Ícone de olho -->
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>

    <script>
        // Script para alternar visibilidade da senha
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('senha');

        togglePassword.addEventListener('click', function() {
            // Alterna entre 'password' e 'text'
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            // Alterna o ícone do olho
            this.classList.toggle('bx-show');
            this.classList.toggle('bx-hide');
        });
    </script>
</body>

</html>