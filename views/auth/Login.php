<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">  <!-- Referência ao arquivo de CSS -->
    <title>Login</title>
</head>

<body>

<main class="container">

<form method="POST" action="includes/login.php">

<h1>Login</h1>

<div class="input-box">
    <input type="email" name="username" placeholder="Usuário" required>
    <i class='bx bxs-user'></i>
</div>

<div class="input-box">
    <input type="password" name="password" placeholder="Senha" required>
    <i class='bx bxs-lock-alt'></i>
</div>

<div class="Remember-forgot">

<label>
<input type="checkbox" name="remember"> Lembrar Minha Senha
</label>

<a href="#">Esqueceu sua Senha?</a>

</div>

<button type="submit">Login</button>

<div class="Register-link">
<p>Não Tem Uma Conta? <a href="#">Cadastre-se</a></p>
</div>

</form>

</main>

</body>
</html>