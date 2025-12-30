
<!-- Teste de Conexão com o Banco de Dados -->

<?php
require "../config/db.php";

$stmt = $conn->query("SELECT TOP 1 * FROM Produtos");
$produto = $stmt->fetch();

echo "<h3>Conexão funcionando! Produto encontrado:</h3>";
echo "<prev>";
print_r($produto);
echo "<prev>";
?>
