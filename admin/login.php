
<!-- Tela de Login Admin -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h2>Login Administrativo</h2>
<hr><br>

<form action="autenticar.php" method="POST" class="login-form">
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <button type="submit">Entrar</button>
</form>

</body>
</html>

<br>
<?php include "../includes/footer.php"; ?>
