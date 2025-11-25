<?php
// animais-excluir-foto.php
session_start();
if(!isset($_SESSION['admin'])){ header('Location: login.php'); exit; }
include 'config.inc.php';

$idFoto = $_GET['id_foto'] ?? null;
$idAnimal = $_GET['id_animal'] ?? null;

if(!$idFoto || !$idAnimal) die("Dados incompletos.");

// Pegar caminho da foto
$stmt = $pdo->prepare("SELECT caminho_foto FROM adocao_fotos WHERE id = ?");
$stmt->execute([$idFoto]);
$caminho = $stmt->fetchColumn();

if($caminho){
    $arquivo = '../' . $caminho;
    if(file_exists($arquivo)) unlink($arquivo);
}

// Apagar do banco
$stmt = $pdo->prepare("DELETE FROM adocao_fotos WHERE id = ?");
$stmt->execute([$idFoto]);

header("Location: animais-altera-form.php?id=" . urlencode($idAnimal));
exit;
