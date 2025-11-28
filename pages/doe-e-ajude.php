<?php include('../includes/menu.php'); ?>

<main class="min-h-screen py-16 px-4 bg-background-light text-text-dark">
    
    <section class="max-w-4xl mx-auto text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-extrabold text-primary mb-3">
            Doe e Ajude 🐾
        </h1>
        <p class="text-lg md:text-xl text-secondary/90">
            Nem todo herói usa capa — alguns têm corações gigantes! 💖
        </p>
    </section>

    <section class="max-w-6xl mx-auto py-10">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-text-dark">
            Como Você Pode Ajudar
        </h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            
            <div class="flex flex-col bg-card-light rounded-xl shadow-lg border border-accent overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <img src="../assets/img/doacao-ração.jpg" alt="Doação de ração" class="w-full h-48 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold mb-2 text-secondary">Doando Itens</h3>
                    <p class="text-subtext-light">Doe ração, remédios, coleiras, caminhas e outros itens que ajudam no cuidado diário dos nossos peludos.</p>
                </div>
            </div>

            <div class="flex flex-col bg-card-light rounded-xl shadow-lg border border-accent overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <img src="../assets/img/voluntario.jpg" alt="Voluntário ajudando animais" class="w-full h-48 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold mb-2 text-secondary">Seja Voluntário</h3>
                    <p class="text-subtext-light">Ajude nas feiras de adoção, divulgação e cuidados com os animais. Toda ajuda é bem-vinda! 💪</p>
                </div>
            </div>

            <div class="flex flex-col bg-card-light rounded-xl shadow-lg border border-accent overflow-hidden transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <img src="../assets/img/divulgar.jpg" alt="Pessoa usando celular" class="w-full h-48 object-cover">
                <div class="p-6 text-center">
                    <h3 class="text-xl font-bold mb-2 text-secondary">Divulgando o Projeto</h3>
                    <p class="text-subtext-light">Compartilhe nosso site e o perfil no Instagram <strong class="text-primary font-semibold">@peludosunipe</strong>. Assim, mais pessoas conhecerão os bichinhos que precisam de um lar. 📲</p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-4xl mx-auto mt-16 p-8 bg-primary/5 rounded-xl text-center border-l-4 border-primary">
        <h2 class="text-3xl font-bold mb-4 text-primary">
            Quer Contribuir Financeiramente?
        </h2>
        <p class="text-lg text-text-dark">
            Entre em contato conosco pelo 
            <a href="contato.php" class="font-semibold text-secondary hover:text-primary transition-colors duration-300 underline">
                formulário de contato
            </a> para saber como doar valores em dinheiro ou patrocinar ações do projeto.
        </p>
    </section>
</main>

<?php include('../includes/rodape.php'); ?>
