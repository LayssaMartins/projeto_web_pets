<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Peludos Unipê</title>

    <!-- seu CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Tailwind (mantive conforme você usou) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- fontes -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>

    <!-- sua configuração tailwind (mantive igual) -->
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#FF7D63", // Laranja Primário
                        "background-light": "#FFF8F0", // Fundo Claro
                        "background-dark": "#0B4F6C", // Fundo Escuro (Navy)
                        "text-light": "#0B4F6C", // Texto Claro (Navy)
                        "text-dark": "#FFF8F0", // Texto Escuro (Bege)
                        "accent": "#A8DADC" // Cor de Destaque (Ciano)
                    },
                    fontFamily: {
                        "display": ["Plus Jakarta Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
</head>
<body>

<?php include('../includes/menu.php'); ?>

<main class="home">
  <section class="hero">
    <h1>Adote Amor, Adote um Peludo 🐶🐱</h1>
    <p>Transforme a vida de um animal abandonado e receba amor incondicional em troca. <br>No <strong>Peludos Unipê</strong>, cada adoção é uma oportunidade de fazer o mundo mais feliz para nossos amigos de quatro patas. 🏡💛</p>
    <a href="sobre.php" class="btn">Quero Saber mais</a>
  </section>

<section class="">
  <h2>Conheça Alguns Animais:</h2>
  <div class="carousel">
    <div class="carousel-track">
      <div class="carousel-item"><img src="../assets/img/peludo1.png" alt="Peludo 1"></div>
      <div class="carousel-item"><img src="../assets/img/peludo2.png" alt="Peludo 2"></div>
      <div class="carousel-item"><img src="../assets/img/peludo3.png" alt="Peludo 3"></div>
      <div class="carousel-item"><img src="../assets/img/peuludo4.png" alt="Peuludo 4"></div>
      <!-- duplicando para loop infinito -->
      <div class="carousel-item"><img src="../assets/img/peludo1.png" alt="Peludo 1"></div>
      <div class="carousel-item"><img src="../assets/img/peludo2.png" alt="Peludo 2"></div>
      <div class="carousel-item"><img src="../assets/img/peludo3.png" alt="Peludo 3"></div>
      <div class="carousel-item"><img src="../assets/img/peuludo4.png" alt="Peuludo 4"></div>
    </div>
  </div>
</section>

<!-- fim carrossel / hero -->

<section class="py-12" id="acoes">
    <div class="grid md:grid-cols-3 gap-6">
        
        <div class="p-6 bg-white dark:bg-text-light/10 shadow-lg rounded-xl border border-primary/10 dark:border-accent/10 transition-shadow duration-300 hover:shadow-xl">
            <span class="material-symbols-outlined text-4xl text-primary mb-3">volunteer_activism</span>
            <h3 class="text-xl font-bold mb-2">Faça uma Doação</h3>
            <p class="text-sm mb-4 opacity-80">Sua contribuição ajuda a cobrir custos de veterinário, comida e cuidados para nossos animais.</p>
            <button class="px-4 py-2 bg-accent text-text-light rounded-lg font-semibold hover:opacity-80 transition-opacity duration-200">
                <span class="truncate">Doar Agora</span>
            </button>
        </div>

        <div class="p-6 bg-white dark:bg-text-light/10 shadow-lg rounded-xl border border-primary/10 dark:border-accent/10 transition-shadow duration-300 hover:shadow-xl">
            <span class="material-symbols-outlined text-4xl text-primary mb-3">pets</span>
            <h3 class="text-xl font-bold mb-2">Seja um Padrinho/Madrinha</h3>
            <p class="text-sm mb-4 opacity-80">Apoie um peludo específico mensalmente e receba atualizações sobre o bem-estar dele.</p>
            <button class="px-4 py-2 bg-accent text-text-light rounded-lg font-semibold hover:opacity-80 transition-opacity duration-200">
                <span class="truncate">Apadrinhar</span>
            </button>
        </div>

        <div class="p-6 bg-white dark:bg-text-light/10 shadow-lg rounded-xl border border-primary/10 dark:border-accent/10 transition-shadow duration-300 hover:shadow-xl">
            <span class="material-symbols-outlined text-4xl text-primary mb-3">favorite</span>
            <h3 class="text-xl font-bold mb-2">Quero Adotar!</h3>
            <p class="text-sm mb-4 opacity-80">Veja os perfis dos nossos gatos que estão esperando por um lar amoroso.</p>
            <a class="inline-block px-4 py-2 bg-primary text-white rounded-lg font-semibold hover:bg-opacity-90 transition-opacity duration-200" href="#adocao">
                <span class="truncate">Ver Peludos</span>
            </a>
        </div>
    </div>
</section>

<section class="py-12 md:py-20" id="sobre">
    <div class="text-center max-w-3xl mx-auto mb-12">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4 text-text-light dark:text-text-dark">Nossa Missão</h2>
        <p class="text-lg opacity-90">Nossa principal missão é atuar como um elo entre animais (cães e gatos) que necessitam de ajuda e lares amorosos e responsáveis. Somos uma iniciativa de trabalho voluntário, e não uma ONG formal, que mobiliza a comunidade em prol da causa animal na Paraíba, com forte atuação no Centro Universitário de João Pessoa (Unipê).</p>
    </div>
    
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
                <h4 class="text-xl font-bold mb-2">Preencha o Formulário</h4>
                <p class="opacity-80">Conte-nos um pouco sobre você e o lar que pode oferecer.</p>
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
        <h2 class="text-3xl md:text-4xl font-extrabold text-text-light dark:text-text-dark">Nossos Peludos Esperando um Lar</h2>
    </div>
    
    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
        
        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 transition-shadow duration-300 hover:shadow-xl">
            <div class="aspect-square bg-cover bg-center" style="background-image: url('../assets/img/gato1.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Kiara</h3>
                <p class="text-sm opacity-70 mb-3">Fêmea, 5 Meses</p>
                <button class="w-full py-1.5 bg-accent/70 text-text-light rounded-md text-sm font-semibold hover:bg-accent transition-colors duration-200">Ver Perfil</button>
            </div>
        </div>

        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 transition-shadow duration-300 hover:shadow-xl">
            <div class="aspect-square bg-cover bg-center" style="background-image: url('../assets/img/gato2.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Nala</h3>
                <p class="text-sm opacity-70 mb-3">Fêmea, 5 Meses</p>
                <button class="w-full py-1.5 bg-accent/70 text-text-light rounded-md text-sm font-semibold hover:bg-accent transition-colors duration-200">Ver Perfil</button>
            </div>
        </div>
        
        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 transition-shadow duration-300 hover:shadow-xl">
            <div class="aspect-square bg-cover bg-center" style="background-image: url('../assets/img/gato3.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Tom</h3>
                <p class="text-sm opacity-70 mb-3">Macho, 3 anos</p>
                <button class="w-full py-1.5 bg-accent/70 text-text-light rounded-md text-sm font-semibold hover:bg-accent transition-colors duration-200">Ver Perfil</button>
            </div>
        </div>
        
        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 transition-shadow duration-300 hover:shadow-xl">
            <div class="aspect-square bg-cover bg-center" style="background-image: url('../assets/img/gato4.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Olive</h3>
                <p class="text-sm opacity-70 mb-3">Macho, 3 anos</p>
                <button class="w-full py-1.5 bg-accent/70 text-text-light rounded-md text-sm font-semibold hover:bg-accent transition-colors duration-200">Ver Perfil</button>
            </div>
        </div>
        
        <div class="rounded-xl overflow-hidden shadow-md bg-white dark:bg-text-light/10 transition-shadow duration-300 hover:shadow-xl">
            <div class="aspect-square bg-cover bg-center" style="background-image: url('../assets/img/gato5.png');"></div>
            <div class="p-4">
                <h3 class="text-lg font-bold mb-1">Amora</h3>
                <p class="text-sm opacity-70 mb-3">Fêmea, 2 a 3 anos</p>
                <button class="w-full py-1.5 bg-accent/70 text-text-light rounded-md text-sm font-semibold hover:bg-accent transition-colors duration-200">Ver Perfil</button>
            </div>
        </div>
        
    </div>
</section>

<section class="py-12 md:py-20" id="contato">
    <div class="text-center max-w-2xl mx-auto mb-12">
        <h2 class="text-3xl md:text-4xl font-extrabold mb-4 text-text-light dark:text-text-dark">Fale Conosco</h2>
        <p class="text-lg opacity-90">Tem alguma dúvida ou quer saber mais sobre nosso trabalho? Mande uma mensagem</p>
    </div>

    <form class="max-w-xl mx-auto p-8 bg-white dark:bg-text-light/10 rounded-xl shadow-lg border border-primary/10 dark:border-accent/10">
        <div class="space-y-4">
            <div>
                <label class="sr-only" for="name">Nome</label>
                <input class="w-full px-4 py-2 border border-gray-300 dark:border-text-dark/20 rounded-lg focus:ring-primary focus:border-primary dark:bg-background-dark/50" id="name" name="name" placeholder="Nome" type="text" autocomplete="name"/>
            </div>
            <div>
                <label class="sr-only" for="email">Email</label>
                <input class="w-full px-4 py-2 border border-gray-300 dark:border-text-dark/20 rounded-lg focus:ring-primary focus:border-primary dark:bg-background-dark/50" id="email" name="email" placeholder="Email" type="email" autocomplete="email"/>
            </div>
            <div>
                <label class="sr-only" for="subject">Assunto</label>
                <input class="w-full px-4 py-2 border border-gray-300 dark:border-text-dark/20 rounded-lg focus:ring-primary focus:border-primary dark:bg-background-dark/50" id="subject" name="subject" placeholder="Assunto" type="text"/>
            </div>
            <div>
                <label class="sr-only" for="message">Mensagem</label>
                <textarea class="w-full px-4 py-2 border border-gray-300 dark:border-text-dark/20 rounded-lg focus:ring-primary focus:border-primary dark:bg-background-dark/50" id="message" name="message" placeholder="Mensagem" rows="4"></textarea>
            </div>
            <div>
                <button class="w-full py-3 bg-primary text-white rounded-lg font-bold hover:bg-opacity-90 transition-opacity duration-200" type="submit">Enviar Mensagem</button>
            </div>
        </div>
    </form>
</section>

</main>

<footer class="mt-12 pt-10 border-t border-primary/20 dark:border-text-dark/10">
    <div class="grid md:grid-cols-4 gap-8 pb-10">
        
        <div class="md:col-span-2 space-y-4">
            <div class="flex items-center space-x-3 text-primary">
                <div class="w-8 h-8">
                    
                </div>
                <?php include('../includes/rodape.php'); ?>
            </div>
        </div>

    </div>
</footer>

<script src="../assets/js/patinhas.js"></script>

</body>
</html>

