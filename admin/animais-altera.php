<?php
session_start();
if (!isset($_SESSION['admin'])) {
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

// Buscar fotos adicionais
$stmtFotos = $pdo->prepare("SELECT * FROM adocao_fotos WHERE id_animal = ?");
$stmtFotos->execute([$id]);
$fotos = $stmtFotos->fetchAll(PDO::FETCH_ASSOC);
?>

<form action="animais-altera-processa.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $animal['id'] ?>">

    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($animal['nome']) ?>" required>

    <label for="idade">Idade:</label>
    <input type="text" name="idade" id="idade" value="<?= htmlspecialchars($animal['idade']) ?>" required>

    <label for="sexo">Sexo:</label>
    <select name="sexo" id="sexo">
        <option value="Macho" <?= $animal['sexo']=='Macho'?'selected':'' ?>>Macho</option>
        <option value="Fêmea" <?= $animal['sexo']=='Fêmea'?'selected':'' ?>>Fêmea</option>
    </select>

    <label for="imagem">Imagem principal:</label>
    <input type="file" name="imagem" id="imagem" accept="image/*">
    <?php if($animal['imagem']): ?>
        <img src="../<?= $animal['imagem'] ?>" alt="Imagem principal" style="width:150px;margin-top:5px;">
    <?php endif; ?>

    <label for="novas_fotos">Fotos adicionais:</label>
    <input type="file" name="novas_fotos[]" id="novas_fotos" multiple accept="image/*">
    <?php foreach($fotos as $foto): ?>
        <img src="../<?= $foto['caminho_foto'] ?>" alt="Foto" style="width:100px;margin-top:5px;">
    <?php endforeach; ?>

    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao" rows="5"><?= htmlspecialchars($animal['descricao']) ?></textarea>

    <button type="submit">Atualizar Animal</button>
</form>
