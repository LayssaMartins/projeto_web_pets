<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apadrinhar — Peludos Unipê 🐶🐱</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Ícones Google -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <style>
      .material-symbols-outlined {
        font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 48;
      }
    </style>

    <!-- Cores Personalizadas -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: "#6C47FF",
                        accent: "#FF7A3D",
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 text-gray-800">

    <?php 
        $root = dirname(__DIR__); 
        include($root . '/includes/menu.php'); 
    ?>

    <!-- HERO -->
    <section class="py-16 bg-primary text-white text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Apadrinhar um Peludo</h1>
        <p class="text-lg opacity-90 max-w-2xl mx-auto">
            Apoie um peludo que ainda não encontrou um lar definitivo.  
            Com o apadrinhamento, você ajuda diretamente com cuidados, alimentação e muito carinho. 💜🐾
        </p>
    </section>

    <!-- O QUE É APADRINHAR -->
    <section class="py-16 px-6 max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-primary mb-10">O que é Apadrinhamento?</h2>

        <p class="text-lg text-center opacity-90 max-w-3xl mx-auto">
            O apadrinhamento é uma forma de ajudar um animalzinho que ainda não conseguiu adoção.  
            Você contribui mensalmente ou ocasionalmente para melhorar a vida dele enquanto espera um lar definitivo.  
            Seu apoio garante alimentação, cuidados veterinários, medicamentos e muito amor.  
        </p>
    </section>

    <!-- COMO FUNCIONA -->
    <section class="py-12 px-6 max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-primary mb-10">Como funciona?</h2>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- Card 1 -->
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-primary/10 text-center">
                <span class="material-symbols-outlined text-5xl text-primary mb-3">pets</span>
                <h3 class="text-xl font-bold mb-2">Escolha um Peludo</h3>
                <p class="text-sm opacity-80">
                    Conheça os peludos disponíveis e escolha quem você deseja apadrinhar.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-primary/10 text-center">
                <span class="material-symbols-outlined text-5xl text-primary mb-3">volunteer_activism</span>
                <h3 class="text-xl font-bold mb-2">Contribua</h3>
                <p class="text-sm opacity-80">
                    Você pode ajudar com valor mensal ou doações de ração, areia e itens essenciais.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-primary/10 text-center">
                <span class="material-symbols-outlined text-5xl text-primary mb-3">favorite</span>
                <h3 class="text-xl font-bold mb-2">Acompanhe</h3>
                <p class="text-sm opacity-80">
                    Receba atualizações, fotos e notícias sobre o peludo que você apoia.
                </p>
            </div>

        </div>
    </section>

    <!-- BENEFÍCIOS -->
    <section class="py-16 px-6 max-w-5xl mx-auto">
        <h2 class="text-3xl font-bold text-center text-primary mb-10">Benefícios do Apadrinhamento</h2>

        <ul class="max-w-2xl mx-auto space-y-4 text-lg opacity-90">
            <li>• Você ajuda diretamente um animal que precisa</li>
            <li>• Recebe atualizações e fotos</li>
            <li>• Pode visitar o peludo quando desejar</li>
            <li>• Contribui para a causa animal de forma afetiva</li>
            <li>• Se quiser, pode futuramente adotar o peludo</li>
        </ul>
    </section>


    <!-- IMPORTANTE -->
    <section class="py-16 px-6 bg-primary/10 border-y border-primary/20">
        <h2 class="text-3xl font-bold text-center text-primary mb-6">Informações Importantes</h2>

        <ul class="max-w-2xl mx-auto space-y-4 text-lg opacity-90 text-center">
            <li>• O apadrinhamento não é uma adoção oficial</li>
            <li>• Você não leva o peludo para casa, mas ajuda no cuidado</li>
            <li>• Pode ser interrompido quando quiser</li>
            <li>• Todo apoio é valioso e faz diferença 🧡</li>
        </ul>
    </section>


    <!-- CTA FINAL -->
    <section class="py-16 text-center">
        <h2 class="text-3xl font-bold text-primary mb-4">Quer Apadrinhar um Peludo?</h2>
        <p class="max-w-2xl mx-auto text-lg opacity-80 mb-6">
            Entre em contato conosco e descubra os peludos disponíveis para apadrinhar!
        </p>

 <!-- BOTÃO FINAL - APADRINHAR -->
<div class="text-center mt-10">
    <a href="https://instagram.com/peludosunipe" target="_blank"
       class="inline-block px-8 py-4 bg-primary text-white rounded-xl font-semibold shadow-lg 
              hover:bg-primary/90 transition-all duration-300">
        Falar com a Equipe
    </a>
</div>



    <?php 
        $root = dirname(__DIR__); 
        include($root . '/includes/rodape.php'); 
    ?>

</body>
</html>
