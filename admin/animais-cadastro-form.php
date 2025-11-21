<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include 'config.inc.php';

$id = $_GET['id'] ?? null;
if(!$id) die("ID do animal não informado.");

// Buscar dados do animal
$stmt = $pdo->prepare("SELECT * FROM adocao WHERE id = ?");
$stmt->execute([$id]);
$animal = $stmt->fetch(PDO::FETCH_ASSOC);

// Buscar fotos adicionais
$stmtFotos = $pdo->prepare("SELECT * FROM adocao_fotos WHERE id_animal = ?");
$stmtFotos->execute([$id]);
$fotosAdicionais = $stmtFotos->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Animal</title>
<link rel="stylesheet" href="../assets/css/admin.css">
<style>
.foto-thumb { position: relative; display: inline-block; margin:5px; }
.foto-thumb img { width:100px; height:100px; object-fit:cover; border-radius:8px; }
.foto-thumb button { position:absolute; top:0; right:0; background:red; color:white; border:none; border-radius:50%; cursor:pointer; }
</style>
</head>
<body>
<div class="admin-container">
<h2>Editar Animal</h2>

<form action="animais-altera-processa.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $animal['id'] ?>">

    <label>Nome:</label>
    <input type="text" name="nome" value="<?= htmlspecialchars($animal['nome']) ?>" required>

    <label>Idade:</label>
    <input type="text" name="idade" value="<?= htmlspecialchars($animal['idade']) ?>" required>

    <label>Sexo:</label>
    <select name="sexo">
        <option value="Macho" <?= $animal['sexo']=='Macho'?'selected':'' ?>>Macho</option>
        <option value="Fêmea" <?= $animal['sexo']=='Fêmea'?'selected':'' ?>>Fêmea</option>
    </select>

    <label>Descrição:</label>
    <textarea name="descricao" rows="5"><?= htmlspecialchars($animal['descricao']) ?></textarea>

    <label>Imagem principal:</label>
    <?php if($animal['imagem']): ?>
        <div class="foto-thumb">
            <img src="../<?= $animal['imagem'] ?>" alt="Principal">
        </div>
    <?php endif; ?>
    <input type="file" name="imagem" accept="image/*">

    <label>Fotos adicionais:</label>
    <div>
        <?php foreach($fotosAdicionais as $foto): ?>
            <div class="foto-thumb">
                <img src="../<?= $foto['caminho_foto'] ?>" alt="Foto">
                <button type="button" onclick="excluirFoto(<?= $foto['id'] ?>)">×</button>
            </div>
        <?php endforeach; ?>
    </div>
    <input type="file" name="novas_fotos[]" multiple accept="image/*">

    <button type="submit" class="btn">Salvar Alterações</button>
</form>

<a href="animais-admin.php" class="btn" style="margin-top:10px;">Voltar</a>
</div>

<script>
function excluirFoto(fotoId){
    if(confirm('Deseja realmente excluir esta foto?')){
        window.location.href = 'animais-excluir-foto.php?id='+fotoId+'&animal=<?= $animal['id'] ?>';
    }
}
</script>
</body>
</html>
