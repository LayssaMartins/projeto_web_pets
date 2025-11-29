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

// Sempre garantir que a capa é adicionada apenas uma vez
$fotosFiltradas = [];

// Adiciona capa se existir
if(!empty($animal['imagem'])) {
    $fotosFiltradas[] = ['caminho_foto' => $animal['imagem']];
}

// Adiciona somente fotos válidas
foreach($fotos as $f) {
    if(!empty($f['caminho_foto'])) {
        $fotosFiltradas[] = $f;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($animal['nome']) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
/* ---------------------------------------------------- */
/* PALETA DE CORES */
/* Primary: #1E4D8B (Azul) - Botões */
/* Secondary: #FF8A3D (Laranja) - Neon, Destaque, Hover */
/* ---------------------------------------------------- */

/* Fundo do corpo (Light Mode) */
body {
    background-color: #F7F9FC;
}

/* Fundo do card/carrossel (Light Mode) */
.card-bg {
    background-color: #FFFFFF;
}

/* Texto */
.text-primary {
    color: #333333;
}
.text-secondary {
    color: #555555;
}

/* Botões - Cor Primária: #1E4D8B */
.btn-primary {
    background-color: #1E4D8B;
    color: white;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

/* Hover do Botão - Cor Secundária: #FF8A3D */
.btn-primary:hover {
    background-color: #FF8A3D;
    box-shadow: 0 0 10px rgba(255, 138, 61, 0.6), 
                0 0 20px rgba(255, 138, 61, 0.4); 
}

/* Efeito Borda Neon Laranja (FORÇADO e VISÍVEL no box principal) */
.shadow-border-neon-orange {
    border-radius: 16px; 
    transition: 0.3s ease;
    box-shadow:
        0 0 15px 5px rgba(255,138,61,0.65), 
        0 0 25px 8px rgba(255,138,61,0.55), 
        0 0 40px 10px rgba(255,138,61,0.45), 
        0 0 60px 15px rgba(255,138,61,0.35);
}

/* Estilo do carrossel */
.carousel-item-modal {
    position: absolute;
    inset: 0;
    width: 100%;
    height: 100%;
    /* DEVE SER 'cover' para preencher o espaço! */
    object-fit: cover; 
    object-position: center;
    transition: opacity .4s;
    opacity: 0;
}

.carousel-item-modal.active {
    opacity: 1;
}

/* Dark Mode (Ajustado) */
.dark body {
    background-color: #1A202C;
}
.dark .card-bg {
    background-color: #2D3748;
}
.dark .text-primary, .dark .text-secondary {
    color: #F7FAFC;
}
    </style>
</head>

<body class="py-10">

<div class="max-w-3xl mx-auto p-6 card-bg rounded-2xl relative z-10 shadow-border-neon-orange">

    <div class="relative w-full h-80 mb-6 overflow-hidden rounded-xl shadow-lg bg-white">

    <?php foreach($fotosFiltradas as $index => $foto): ?>
    <img 
        src="../<?= $foto['caminho_foto'] ?>" 
        class="carousel-item-modal <?= $index === 0 ? 'active' : '' ?>"
    >
<?php endforeach; ?>


    <button 
        class="prev absolute left-3 top-1/2 -translate-y-1/2 
        btn-primary px-4 py-2 
        rounded-full shadow-lg z-10">
        &lt;
    </button>

    <button 
        class="next absolute right-3 top-1/2 -translate-y-1/2 
        btn-primary px-4 py-2 
        rounded-full shadow-lg z-10">
        &gt;
    </button>
</div>


    <h1 class="text-3xl font-bold text-primary mb-4">
        <?= htmlspecialchars($animal['nome']) ?>
    </h1>

    <p class="text-secondary mb-2"><strong>Sexo:</strong> <?= htmlspecialchars($animal['sexo']) ?></p>
    <p class="text-secondary mb-2"><strong>Idade:</strong> <?= htmlspecialchars($animal['idade']) ?></p>

    <p class="text-secondary mt-3 leading-relaxed">
        <?= nl2br(htmlspecialchars($animal['descricao'])) ?>
    </p>

    
    <div class="flex space-x-4 mt-6">
         <a href="index.php#adocao" class="w-1/2">
            <button class="w-full bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-3 rounded-lg transition text-lg">
                Voltar
            </button>
        </a>

        <a href="index.php#contato" class="w-1/2">
            <button class="w-full btn-primary font-bold py-3 rounded-lg transition shadow-lg text-lg">
                🐾 Adotar!
            </button>
        </a>

    </div>

</div>

<script>
    const items = document.querySelectorAll(".carousel-item-modal");
    let current = 0;

    function showSlide(i){
        items.forEach((el, idx) => {
            el.classList.toggle("active", idx === i);
        });
    }

    document.querySelector(".prev").onclick = () => {
        current = (current - 1 + items.length) % items.length;
        showSlide(current);
    };

    document.querySelector(".next").onclick = () => {
        current = (current + 1) % items.length;
        showSlide(current);
    };
</script>

</body>
</html>