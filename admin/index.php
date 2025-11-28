<?php
session_start();

// Proteção do admin (opcional)
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include '../config.inc.php';

// Buscar todos os gatos
$stmt = $pdo->query("SELECT * FROM gatos");
$gatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Se não houver gatos, cria array vazio para evitar erros
if (!$gatos) {
    $gatos = [];
}
?>
<?php foreach($gatos as $gato): ?>
    <?php
        // Buscar fotos do gato
        $stmtFotos = $pdo->prepare("SELECT * FROM gatos_fotos WHERE gato_id=?");
        $stmtFotos->execute([$gato['id']]);
        $fotos = $stmtFotos->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 hover:shadow-xl transition">
        <div class="carousel-animal aspect-square relative overflow-hidden">
            <?php foreach($fotos as $index => $foto): ?>
                <img src="../<?= $foto['imagem'] ?>" class="carousel-item absolute inset-0 w-full h-full object-cover transition-opacity <?= $index === 0 ? 'opacity-100' : 'opacity-0' ?>">
            <?php endforeach; ?>
        </div>
        <div class="p-4">
            <h3 class="text-lg font-bold mb-1"><?= htmlspecialchars($gato['nome']) ?></h3>
            <p class="text-sm opacity-70 mb-3"><?= htmlspecialchars($gato['sexo']) ?>, <?= htmlspecialchars($gato['idade']) ?></p>
            <a href="animal-detalhe.php?id=<?= $gato['id'] ?>">
                <button class="mt-4 w-full flex items-center justify-center rounded-lg h-10 px-4 text-white text-sm font-bold transition"
                        style="background-color: #7CBFD6;"
                        onmouseover="this.style.backgroundColor='#2F6C86'"
                        onmouseout="this.style.backgroundColor='#7CBFD6'">
                    Ver Perfil
                </button>
            </a>
        </div>
    </div>
<?php endforeach; ?>
