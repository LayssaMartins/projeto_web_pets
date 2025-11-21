<?php
session_start();
if(!isset($_SESSION['admin'])){ header('Location: login.php'); exit; }

include 'config.inc.php';

$fotoId = $_GET['id'] ?? null;
$animalId = $_GET['animal'] ?? null;

if(!$fotoId || !$animalId) die("Dados incompletos.");

// Pegar caminho da foto
$stmt = $pdo->prepare("SELECT caminho_foto FROM adocao_fotos WHERE id=?");
$stmt->execute([$fotoId]);
$foto = $stmt->fetch(PDO::FETCH_ASSOC);

if($foto){
    // Apagar arquivo físico
    if(file_exists('../'.$foto['caminho_foto'])){
        unlink('../'.$foto['caminho_foto']);
    }
    // Apagar do banco
    $stmt = $pdo->prepare("DELETE FROM adocao_fotos WHERE id=?");
    $stmt->execute([$fotoId]);
}

header("Location: animais-altera-form.php?id=$animalId");
exit;
?>
