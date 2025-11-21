<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit;
}

include 'config.inc.php';

$id = $_POST['id'] ?? null;
if(!$id) die("ID do animal não informado.");

$nome = $_POST['nome'] ?? '';
$idade = $_POST['idade'] ?? '';
$sexo = $_POST['sexo'] ?? '';
$descricao = $_POST['descricao'] ?? '';

// Atualizar imagem principal
if(isset($_FILES['imagem']) && $_FILES['imagem']['error']==0){
    $capa = 'uploads/'.uniqid().'_'.basename($_FILES['imagem']['name']);
    move_uploaded_file($_FILES['imagem']['tmp_name'], '../'.$capa);
    $stmt = $pdo->prepare("UPDATE adocao SET nome=?, idade=?, sexo=?, descricao=?, imagem=? WHERE id=?");
    $stmt->execute([$nome,$idade,$sexo,$descricao,$capa,$id]);
} else {
    $stmt = $pdo->prepare("UPDATE adocao SET nome=?, idade=?, sexo=?, descricao=? WHERE id=?");
    $stmt->execute([$nome,$idade,$sexo,$descricao,$id]);
}

// Inserir novas fotos adicionais
if(isset($_FILES['novas_fotos']) && !empty($_FILES['novas_fotos']['name'][0])){
    $stmt = $pdo->prepare("INSERT INTO adocao_fotos (id_animal, caminho_foto) VALUES (?,?)");
    foreach($_FILES['novas_fotos']['tmp_name'] as $index => $tmp_name){
        if($_FILES['novas_fotos']['error'][$index]==0){
            $arquivo = 'uploads/'.uniqid().'_'.$index.'_'.basename($_FILES['novas_fotos']['name'][$index]);
            move_uploaded_file($tmp_name, '../'.$arquivo);
            $stmt->execute([$id,$arquivo]);
        }
    }
}

header("Location: animais-admin.php?msg=atualizado");
exit;
?>
