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
    <section class="hero">
        <h1>Adote Amor, Adote um Peludo 🐶🐱</h1>
        <p>
            Transforme a vida de um animal abandonado e receba amor incondicional em troca. <br>
            No <strong>Peludos Unipê</strong>, cada adoção é uma oportunidade de fazer o mundo mais feliz para nossos amigos de quatro patas. 🏡💛
        </p>
        <a href="sobre.php" class="btn">Quero Saber mais</a>
    </section>

    <!-- CARROSSEL -->
    <section>
        <h2>Conheça Alguns Animais:</h2>

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

 <section class="py-12" id="acoes">
    <div class="grid md:grid-cols-3 gap-6">
        
        <!-- DOAÇÃO -->
        <div class="p-6 bg-white dark:bg-text-light/10 shadow-lg rounded-xl border border-primary/10 dark:border-accent/10 transition-shadow duration-300 hover:shadow-xl">
            <span class="material-symbols-outlined text-4xl text-primary mb-3">volunteer_activism</span>
            <h3 class="text-xl font-bold mb-2">Faça uma Doação</h3>
            <p class="text-sm mb-4 opacity-80">
                Sua contribuição ajuda a cobrir custos de veterinário, comida e cuidados para nossos animais.
            </p>
            <a href="doacao.php" class="block text-center px-4 py-2 bg-accent text-text-light rounded-lg font-semibold hover:opacity-80 transition-opacity duration-200">
                Doar Agora
            </a>
        </div>

        <!-- APADRINHAMENTO -->
        <div class="p-6 bg-white dark:bg-text-light/10 shadow-lg rounded-xl border border-primary/10 dark:border-accent/10 transition-shadow duration-300 hover:shadow-xl">
            <span class="material-symbols-outlined text-4xl text-primary mb-3">pets</span>
            <h3 class="text-xl font-bold mb-2">Seja um Padrinho/Madrinha</h3>
            <p class="text-sm mb-4 opacity-80">
                Apoie um peludo específico mensalmente e receba atualizações sobre o bem-estar dele.
            </p>
            <a href="apadrinhar.php" class="block text-center px-4 py-2 bg-accent text-text-light rounded-lg font-semibold hover:opacity-80 transition-opacity duration-200">
                Apadrinhar
            </a>
        </div>


   <!-- VOLUNTARIADO -->
        <div class="p-6 bg-white dark:bg-text-light/10 shadow-lg rounded-xl border border-primary/10 dark:border-accent/10 transition-shadow duration-300 hover:shadow-xl">
        <span class="material-symbols-outlined text-4xl text-primary mb-3">volunteer_activism</span>
    
        <h3 class="text-xl font-bold mb-2">Quero Ser Voluntário!</h3>
    
        <p class="text-sm mb-4 opacity-80">
        Ajude a cuidar, divulgar e apoiar nossos peludos! Seja parte dessa rede de amor e transforme vidas.
        </p>
    
   <a href="voluntario.php" class="block text-center px-4 py-2 bg-accent text-text-light rounded-lg font-semibold hover:opacity-80 transition-opacity duration-200">
                Participar
            </a>
        </div>
    </div>

</section>

<section class="py-12 md:py-20" id="sobre">

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
        </div>

    </div>

    <!-- ADOÇÃO -->
    <div class="mt-12 bg-primary/10 p-8 rounded-xl">
        <h3 class="text-2xl font-bold mb-8 text-center text-primary">Como Funciona a Adoção?</h3>
        <div class="grid md:grid-cols-3 gap-8">
            
            <div class="flex flex-col items-center text-center p-4">
                <div class="w-10 h-10 flex items-center justify-center bg-primary text-white rounded-full text-lg font-bold mb-4">1</div>
                <h4 class="text-xl font-bold mb-2">Escolha seu Pet</h4>
                <p class="opacity-80">Navegue pelos perfis dos nossos peludos e se apaixone.</p>
            </div>
            
            <div class="flex flex-col items-center text-center p-4">
                <div class="w-10 h-10 flex items-center justify-center bg-primary text-white rounded-full text-lg font-bold mb-4">2</div>
                <h4 class="text-xl font-bold mb-2">Fale conosco!</h4>
                <p class="opacity-80">Nos conte um pouco sobre você, o gatinho escolhido e o lar que pode oferecer.</p>
            </div>
            
            <div class="flex flex-col items-center text-center p-4">
                <div class="w-10 h-10 flex items-center justify-center bg-primary text-white rounded-full text-lg font-bold mb-4">3</div>
                <h4 class="text-xl font-bold mb-2">Leve para Casa</h4>
                <p class="opacity-80">Após aprovação, prepare-se para receber seu novo melhor amigo!</p>
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
                <button
                    class="w-full py-1.5 bg-accent/70 text-text-light rounded-md text-sm font-semibold hover:bg-accent">
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
                <button
                    class="w-full py-1.5 bg-accent/70 text-text-light rounded-md text-sm font-semibold hover:bg-accent">
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
                <button
                    class="w-full py-1.5 bg-accent/70 text-text-light rounded-md text-sm font-semibold hover:bg-accent">
                    Ver Perfil
                </button>
            </div>
        </div>
        
        <div
            class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 hover:shadow-xl transition">
            <div class="aspect-square bg-cover bg-center"
                style="background-image: url('../assets/img/gato4.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Olive</h3>
                <p class="text-sm opacity-70 mb-3">Macho, 3 anos</p>
                <button
                    class="w-full py-1.5 bg-accent/70 text-text-light rounded-md text-sm font-semibold hover:bg-accent">
                    Ver Perfil
                </button>
            </div>
        </div>

        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 hover:shadow-xl transition">
            <div class="aspect-square bg-cover bg-center"
                style="background-image: url('../assets/img/gato5.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Amora</h3>
                <p class="text-sm opacity-70 mb-3">Fêmea, 2 a 3 anos</p>
                <button
                    class="w-full py-1.5 bg-accent/70 text-text-light rounded-md text-sm font-semibold hover:bg-accent">
                    Ver Perfil
                </button>
            </div>
        </div>

    </div>
</section>
    <!-- CONTATO -->
    <section class="py-12 md:py-20" id="contato">
        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4 text-text-light dark:text-text-dark">
                Fale Conosco
            </h2>
            <p class="text-lg opacity-90">
                Tem alguma dúvida ou quer saber mais sobre nosso trabalho? Mande uma mensagem.
            </p>
        </div>

        <form class="max-w-xl mx-auto p-8 bg-white dark:bg-text-light/10 rounded-xl shadow-lg border border-primary/10 dark:border-accent/10">
            <div class="space-y-4">

                <div>
                    <input id="name" name="name" type="text" placeholder="Nome"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary dark:bg-background-dark/50"/>
                </div>

                <div>
                    <input id="email" name="email" type="email" placeholder="Email"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary dark:bg-background-dark/50"/>
                </div>

                <div>
                    <input id="subject" name="subject" type="text" placeholder="Assunto"
                           class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary dark:bg-background-dark/50"/>
                </div>

                <div>
                    <textarea id="message" name="message" rows="4" placeholder="Mensagem"
                              class="w-full px-4 py-2 border rounded-lg focus:ring-primary focus:border-primary dark:bg-background-dark/50"></textarea>
                </div>

                <button type="submit"
                        class="w-full py-3 bg-primary text-white rounded-lg font-bold hover:bg-opacity-90">
                    Enviar Mensagem
                </button>

            </div>
        </form>
    </section>

</main>

<script src="../assets/js/patinhas.js"></script>
<?php include('../includes/rodape.php'); ?>

</body>
</html>
