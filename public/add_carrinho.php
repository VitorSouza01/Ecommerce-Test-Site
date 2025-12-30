
<!-- Adiciona Produto na Sessão -->

<?php
session_start();
require "../config/db.php";

$id = (int) $_GET['id'];

// Busca produto no banco
$stmt = $conn->prepare("SELECT * FROM produtos WHERE id = ?");
$stmt->execute([$id]);
$produto = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$produto) {
    header("Location: index.php");
}

// Se carrinho não existir, cria
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

// Se produto já existe, soma quantidade
if (isset($_SESSION['carrinho'][$id])) {
    $_SESSION['carrinho'][$id]['quantidade']++;
} else {
    $_SESSION['carrinho'][$id] = [
        'id' => $produto['id'],
        'nome' => $produto['nome'],
        'preco' => $produto['preco'],
        'quantidade' => 1
    ];
}

header("Location: carrinho.php");
exit;
