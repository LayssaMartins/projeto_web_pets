<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit;
}
include 'config.inc.php';

// Consulta sem o campo 'nome_animal'
$stmt = $pdo->query("SELECT id, nome, email, assunto, mensagem, data_envio
                     FROM candidatos_adocao
                     ORDER BY data_envio DESC");
$envios = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Admin - Formulários de Contato/Adocao</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
<div class="admin-container">
    <h2>Formulários Recebidos</h2>


<div class="admin-actions">
    <a class="btn" href="animais-admin.php">Voltar</a>
    <a class="btn" href="logout.php">Sair</a>
</div>

<table class="admin-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Assunto</th>
            <th>Mensagem</th>
            <th>Data</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($envios as $f): ?>
        <tr>
            <td><?= htmlspecialchars($f['id']) ?></td>
            <td><?= htmlspecialchars($f['nome']) ?></td>
            <td><?= htmlspecialchars($f['email']) ?></td>
            <td><?= htmlspecialchars($f['assunto']) ?></td>
            <td><?= htmlspecialchars($f['mensagem']) ?></td>
            <td><?= htmlspecialchars($f['data_envio']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


</div>
</body>
</html>
