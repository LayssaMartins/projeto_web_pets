<?php
// animais-altera-form.php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit;
}
include 'config.inc.php';

$id = $_GET['id'] ?? null;
if (!$id) die("ID do animal não informado.");

// Buscar dados do animal
$stmt = $pdo->prepare("SELECT * FROM adocao WHERE id = ?");
$stmt->execute([$id]);
$animal = $stmt->fetch(PDO::FETCH_ASSOC);
if(!$animal) die("Animal não encontrado.");

// Buscar fotos adicionais
$stmtFotos = $pdo->prepare("SELECT * FROM adocao_fotos WHERE id_animal = ?");
$stmtFotos->execute([$id]);
$fotos = $stmtFotos->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar Animal</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
<div class="admin-container">
<h2>Alterar Animal</h2>

<form action="animais-altera.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $animal['id'] ?>">


    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($animal['nome']) ?>" required>

    <label for="idade">Idade:</label>
    <input type="text" name="idade" id="idade" value="<?= htmlspecialchars($animal['idade']) ?>" required>

    <label for="sexo">Sexo:</label>
    <select name="sexo" id="sexo">
        <option value="Macho" <?= $animal['sexo'] == 'Macho' ? 'selected' : '' ?>>Macho</option>
        <option value="Fêmea" <?= $animal['sexo'] == 'Fêmea' ? 'selected' : '' ?>>Fêmea</option>
    </select>

    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao" rows="5"><?= htmlspecialchars($animal['descricao']) ?></textarea>

    <label>Fotos adicionais atuais:</label>
    <div style="display:flex; gap:10px; flex-wrap:wrap; margin-bottom:1rem;">
        <?php foreach($fotos as $foto): ?>
            <div style="position:relative; text-align:center;">
                <img src="../<?= htmlspecialchars($foto['caminho_foto']) ?>" alt="Foto" style="width:120px; height:120px; object-fit:cover; border-radius:8px;">
                <br>
                <a class="btn" href="animais-excluir-foto.php?id_foto=<?= $foto['id'] ?>&id_animal=<?= $animal['id'] ?>" onclick="return confirm('Deseja realmente excluir esta foto?');">Excluir</a>
            </div>
        <?php endforeach; ?>
    </div>

    <label>Adicionar novas fotos:</label>
    <input type="file" name="novas_fotos[]" multiple accept="image/*">

    <button type="submit" class="btn">Atualizar Animal</button>
</form>

<a href="animais-admin.php" class="btn" style="margin-top:10px;">Voltar</a>
</div>
</body>
</html>
