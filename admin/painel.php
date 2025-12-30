
<!-- Protegendo Página Admin -->

<?php
session_start();

if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Painel Admin</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<h1>Painel Administrativo</h1>
<hr>

<p>Bem-vindo, <?= $_SESSION['admin']['nome']; ?>!</P>

<ul>
    <li><a href="#">Cadastrar Produto</a></li>
    <li><a href="#">Gerenciar Produtos</a></li>
    <li><a href="logout.php">Sair</a></li>
</ul>

</body>
</html>

<?php include "../includes/footer.php"; ?>
