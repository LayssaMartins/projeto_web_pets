<?php
// animais-cadastro.php
session_start();
if(!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
include 'config.inc.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: animais-cadastro-form.php');
    exit;
}

$nome = trim($_POST['nome'] ?? '');
$idade = trim($_POST['idade'] ?? '');
$sexo = trim($_POST['sexo'] ?? '');
$descricao = trim($_POST['descricao'] ?? '');

if (!$nome || !$idade || !$sexo) {
    die('Preencha os campos obrigatórios.');
}

// Inserir animal
$stmt = $pdo->prepare("INSERT INTO adocao (nome, idade, sexo, descricao) VALUES (?, ?, ?, ?)");
$stmt->execute([$nome, $idade, $sexo, $descricao]);
$animalId = $pdo->lastInsertId();

// Upload de múltiplas fotos
if (!empty($_FILES['novas_fotos']['name'][0])) {

    // garante que pasta exista
    $uploadDir = '../uploads/';
    if (!is_dir($uploadDir)) mkdir($uploadDir, 0777, true);

    for ($i=0; $i < count($_FILES['novas_fotos']['name']); $i++) {
        if ($_FILES['novas_fotos']['error'][$i] === UPLOAD_ERR_OK) {
            $tmp = $_FILES['novas_fotos']['tmp_name'][$i];
            $origName = basename($_FILES['novas_fotos']['name'][$i]);
            $ext = pathinfo($origName, PATHINFO_EXTENSION);
            $filename = uniqid('img_') . '.' . $ext;
            $destRel = 'uploads/' . $filename; // caminho relativo que será salvo no DB
            $destFull = '../' . $destRel;

            if (move_uploaded_file($tmp, $destFull)) {
                $stmtImg = $pdo->prepare("INSERT INTO adocao_fotos (id_animal, caminho_foto) VALUES (?, ?)");
                $stmtImg->execute([$animalId, $destRel]);
            }
        }
    }
}

header('Location: animais-admin.php?msg=cadastrado');
exit;
