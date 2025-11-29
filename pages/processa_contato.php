<?php
// ========================================================================
// 1. INCLUSÃO DA CONFIGURAÇÃO DO BANCO DE DADOS
// ========================================================================
// ATENÇÃO: Se o processa_contato.php estiver em /pages, o ../ volta para a raiz (config.inc.php)
include '../admin/config.inc.php'; 

// ========================================================================
// 2. VERIFICAÇÃO SE O MÉTODO DE REQUISIÇÃO É POST
// ========================================================================
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // ========================================================================
    // 3. COLETA E VALIDAÇÃO DOS DADOS DO FORMULÁRIO (Sanitização)
    // ========================================================================
    
    // Coleta dos campos usando filter_input para sanitização
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_SPECIAL_CHARS);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    
    // ID do animal, que pode ser NULL se for um contato geral
    $id_animal = filter_input(INPUT_POST, 'id_animal_adotado', FILTER_VALIDATE_INT);
    
    // --------------------------------------------------------
    // VALIDAÇÃO BÁSICA
    // --------------------------------------------------------
    if (!$nome || !$email || !$mensagem) {
        // Redireciona de volta com erro se campos essenciais faltarem
        // CORREÇÃO: Redireciona para index.php
        header("Location: index.php?status=erro&msg=Preencha todos os campos obrigatórios.#contato");
        exit();
    }
    
    // Se o ID do animal não for válido (ex: 0 ou false), define como NULL para o banco
    $id_animal = $id_animal ? $id_animal : null;

    // ========================================================================
    // 4. PREPARAÇÃO E EXECUÇÃO DA CONSULTA SQL (Inserção no Banco)
    // ========================================================================
    try {
        // Comando SQL para inserção com placeholders (prevenção de SQL Injection)
        $sql = "INSERT INTO candidatos_adocao (nome, email, assunto, mensagem, id_animal) 
                 VALUES (:nome, :email, :assunto, :mensagem, :id_animal)";
                
        $stmt = $pdo->prepare($sql);
        
        // Associação dos valores aos placeholders
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':assunto', $assunto);
        $stmt->bindParam(':mensagem', $mensagem);
        
        // Associa o ID do animal. Se for NULL, usa PDO::PARAM_NULL.
        if (is_null($id_animal)) {
            $stmt->bindParam(':id_animal', $id_animal, PDO::PARAM_NULL);
        } else {
            $stmt->bindParam(':id_animal', $id_animal, PDO::PARAM_INT);
        }

        // Executa a inserção no banco
        if ($stmt->execute()) {
            // Sucesso: Redireciona para a página principal (index.php) com status de sucesso
            // CORREÇÃO: Redireciona para index.php e rola para a seção de contato
            header("Location: index.php?status=sucesso#contato");
            exit();
        } else {
            // Erro na execução da consulta (raro, mas possível)
            // CORREÇÃO: Redireciona para index.php
            header("Location: index.php?status=erro&msg=Erro ao salvar no banco de dados.#contato");
            exit();
        }

    } catch (PDOException $e) {
        // Erro de conexão ou SQL
        // CORREÇÃO: Redireciona para index.php
        header("Location: index.php?status=erro&msg=Erro interno: " . $e->getMessage() . "#contato");
        exit();
    }

} else {
    // Se a página for acessada diretamente (sem POST), redireciona para o formulário
    // CORREÇÃO: Redireciona para index.php
    header("Location: index.php#contato");
    exit();
}