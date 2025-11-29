<!DOCTYPE html>
<html class="light" lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Apadrinhe um Peludo - Peludos Unipê</title>
    
    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <!-- Config Tailwind -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: "#2563EB",
                            light: "#93C5FD",
                        },
                        secondary: "#F97316",
                        accent: "#FFEAD2",

                        "background-light": "#F9FAFB",
                        "background-dark": "#111827",

                        "text-dark": "#1F2937",
                        "text-light": "#F8FAFC",

                        "subtext-light": "#6B7280",
                        "subtext-dark": "#9CA3AF",

                        "footer-blue": "#163A67",

                        /* IMPORTANTÍSSIMO — agora funciona: */
                        "card-light": "#FFFFFF",
                        "card-dark": "#1F2937",
                    },
                    fontFamily: {
                        display: ["Manrope", "sans-serif"]
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        lg: "1rem",
                        xl: "1.5rem",
                        full: "9999px"
                    },
                    boxShadow: {
                        "roxinho": "0 0 18px 0 rgba(37, 99, 235, 0.45)"
                    }
                }
            }
        }
    </script>

    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>

<body class="bg-background-light text-text-dark font-display">

<!-- MENU -->
<?php include '../includes/menu.php'; ?>


<main class="flex flex-1 flex-col items-center">

    <!-- HERO COM DEGRADE CERTINHO -->
    <!-- HERO COM DEGRADÊ LARANJA + AZUL -->
<section class="w-full py-20 md:py-32 text-center 
    bg-gradient-to-r from-footer-blue via-primary to-secondary">
    
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-6xl font-black text-white leading-tight tracking-tighter">
            Apadrinhar um Peludo
        </h1>

        <p class="mt-6 text-lg md:text-xl text-white/90">
            Apoie um peludo que ainda não encontrou um lar definitivo. Sua ajuda garante alimentação, cuidados e muito carinho enquanto ele espera uma família.
        </p>
    </div>
</section>



    <!-- CONTEÚDO -->
    <div class="w-full max-w-7xl px-4 sm:px-6 lg:px-8 py-16 md:py-24 space-y-20 md:space-y-24">

        <!-- O QUE É -->
        <section class="text-center max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-text-dark dark:text-text-light">
                O Que é Apadrinhamento?
            </h2>
            <p class="mt-4 text-lg text-subtext-light dark:text-subtext-dark">
                O apadrinhamento permite que você ajude um animal do abrigo, contribuindo para cuidados essenciais como alimentação, higiene, medicamentos e assistência veterinária.
            </p>
        </section>

        <!-- COMO FUNCIONA -->
        <section>
            <h2 class="text-center text-3xl md:text-4xl font-bold text-text-dark dark:text-text-light mb-12">
                Como Funciona?
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- CARD 1 -->
                <div class="flex flex-col items-center text-center p-8 bg-card-light dark:bg-card-dark rounded-xl shadow-lg border border-accent">
                    <div class="flex items-center justify-center size-16 bg-primary/10 dark:bg-primary/20 rounded-full mb-6">
                        <span class="material-symbols-outlined text-3xl text-primary">pets</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-text-dark dark:text-text-light">1. Escolha um Peludo</h3>
                    <p class="text-subtext-light dark:text-subtext-dark">
                        Veja nossos animais disponíveis e escolha aquele que mais tocar seu coração.
                    </p>
                </div>

                <!-- CARD 2 -->
                <div class="flex flex-col items-center text-center p-8 bg-card-light dark:bg-card-dark rounded-xl shadow-lg border border-accent">
                    <div class="flex items-center justify-center size-16 bg-primary/10 dark:bg-primary/20 rounded-full mb-6">
                        <span class="material-symbols-outlined text-3xl text-primary">credit_card</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-text-dark dark:text-text-light">2. Contribua</h3>
                    <p class="text-subtext-light dark:text-subtext-dark">
                        Realize uma contribuição mensal que ajuda diretamente o animal escolhido.
                    </p>
                </div>

                <!-- CARD 3 -->
                <div class="flex flex-col items-center text-center p-8 bg-card-light dark:bg-card-dark rounded-xl shadow-lg border border-accent">
                    <div class="flex items-center justify-center size-16 bg-primary/10 dark:bg-primary/20 rounded-full mb-6">
                        <span class="material-symbols-outlined text-3xl text-primary">favorite</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-text-dark dark:text-text-light">3. Acompanhe</h3>
                    <p class="text-subtext-light dark:text-subtext-dark">
                        Receba atualizações e acompanhe o dia a dia do seu afilhado.
                    </p>
                </div>

            </div>
        </section>

        <!-- BENEFÍCIOS -->
        <section class="max-w-3xl mx-auto">
            <h2 class="text-center text-3xl md:text-4xl font-bold text-primary mb-8">
                Benefícios do Apadrinhamento
            </h2>

            <ul class="space-y-4 text-lg text-subtext-light dark:text-subtext-dark">
                <li class="flex items-start">
                    <span class="material-symbols-outlined text-secondary mr-3 mt-1">check_circle</span>
                    Você ajuda diretamente um animal em situação de abrigo.
                </li>

                <li class="flex items-start">
                    <span class="material-symbols-outlined text-secondary mr-3 mt-1">check_circle</span>
                    Recebe atualizações periódicas sobre seu afilhado.
                </li>

                <li class="flex items-start">
                    <span class="material-symbols-outlined text-secondary mr-3 mt-1">check_circle</span>
                    Pode visitar e interagir com ele.
                </li>

                <li class="flex items-start">
                    <span class="material-symbols-outlined text-secondary mr-3 mt-1">check_circle</span>
                    Contribui diretamente para o funcionamento do projeto.
                </li>

                <li class="flex items-start">
                    <span class="material-symbols-outlined text-secondary mr-3 mt-1">check_circle</span>
                    Pode futuramente adotar seu afilhado, se desejar.
                </li>
            </ul>
        </section>

        <!-- CTA FINAL -->
        <section class="text-center bg-card-light dark:bg-card-dark p-10 md:p-16 rounded-xl shadow-lg border border-accent max-w-3xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-text-dark dark:text-text-light">
                Quer Apadrinhar um Peludo?
            </h2>

            <p class="mt-4 text-lg text-subtext-light dark:text-subtext-dark">
                Entre em contato com nossa equipe.
            </p>

            <a href="../pages/index.php#contato"
               class="mt-8 flex mx-auto h-12 min-w-[140px] items-center justify-center px-6 rounded-xl bg-secondary hover:bg-secondary/90 text-white font-bold transition">
                Falar com a Equipe
            </a>
        </section>

    </div>
</main>

<script src="../assets/js/patinhas.js"></script>

<!-- RODAPÉ -->
<?php include('../includes/rodape.php'); ?>

</body>
</html>
