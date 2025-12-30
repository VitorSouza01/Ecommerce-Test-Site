
<!-- Página do Carrinho -->

<?php
session_start();
$carrinho = $_SESSION['carrinho'] ?? [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Carrinho</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Carrinho de Compras</h1>
    <a href="produtos.php">Voltar para a loja</a>
</header>
<hr>

<section class="banner">
    <img src="../img/compras.jpg">
</section>

<div class="produtos-container">

<?php if (empty($carrinho)): ?>
    <p>Carrinho vazio.</p>
<?php else: ?>

<table class="tabela">
    <tr>
        <th>Produto</th>
        <th>Qtd</th>
        <th>Preço</th>
        <th>Subtotal</th>
        <th>Ação</th>
    </tr>

    <?php foreach ($carrinho as $item): 
        $subtotal = $item['preco'] * $item['quantidade'];
        $total += $subtotal;
    ?>
    <tr>
        <td><?= $item['nome']; ?></td>
        <td><?= $item['quantidade']; ?></td>
        <td>R$ <?= number_format($item['preco'],2,',','.'); ?></td>
        <td>R$ <?= number_format($subtotal,2,',','.'); ?></td>
        <td>
            <a href="remove_carrinho.php?id=<?= $item['id']; ?>">Remover</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

<h3>Total: R$ <?= number_format($total,2,',','.'); ?></h3>

<?php endif; ?>

</div>

</body>
</html>

<?php include "../includes/footer.php"; ?>
