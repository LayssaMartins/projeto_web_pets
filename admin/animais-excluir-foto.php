<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit;
}

include 'config.inc.php';

$id_foto = $_GET['id_foto'] ?? null;
$id_animal = $_GET['id_animal'] ?? null;

if(!$id_foto || !$id_animal){
    die("Parâmetros inválidos.");
}

// Buscar o caminho da foto para excluir o arquivo
$stmt = $pdo->prepare("SELECT caminho_foto FROM adocao_fotos WHERE id = ?");
$stmt->execute([$id_foto]);
$foto = $stmt->fetch(PDO::FETCH_ASSOC);

if($foto){
    if(file_exists('../'.$foto['caminho_foto'])){
        unlink('../'.$foto['caminho_foto']); // apaga o arquivo
    }
    // Apaga do banco
    $stmt = $pdo->prepare("DELETE FROM adocao_fotos WHERE id = ?");
    $stmt->execute([$id_foto]);
}

// Redireciona de volta para o formulário de alteração
header("Location: animais-altera-form.php?id=".$id_animal);
exit;
?>
