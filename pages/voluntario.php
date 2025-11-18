<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Voluntariado — Peludos Unipê 🐶🐱</title>

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

    <?php include('../includes/menu.php'); ?>

    <!-- HERO -->
    <section class="py-16 bg-primary text-white text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Seja Voluntário 💜</h1>
        <p class="text-lg opacity-90 max-w-3xl mx-auto">
            Faça parte do nosso time de amor e cuidado! Ser voluntário é transformar a vida dos nossos peludinhos
            com pequenas ações que fazem uma grande diferença.
        </p>
    </section>

    <!-- SECTION: COMO FUNCIONA -->
    <section class="py-16 px-6 max-w-5xl mx-auto">

        <h2 class="text-3xl font-bold text-primary text-center mb-10">Como você pode ajudar?</h2>

        <div class="grid md:grid-cols-3 gap-8">

            <!-- CARD 1 -->
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-primary/10">
                <span class="material-symbols-outlined text-5xl text-primary block text-center mb-4">pets</span>
                <h3 class="text-xl font-bold text-center mb-2">Cuidando dos Animais</h3>
                <p class="text-sm opacity-80 text-center">
                    Auxilie na rotina: carinho, alimentação, limpeza dos espaços e acompanhamento dos peludos.
                </p>
            </div>

            <!-- CARD 2 -->
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-primary/10">
                <span class="material-symbols-outlined text-5xl text-primary block text-center mb-4">volunteer_activism</span>
                <h3 class="text-xl font-bold text-center mb-2">Ações & Eventos</h3>
                <p class="text-sm opacity-80 text-center">
                    Ajude na organização de eventos, feirinhas de adoção e campanhas de arrecadação.
                </p>
            </div>

            <!-- CARD 3 -->
            <div class="p-6 bg-white rounded-2xl shadow-lg border border-primary/10">
                <span class="material-symbols-outlined text-5xl text-primary block text-center mb-4">share</span>
                <h3 class="text-xl font-bold text-center mb-2">Divulgação</h3>
                <p class="text-sm opacity-80 text-center">
                    Compartilhe conteúdos nas redes sociais e ajude o projeto a alcançar mais pessoas!
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION: BENEFÍCIOS -->
    <section class="py-16 px-6 bg-white">
        <h2 class="text-3xl font-bold text-accent text-center mb-10">Por que ser voluntário?</h2>

        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto">

            <div class="p-6 bg-primary/10 border border-primary/20 rounded-2xl shadow">
                <span class="material-symbols-outlined text-4xl text-primary mb-3 block text-center">favorite</span>
                <h3 class="text-center font-bold text-lg mb-2">Amor & Conexão</h3>
                <p class="text-sm text-center opacity-80">
                    A convivência com os peludos traz alegria, afeto e momentos inesquecíveis.
                </p>
            </div>

            <div class="p-6 bg-primary/10 border border-primary/20 rounded-2xl shadow">
                <span class="material-symbols-outlined text-4xl text-primary mb-3 block text-center">diversity_3</span>
                <h3 class="text-center font-bold text-lg mb-2">Nova Experiência</h3>
                <p class="text-sm text-center opacity-80">
                    Você aprende na prática sobre cuidado animal, organização e responsabilidade social.
                </p>
            </div>

            <div class="p-6 bg-primary/10 border border-primary/20 rounded-2xl shadow">
                <span class="material-symbols-outlined text-4xl text-primary mb-3 block text-center">workspace_premium</span>
                <h3 class="text-center font-bold text-lg mb-2">Certificado</h3>
                <p class="text-sm text-center opacity-80">
                    Receba um certificado confirmando sua participação nas atividades do projeto.
                </p>
            </div>

        </div>
    </section>

    <!-- SECTION: CONTATO -->
    <section class="py-20 px-6 text-center">
        <h2 class="text-3xl font-bold text-primary mb-6">Quer participar?</h2>
        <p class="text-lg opacity-80 max-w-xl mx-auto mb-10">
            Entre em contato com a equipe e dê o primeiro passo para mudar a vida de um peludinho 💜
        </p>

        <!-- BOTÃO FINAL -->
        <a href="https://instagram.com/peludosunipe" target="_blank"
           class="px-8 py-4 bg-primary text-white rounded-xl font-semibold shadow-lg hover:bg-primary/90 transition">
            Falar com a Equipe
        </a>
    </section>

    <?php include('../includes/rodape.php'); ?>

</body>
</html>
