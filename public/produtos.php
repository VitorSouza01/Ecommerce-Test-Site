
<!-- Importa o DB, Busca Todos os Produtos e Lista os Cards -->

<?php
require "../config/db.php";

include "../includes/header.php";

// Busca todos os produtos
$stmt = $conn->query("SELECT * FROM produtos");
$produtos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>E-commerce Simples</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <h1>Minha Loja</h1>
</header>

<h2 class="titulo">Produtos Disponíveis</h2>

<section class="produtos-container">
    <?php foreach ($produtos as $p): ?>
        <div class="produto-card">
            <img src="../<?= $p['imagem']; ?>" alt="<?= $p['nome']; ?>">
            <h2><?= $p['nome']; ?></h2>
            <p><?= $p['descricao']; ?></p>
            <span class="preco">R$ <?= number_format($p['preco'], 2, ',', '.'); ?></span>
            <button><a class="btn" href="add_carrinho.php?id=<?= $p['id']; ?>">Adicionar ao Carrinho</a></button>
        </div>
    <?php endforeach; ?>
</section>

</body>
</html>

<?php include "../includes/footer.php"; ?>
