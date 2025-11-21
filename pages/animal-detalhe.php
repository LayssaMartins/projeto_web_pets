<?php
include '../admin/config.inc.php';

if(!isset($_GET['id'])) {
    echo "<p>Animal não encontrado.</p>";
    exit;
}

$id = (int)$_GET['id'];

// Buscar dados do animal
$stmt = $pdo->prepare("SELECT * FROM adocao WHERE id=?");
$stmt->execute([$id]);
$animal = $stmt->fetch(PDO::FETCH_ASSOC);

if(!$animal) {
    echo "<p>Animal não encontrado.</p>";
    exit;
}

// Buscar fotos adicionais
$stmtFotos = $pdo->prepare("SELECT caminho_foto FROM adocao_fotos WHERE id_animal=?");
$stmtFotos->execute([$id]);
$fotos = $stmtFotos->fetchAll(PDO::FETCH_ASSOC);

// Se não houver fotos adicionais, usar só a capa
if(count($fotos) === 0) {
    $fotos[] = ['caminho_foto' => $animal['imagem']];
} else {
    // Colocar a capa como primeira imagem
    array_unshift($fotos, ['caminho_foto' => $animal['imagem']]);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($animal['nome']) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .carousel-item-modal {
            position: absolute;
            top:0; left:0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 0.5s ease-in-out;
            opacity: 0;
        }
        .carousel-item-modal.active { opacity: 1; }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 py-10">

<div class="max-w-3xl mx-auto p-6 bg-white dark:bg-gray-800 rounded-2xl shadow-xl">

    <!-- Carrossel -->
    <div class="relative w-full h-80 mb-6 overflow-hidden rounded-xl shadow-lg">
        <?php foreach($fotos as $index => $foto): ?>
            <img src="../<?= $foto['caminho_foto'] ?>" class="carousel-item-modal <?= $index === 0 ? 'active' : '' ?>">
        <?php endforeach; ?>

        <button class="prev absolute left-3 top-1/2 -translate-y-1/2 bg-[#7CBFD6] hover:bg-[#2F6C86] 
                text-white px-4 py-2 rounded-full shadow-lg">&lt;</button>
        <button class="next absolute right-3 top-1/2 -translate-y-1/2 bg-[#7CBFD6] hover:bg-[#2F6C86] 
                text-white px-4 py-2 rounded-full shadow-lg">&gt;</button>
    </div>

    <!-- Informações -->
    <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-100 mb-4"><?= htmlspecialchars($animal['nome']) ?></h1>
    <p class="text-gray-700 dark:text-gray-300 mb-2"><strong>Sexo:</strong> <?= htmlspecialchars($animal['sexo']) ?></p>
    <p class="text-gray-700 dark:text-gray-300 mb-2"><strong>Idade:</strong> <?= htmlspecialchars($animal['idade']) ?></p>
    <p class="text-gray-700 dark:text-gray-300 mt-3 leading-relaxed"><?= nl2br(htmlspecialchars($animal['descricao'])) ?></p>

    <a href="index.php#adocao">
        <button class="mt-6 w-full bg-[#7CBFD6] hover:bg-[#2F6C86] text-white font-bold py-3 rounded-lg transition">
            Voltar
        </button>
    </a>
</div>

<script>
    const items = document.querySelectorAll('.carousel-item-modal');
    let current = 0;

    const showSlide = (index) => {
        items.forEach((item, i) => item.classList.toggle('active', i === index));
    };

    document.querySelector('.prev').addEventListener('click', () => {
        current = (current - 1 + items.length) % items.length;
        showSlide(current);
    });

    document.querySelector('.next').addEventListener('click', () => {
        current = (current + 1) % items.length;
        showSlide(current);
    });
</script>

</body>
</html>
