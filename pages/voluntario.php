<!DOCTYPE html>
<html class="light" lang="pt-br">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Voluntariado - Peludos Unipê</title>

<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

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

                    /* Base */
                    "background-light": "#F9FAFB",
                    "background-dark": "#111827",

                    "text-dark": "#1F2937",
                    "text-light": "#F8FAFC",

                    "subtext-light": "#6B7280",
                    "subtext-dark": "#9CA3AF",

                    /* Cor oficial do rodapé */
                    "footer-blue": "#163A67",
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

</head>

<body class="font-display bg-background-light dark:bg-background-dark text-text-dark dark:text-text-light">

<?php include('../includes/menu.php'); ?>

<main class="flex w-full flex-1 flex-col pt-16">

    <!-- ========================================================= -->
    <!--  SEÇÃO COM GRADIENTE ROXO → AZUL         -->
    <!-- ========================================================= -->
    <section class="flex w-full items-center justify-center 
        bg-gradient-to-r from-secondary via-secondary/80 to-primary 
        -mt-16 py-20 px-4 text-center sm:py-24 md:py-32">

        <div class="flex flex-col gap-4">
            <h1 class="text-white text-4xl font-black tracking-[-0.033em] sm:text-5xl lg:text-6xl">
                Seja Voluntário 💜
            </h1>

            <p class="max-w-xl text-white/90 text-base sm:text-lg">
                Faça a diferença na vida de animais resgatados. Seu carinho pode transformar destinos.
            </p>
        </div>
    </section>

    <!-- ========================================================= -->
    <!--  COMO VOCÊ PODE AJUDAR — BORDAS ROXAS + FUNDO ROXO LEVE   -->
    <!-- ========================================================= -->
    <section class="w-full bg-background-light dark:bg-background-dark py-16 px-4 sm:px-6 md:py-20 lg:px-8">

        <div class="mx-auto max-w-5xl">
            <h2 class="text-center text-3xl font-bold text-text-dark dark:text-text-light">
                Como você pode ajudar?
            </h2>

            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-3">

                <!-- CARD 1 -->
                <div class="flex flex-col items-center gap-4 rounded-xl 
                    border-2 border-secondary bg-secondary/10 dark:bg-secondary/20 
                    p-6 text-center shadow-sm hover:shadow-roxinho transition">

                    <div class="flex h-12 w-12 items-center justify-center 
                        rounded-full bg-primary/10 text-primary dark:bg-primary/20">
                        <span class="material-symbols-outlined text-3xl">pets</span>
                    </div>

                    <h3 class="text-lg font-bold text-text-dark dark:text-text-light">
                        Cuidando dos Animais
                    </h3>

                    <p class="text-sm text-subtext-light dark:text-subtext-dark">
                        Ajude na alimentação, limpeza, socialização e ofereça carinho.
                    </p>
                </div>

                <!-- CARD 2 -->
                <div class="flex flex-col items-center gap-4 rounded-xl 
                    border-2 border-secondary bg-secondary/10 dark:bg-secondary/20 
                    p-6 text-center shadow-sm hover:shadow-roxinho transition">

                    <div class="flex h-12 w-12 items-center justify-center 
                        rounded-full bg-primary/10 text-primary dark:bg-primary/20">
                        <span class="material-symbols-outlined text-3xl">celebration</span>
                    </div>

                    <h3 class="text-lg font-bold text-text-dark dark:text-text-light">
                        Ações e Eventos
                    </h3>

                    <p class="text-sm text-subtext-light dark:text-subtext-dark">
                        Participe de feiras, campanhas e eventos importantes.
                    </p>
                </div>

                <!-- CARD 3 -->
                <div class="flex flex-col items-center gap-4 rounded-xl 
                    border-2 border-secondary bg-secondary/10 dark:bg-secondary/20 
                    p-6 text-center shadow-sm hover:shadow-roxinho transition">

                    <div class="flex h-12 w-12 items-center justify-center 
                        rounded-full bg-primary/10 text-primary dark:bg-primary/20">
                        <span class="material-symbols-outlined text-3xl">share</span>
                    </div>

                    <h3 class="text-lg font-bold text-text-dark dark:text-text-light">
                        Divulgação
                    </h3>

                    <p class="text-sm text-subtext-light dark:text-subtext-dark">
                        Ajude compartilhando nosso trabalho nas redes sociais.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!--  POR QUE SER VOLUNTÁRIO — BORDAS ROXAS                    -->
    <!-- ========================================================= -->
    <section class="w-full bg-background-light dark:bg-background-dark/50 py-16 px-4 sm:px-6 md:py-20 lg:px-8">

        <div class="mx-auto max-w-5xl">
            <h2 class="text-center text-3xl font-bold text-text-dark dark:text-text-light">
                Por que ser voluntário?
            </h2>

            <div class="mt-12 grid grid-cols-1 gap-8 md:grid-cols-3">

                <!-- CARD -->
                <div class="flex flex-col items-center gap-4 rounded-xl 
                    border-2 border-secondary bg-secondary/10 dark:bg-secondary/20 
                    p-6 shadow-sm hover:shadow-roxinho transition">

                    <div class="flex h-12 w-12 items-center justify-center 
                        rounded-full bg-secondary/10 text-secondary dark:bg-secondary/20">
                        <span class="material-symbols-outlined text-3xl">favorite</span>
                    </div>

                    <h3 class="text-lg font-bold">Amor & Conexão</h3>
                    <p class="text-sm text-subtext-light dark:text-subtext-dark">
                        Crie laços incríveis com os animais.
                    </p>
                </div>

                <!-- CARD -->
                <div class="flex flex-col items-center gap-4 rounded-xl 
                    border-2 border-secondary bg-secondary/10 dark:bg-secondary/20 
                    p-6 shadow-sm hover:shadow-roxinho transition">

                    <div class="flex h-12 w-12 items-center justify-center 
                        rounded-full bg-secondary/10 text-secondary dark:bg-secondary/20">
                        <span class="material-symbols-outlined text-3xl">auto_awesome</span>
                    </div>

                    <h3 class="text-lg font-bold">Nova Experiência</h3>
                    <p class="text-sm text-subtext-light dark:text-subtext-dark">
                        Evolua, aprenda e viva novas histórias.
                    </p>
                </div>

                <!-- CARD -->
                <div class="flex flex-col items-center gap-4 rounded-xl 
                    border-2 border-secondary bg-secondary/10 dark:bg-secondary/20 
                    p-6 shadow-sm hover:shadow-roxinho transition">

                    <div class="flex h-12 w-12 items-center justify-center 
                        rounded-full bg-secondary/10 text-secondary dark:bg-secondary/20">
                        <span class="material-symbols-outlined text-3xl">workspace_premium</span>
                    </div>

                    <h3 class="text-lg font-bold">Certificação</h3>
                    <p class="text-sm text-subtext-light dark:text-subtext-dark">
                        Receba sua certificação ao participar.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ========================================================= -->
    <!--  CTA                                                      -->
    <!-- ========================================================= -->
    <section class="py-16 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-4xl flex flex-col items-center gap-4 
            p-8 md:p-12 rounded-xl text-center
            bg-secondary/10 dark:bg-secondary/20 
            border-2 border-secondary shadow-sm">

            <h2 class="text-3xl font-bold text-text-dark dark:text-text-light">
                Quer participar?
            </h2>

            <p class="max-w-md text-subtext-light dark:text-subtext-dark">
                Junte-se à nossa equipe de voluntários e ajude a transformar vidas.
            </p>

                  <a href="../pages/index.php#contato"
   class="mt-8 flex mx-auto min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-12 px-6 bg-secondary hover:bg-secondary/90 text-white text-base font-bold leading-normal tracking-wide transition-colors duration-300">
    <span class="truncate">Falar com a Equipe</span>
</a>
        </div>
    </section>

</main>

<script src="../assets/js/patinhas.js"></script>
<?php include('../includes/rodape.php'); ?>
</body>
</html>

