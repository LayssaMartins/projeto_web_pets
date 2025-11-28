<?php
// animais-excluir.php
session_start();
if(!isset($_SESSION['admin'])){ header('Location: login.php'); exit; }
include 'config.inc.php';

$animalId = $_GET['id'] ?? null;
if(!$animalId) die("ID do animal não informado.");

// Pegar todas as fotos do animal
$stmt = $pdo->prepare("SELECT caminho_foto FROM adocao_fotos WHERE id_animal = ?");
$stmt->execute([$animalId]);
$fotos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Apagar arquivos físicos
foreach($fotos as $foto){
    $path = '../' . $foto['caminho_foto'];
    if (file_exists($path)) unlink($path);
}

// Apagar registros de fotos do banco
$stmt = $pdo->prepare("DELETE FROM adocao_fotos WHERE id_animal = ?");
$stmt->execute([$animalId]);

// Apagar o registro do animal (se tiver coluna imagem principal, também apagar)
$stmt = $pdo->prepare("SELECT imagem FROM adocao WHERE id = ?");
$stmt->execute([$animalId]);
$animal = $stmt->fetch(PDO::FETCH_ASSOC);
if($animal && !empty($animal['imagem'])){
    $p = '../' . $animal['imagem'];
    if(file_exists($p)) unlink($p);
}

// Apagar o registro do animal
$stmt = $pdo->prepare("DELETE FROM adocao WHERE id = ?");
$stmt->execute([$animalId]);

header("Location: animais-admin.php");
exit;
