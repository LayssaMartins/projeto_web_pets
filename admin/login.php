<?php
session_start();
include 'config.inc.php';

$erro = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Validação simples
    if ($usuario === 'admin' && $senha === '1234') {
        $_SESSION['admin'] = true;
        header('Location: animais-admin.php');
        exit;
    } else {
        $erro = 'Usuário ou senha incorretos!';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>

<div class="admin-container login-container">
    <h2>Login do Admin</h2>

    <?php if($erro): ?>
        <div class="alert"><?= $erro ?></div>
    <?php endif; ?>

    <form method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>

        <button type="submit" class="btn">Entrar</button>
    </form>
</div>

</body>
</html>
