
<!-- Conexão com SQL Server -->

<?php
$server = "DESKTOP-GUMAG4D\SQLEXPRESS"; // ou o nome da sua instância
$db = "EcommerceDB";
$user = "ADMIN_TESTE";       // coloque seu usuário do SQL
$pass = "@Senha123@";    // sua senha do SQL

try {
    $conn = new PDO("sqlsrv:server=$server;Database=$db;", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conectado com sucesso!"; // opcional
} catch (PDOException $e) {
    die("Erro ao conectar: " . $e->getMessage());
}
?>
