<?php
// animais-cadastro-form.php
session_start();
if(!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
include 'config.inc.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Animal</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
<div class="admin-container">
    <h1>Cadastrar Animal</h1>

    <form action="animais-cadastro.php" method="POST" enctype="multipart/form-data">
        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Idade:</label>
        <input type="text" name="idade" required>

        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="">Selecione</option>
            <option value="Macho">Macho</option>
            <option value="Fêmea">Fêmea</option>
        </select>

        <label>Descrição:</label>
        <textarea name="descricao" rows="4"></textarea>

        <label>Imagens (várias):</label>
        <input type="file" name="novas_fotos[]" multiple accept="image/*">

        <button type="submit" class="btn">Cadastrar</button>
    </form>

    <a href="animais-admin.php" class="btn" style="margin-top:10px; display:inline-block;">Voltar</a>
</div>
</body>
</html>
