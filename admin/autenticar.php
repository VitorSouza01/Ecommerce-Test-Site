
<!-- Autenticação Admin -->

<?php
session_start();

require_once '../config/db.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$email]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['admin'] = [
        'id' => $usuario['id'],
        'nome' => $usuario['nome'],
        'email' => $usuario['email']
    ];
    header("Location: painel.php");
    exit;
}

echo "Login ou senha inválidos.";
