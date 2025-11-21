<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include 'config.inc.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $descricao = $_POST['descricao'];

    // Upload da imagem principal
    $nome_imagem = null;
    if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == 0){
        $ext = pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $nome_imagem = 'uploads/' . uniqid() . '.' . $ext;
        move_uploaded_file($_FILES['imagem']['tmp_name'], '../' . $nome_imagem);
    }

    // Inserir animal
    $stmt = $pdo->prepare("INSERT INTO adocao (nome, idade, sexo, descricao, imagem) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nome, $idade, $sexo, $descricao, $nome_imagem]);
    $id_animal = $pdo->lastInsertId();

    // Fotos adicionais
    if(isset($_FILES['novas_fotos'])){
        foreach($_FILES['novas_fotos']['tmp_name'] as $key => $tmp_name){
            if($_FILES['novas_fotos']['error'][$key] == 0){
                $ext = pathinfo($_FILES['novas_fotos']['name'][$key], PATHINFO_EXTENSION);
                $foto_nome = 'uploads/' . uniqid() . '.' . $ext;
                move_uploaded_file($tmp_name, '../' . $foto_nome);

                $stmt2 = $pdo->prepare("INSERT INTO adocao_fotos (id_animal, caminho_foto) VALUES (?, ?)");
                $stmt2->execute([$id_animal, $foto_nome]);
            }
        }
    }

    header('Location: animais-admin.php?msg=cadastrado');
    exit;
}
?>
