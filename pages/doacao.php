<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Ajude — Peludos Unipê 🐶🐱</title>

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

    <!-- MENU (caminho absoluto seguro) -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/projeto_web_pets/includes/menu.php'); ?>

    <!-- HERO -->
    <section class="py-16 bg-primary text-white text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Doe & Ajude</h1>
        <p class="text-lg opacity-90 max-w-2xl mx-auto">
            Sua ajuda transforma vidas! Toda doação — seja em dinheiro, itens ou apoio — 
            contribui para alimentar, cuidar e dar amor aos nossos peludos resgatados.
        </p>
    </section>

    <!-- COMO AJUDAR -->
    <section class="py-16 px-6 max-w-5xl mx-auto">

        <h2 class="text-3xl font-bold text-center text-primary mb-10">Como você pode ajudar?</h2>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-primary/10">
                <span class="material-symbols-outlined text-5xl text-primary mb-4 block text-center">
                    volunteer_activism
                </span>

                <h3 class="text-xl font-bold text-center mb-2">Doação Financeira</h3>
                <p class="text-sm opacity-80 text-center mb-4">
                    Contribua com qualquer valor para ajudar com alimentação, medicamentos e cuidados dos animais.
                </p>

                <div class="bg-primary/10 p-4 rounded-lg text-center border border-primary/20">
                    <p class="text-primary font-semibold text-lg">Pix:</p>
                    <p class="text-primary font-bold">peludosunipe@instituicao.com</p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-primary/10">
                <span class="material-symbols-outlined text-5xl text-primary mb-4 block text-center">
                    redeem
                </span>

                <h3 class="text-xl font-bold text-center mb-2">Doar Itens</h3>
                <p class="text-sm opacity-80 mb-4 text-center">
                    Aceitamos diversos itens que ajudam no cuidado diário dos animais.
                </p>

                <ul class="text-sm opacity-90 space-y-2 px-4">
                    <li>• Ração para cães e gatos</li>
                    <li>• Areia higiênica</li>
                    <li>• Tapetes higiênicos</li>
                    <li>• Brinquedos para pets</li>
                    <li>• Medicamentos veterinários</li>
                    <li>• Vermífugos e antipulgas</li>
                    <li>• Produtos de higiene</li>
                </ul>
            </div>

            <!-- CARD 3 -->
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-primary/10">
                <span class="material-symbols-outlined text-5xl text-primary mb-4 block text-center">
                    groups
                </span>

                <h3 class="text-xl font-bold text-center mb-2">Apoiar o Projeto</h3>
                <p class="text-sm opacity-80 mb-4 text-center">
                    Mesmo sem doar dinheiro ou itens, você pode ajudar muito compartilhando e divulgando o projeto.
                </p>

                <ul class="text-sm opacity-90 space-y-2 px-4">
                    <li>• Divulgue nas redes sociais</li>
                    <li>• Compartilhe o perfil @peludosunipe</li>
                    <li>• Participe de ações e eventos</li>
                    <li>• Envolva amigos e familiares</li>
                </ul>
            </div>

        </div>
    </section>

    <!-- RODAPÉ -->
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/projeto_web_pets/includes/rodape.php'); ?>

</body>
</html>
