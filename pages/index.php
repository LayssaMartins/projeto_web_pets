<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Peludos Unipê</title>

    <!-- TAILWIND -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

<!-- TEU CSS (vem depois!) -->
<link rel="stylesheet" href="../assets/css/style.css">


    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200..800&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <!-- Config Tailwind -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#FF7D63",
                        background-light: "#FFF8F0",
                        background-dark: "#0B4F6C",
                        text-light: "#0B4F6C",
                        text-dark: "#FFF8F0",
                        accent: "#A8DADC"
                    },
                    fontFamily: {
                        display: ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        DEFAULT: "0.5rem",
                        lg: "1rem",
                        xl: "1.5rem",
                        full: "9999px"
                    }
                }
            }
        }
    </script>
</head>

<body>

<?php include('../includes/menu.php'); ?>

<main class="home">

    <!-- HERO -->
    <section class="hero-img">
    <img src="../assets/img/banner 2.1.png" alt="Banner">
</section>




   <!-- CARROSSEL -->
<section class="carousel-section">
    <h2 class="carousel-title">Conheça Alguns Animais</h2>

    <div class="carousel">
        <div class="carousel-track">

            <div class="carousel-item"><img src="../assets/img/peludo1.png" alt="Peludo 1"></div>
            <div class="carousel-item"><img src="../assets/img/peludo2.png" alt="Peludo 2"></div>
            <div class="carousel-item"><img src="../assets/img/peludo3.png" alt="Peludo 3"></div>
            <div class="carousel-item"><img src="../assets/img/peludo4.png" alt="Peludo 4"></div>

            <!-- Duplicação para loop -->
            <div class="carousel-item"><img src="../assets/img/peludo1.png" alt="Peludo 1"></div>
            <div class="carousel-item"><img src="../assets/img/peludo2.png" alt="Peludo 2"></div>
            <div class="carousel-item"><img src="../assets/img/peludo3.png" alt="Peludo 3"></div>
            <div class="carousel-item"><img src="../assets/img/peludo4.png" alt="Peludo 4"></div>

        </div>
    </div>
</section>


<section id="acoes" class="py-16 px-4 max-w-6xl mx-auto">

    <div class="grid md:grid-cols-3 gap-8">

        <!-- DOAÇÃO -->
        <div class="bg-white border border-[#7CBFD6] rounded-2xl p-8 shadow-sm">
            <span class="material-symbols-outlined text-5xl text-[#2F6C86] mb-4 block">
                volunteer_activism
            </span>

            <h3 class="text-xl font-semibold text-[#2F6C86] mb-2">
                Faça uma Doação
            </h3>

            <p class="text-[#2F6C86]/70 mb-6">
                Sua contribuição ajuda a cobrir custos de veterinário, comida e cuidados para nossos animais.
            </p>

            <a href="doacao.php"
               class="block w-full text-center py-3 rounded-md font-semibold text-white transition"
               style="background:#7CBFD6"
               onmouseover="this.style.background='#2F6C86'"
               onmouseout="this.style.background='#7CBFD6'">
                Doar Agora
            </a>
        </div>

        <!-- APADRINHAMENTO -->
        <div class="bg-white border border-[#7CBFD6] rounded-2xl p-8 shadow-sm">
            <span class="material-symbols-outlined text-5xl text-[#2F6C86] mb-4 block">
                pets
            </span>

            <h3 class="text-xl font-semibold text-[#2F6C86] mb-2">
                Seja Padrinho/Madrinha
            </h3>

            <p class="text-[#2F6C86]/70 mb-6">
                Apoie um peludo mensalmente e receba atualizações sobre ele.
            </p>

            <a href="apadrinhar.php"
               class="block w-full text-center py-3 rounded-md font-semibold text-white transition"
               style="background:#7CBFD6"
               onmouseover="this.style.background='#2F6C86'"
               onmouseout="this.style.background='#7CBFD6'">
                Apadrinhar
            </a>
        </div>

        <!-- VOLUNTARIADO -->
        <div class="bg-white border border-[#7CBFD6] rounded-2xl p-8 shadow-sm">
            <span class="material-symbols-outlined text-5xl text-[#2F6C86] mb-4 block">
                groups
            </span>

            <h3 class="text-xl font-semibold text-[#2F6C86] mb-2">
                Quero Ser Voluntário!
            </h3>

            <p class="text-[#2F6C86]/70 mb-6">
                Ajude a cuidar, divulgar e apoiar nossos peludos!
            </p>

            <a href="voluntario.php"
               class="block w-full text-center py-3 rounded-md font-semibold text-white transition"
               style="background:#7CBFD6"
               onmouseover="this.style.background='#2F6C86'"
               onmouseout="this.style.background='#7CBFD6'">
                Participar
            </a>
        </div>

    </div>

</section>




    <div class="max-w-3xl mx-auto space-y-16 text-center">

        <!-- BLOCO 1 -->
        <div class="space-y-4">
            <h3 class="text-2xl md:text-3xl font-bold text-primary">
                Nosso Propósito
            </h3>

            <p class="text-lg opacity-90 leading-relaxed">
                O <strong>Peludos Unipê</strong> nasceu dentro do
                <strong>Centro Universitário de João Pessoa</strong> como uma iniciativa de amor e empatia.
                Inspirado pelo perfil do Instagram <em>@peludosunipe</em>, o projeto foi trazido para o ambiente web
                com o objetivo de ampliar o alcance das adoções e conectar ainda mais pessoas à causa animal.<br>
                Nosso objetivo é construir uma ponte entre animais abandonados e pessoas dispostas a transformar vidas.
                Através do site, você pode conhecer cada peludo, saber sua história e dar o primeiro passo para uma
                adoção responsável e cheia de amor. ❤️
            </p>
        </div>

        <!-- BLOCO 2 -->
        <div class="space-y-4">
            <h3 class="text-2xl md:text-3xl font-bold text-primary">
                Para Além dos Muros da Faculdade
            </h3>

            <p class="text-lg opacity-90 leading-relaxed">
                O projeto é aberto a toda a comunidade!
                Pessoas de fora do Unipê também podem adotar, ajudar com doações ou participar da divulgação.
                Juntos, criamos uma rede de cuidado e carinho pelos nossos amigos de quatro patas 🐾
            </p>
            <br>
            <br>
        </div>

    </div>

    <!-- ADOÇÃO -->
    <section class="w-full py-20" style="background-color: #07374A;">
    <div class="max-w-5xl mx-auto px-6 text-center">

        <h3 class="text-3xl font-extrabold text-white mb-12">
            Como Funciona a Adoção?
        </h3>

        <div class="grid md:grid-cols-3 gap-12">

            <!-- Passo 1 -->
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center 
                            bg-white text-text-light 
                            rounded-full 
                            text-2xl font-extrabold mb-4 shadow-lg">
                    1
                </div>
                <h4 class="text-xl font-semibold text-white mb-2">
                    Escolha seu Pet
                </h4>
                <p class="text-white/80">
                    Navegue pelos perfis dos nossos peludos e se apaixone.
                </p>
            </div>

            <!-- Passo 2 -->
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center 
                            bg-white text-text-light 
                            rounded-full 
                            text-2xl font-extrabold mb-4 shadow-lg">
                    2
                </div>
                <h4 class="text-xl font-semibold text-white mb-2">
                    Fale Conosco
                </h4>
                <p class="text-white/80">
                    Conte sobre você, sua rotina e o pet escolhido.
                </p>
            </div>

            <!-- Passo 3 -->
            <div class="flex flex-col items-center">
                <div class="w-16 h-16 flex items-center justify-center 
                            bg-white text-text-light 
                            rounded-full 
                            text-2xl font-extrabold mb-4 shadow-lg">
                    3
                </div>
                <h4 class="text-xl font-semibold text-white mb-2">
                    Leve para Casa
                </h4>
                <p class="text-white/80">
                    Após a aprovação, receba seu novo melhor amigo!
                </p>
            </div>

        </div>
    </div>
</section>
<section class="py-12 md:py-20" id="adocao">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-extrabold text-text-light dark:text-text-dark">
            Nossos Peludos Esperando um Lar
        </h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-6xl mx-auto">

        <!-- 1 -->
        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 hover:shadow-xl transition">
            <div class="aspect-square bg-cover bg-center"
                style="background-image: url('../assets/img/gato1.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Kiara</h3>
                <p class="text-sm opacity-70 mb-3">Fêmea, 5 Meses</p>

                <button class="mt-4 w-full flex items-center justify-center rounded-lg h-10 px-4 text-white text-sm font-bold transition"
        style="background-color: #7CBFD6;"
        onmouseover="this.style.backgroundColor='#2F6C86'"
        onmouseout="this.style.backgroundColor='#7CBFD6'">
    Ver Perfil
</button>

            </div>
        </div>

        <!-- 2 -->
        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 hover:shadow-xl transition">
            <div class="aspect-square bg-cover bg-center"
                style="background-image: url('../assets/img/gato2.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Nala</h3>
                <p class="text-sm opacity-70 mb-3">Fêmea, 5 Meses</p>

                <button class="mt-4 w-full flex items-center justify-center rounded-lg h-10 px-4 text-white text-sm font-bold transition"
        style="background-color: #7CBFD6;"
        onmouseover="this.style.backgroundColor='#2F6C86'"
        onmouseout="this.style.backgroundColor='#7CBFD6'">
    Ver Perfil
</button>

            </div>
        </div>

        <!-- 3 -->
        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 hover:shadow-xl transition">
            <div class="aspect-square bg-cover bg-center"
                style="background-image: url('../assets/img/gato3.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Tom</h3>
                <p class="text-sm opacity-70 mb-3">Macho, 3 anos</p>

                <button class="mt-4 w-full flex items-center justify-center rounded-lg h-10 px-4 text-white text-sm font-bold transition"
        style="background-color: #7CBFD6;"
        onmouseover="this.style.backgroundColor='#2F6C86'"
        onmouseout="this.style.backgroundColor='#7CBFD6'">
    Ver Perfil
</button>

            </div>
        </div>

        <!-- 4 -->
        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 hover:shadow-xl transition">
            <div class="aspect-square bg-cover bg-center"
                style="background-image: url('../assets/img/gato4.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Olive</h3>
                <p class="text-sm opacity-70 mb-3">Macho, 3 anos</p>
                <button class="mt-4 w-full flex items-center justify-center rounded-lg h-10 px-4 text-white text-sm font-bold transition"
        style="background-color: #7CBFD6;"
        onmouseover="this.style.backgroundColor='#2F6C86'"
        onmouseout="this.style.backgroundColor='#7CBFD6'">
    Ver Perfil
</button>


            </div>
        </div>

        <!-- 5 -->
        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 hover:shadow-xl transition">
            <div class="aspect-square bg-cover bg-center"
                style="background-image: url('../assets/img/gato5.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Amora</h3>
                <p class="text-sm opacity-70 mb-3">Fêmea, 2 a 3 anos</p>

                <button class="mt-4 w-full flex items-center justify-center rounded-lg h-10 px-4 text-white text-sm font-bold transition"
        style="background-color: #7CBFD6;"
        onmouseover="this.style.backgroundColor='#2F6C86'"
        onmouseout="this.style.backgroundColor='#7CBFD6'">
    Ver Perfil
</button>

            </div>
        </div>
   <!-- 6 -->
   <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 hover:shadow-xl transition">
            <div class="aspect-square bg-cover bg-center"
                style="background-image: url('../assets/img/gato6.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Alícia </h3>
                <p class="text-sm opacity-70 mb-3">Fêmea, 2 a 3 anos</p>
                <button class="mt-4 w-full flex items-center justify-center rounded-lg h-10 px-4 text-white text-sm font-bold transition"
        style="background-color: #7CBFD6;"
        onmouseover="this.style.backgroundColor='#2F6C86'"
        onmouseout="this.style.backgroundColor='#7CBFD6'">
    Ver Perfil
</button>
    </div>
</section>

    <!-- CONTATO -->
    <section id="contato" style="margin-top: 3rem; margin-bottom: 3rem;">

<div class="text-center" style="max-width: 600px; margin: 0 auto 2rem auto;">
    <h2 class="text-3xl md:text-4xl font-extrabold mb-4" style="color:#2F6C86;">
        Fale Conosco
    </h2>

    <p class="text-lg" style="color:#2F6C86; opacity:0.9;">
        Tem alguma dúvida ou quer saber mais sobre nosso trabalho?  
        Mande uma mensagem.
    </p>
</div>

<form class="form-contato">
    <label for="name">Nome</label>
    <input id="name" type="text" placeholder="Seu nome">

    <label for="email">Email</label>
    <input id="email" type="email" placeholder="Seu email">

    <label for="subject">Assunto</label>
    <input id="subject" type="text" placeholder="Assunto">

    <label for="message">Mensagem</label>
    <textarea id="message" rows="4" placeholder="Sua mensagem"></textarea>

    <button class="btn-enviar-form">Enviar mensagem</button>
</form>

</section>

</main>

<script src="../assets/js/patinhas.js"></script>
<?php include('../includes/rodape.php'); ?>

</body>
</html>
