<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit;
}
include 'config.inc.php';

// Buscar todos os animais
$stmt = $pdo->query("SELECT * FROM adocao ORDER BY nome");
$animais = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Admin - Animais Cadastrados</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>

<div class="admin-container">
    <h2>Animais Cadastrados</h2>

    <div class="admin-actions">
        <a class="btn" href="animais-cadastro-form.php">Adicionar Novo</a>
        <a class="btn" href="logout.php">Sair</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Sexo</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($animais as $animal): ?>
            <tr>
                <td>
                    <?php if($animal['imagem'] && file_exists("../".$animal['imagem'])): ?>
                        <img src="../<?= $animal['imagem'] ?>" class="img-preview">
                    <?php else: ?>
                        Sem foto
                    <?php endif; ?>
                </td>
                <td><?= htmlspecialchars($animal['nome']) ?></td>
                <td><?= htmlspecialchars($animal['idade']) ?></td>
                <td><?= htmlspecialchars($animal['sexo']) ?></td>
                <td><?= htmlspecialchars($animal['descricao']) ?></td>
                <td>
                    <a class="btn" href="animais-altera-form.php?id=<?= $animal['id'] ?>">Editar</a>
                    <a class="btn" href="animais-excluir.php?id=<?= $animal['id'] ?>" onclick="return confirm('Deseja realmente excluir?')">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
