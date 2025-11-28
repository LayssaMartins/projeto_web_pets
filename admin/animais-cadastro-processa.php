<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location: login.php');
    exit;
}

include 'config.inc.php';

$nome  = $_POST['nome'] ?? '';
$idade = $_POST['idade'] ?? '';
$sexo  = $_POST['sexo'] ?? '';

if(!$nome || !$idade || !$sexo){
    die("Preencha todos os campos.");
}

// 1) Salvar o animal primeiro
$stmt = $pdo->prepare("INSERT INTO adocao (nome, idade, sexo) VALUES (?, ?, ?)");
$stmt->execute([$nome, $idade, $sexo]);

$animalId = $pdo->lastInsertId();

// 2) Verificar imagens
if(!empty($_FILES['imagens']['name'][0])){

    for($i = 0; $i < count($_FILES['imagens']['name']); $i++){

        $nomeArquivo = $_FILES['imagens']['name'][$i];
        $tmp = $_FILES['imagens']['tmp_name'][$i];

        if($tmp){

            $caminho = 'uploads/' . uniqid() . '-' . $nomeArquivo;

            move_uploaded_file($tmp, '../' . $caminho);

            // salvar imagem na tabela imagens_animais
            $stmtImg = $pdo->prepare("INSERT INTO imagens_animais (animal_id, caminho) VALUES (?, ?)");
            $stmtImg->execute([$animalId, $caminho]);
        }
    }
}

header("Location: animais-lista.php");
exit;
