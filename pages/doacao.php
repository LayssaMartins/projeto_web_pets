<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Doe para Peludos Unip</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,0..200" rel="stylesheet"/>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#3A86FF",
              "secondary": "#FFBE0B",
              "background-light": "#F8F9FA",
              "background-dark": "#101922",
              "text-light": "#343A40",
              "text-dark": "#F8F9FA",
              "subtext-light": "#6C757D",
              "subtext-dark": "#adb5bd",
            },
            fontFamily: {
              "display": ["Plus Jakarta Sans", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
      .material-symbols-outlined {
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 24
      }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
<!-- TopNavBar -->
<?php include('../includes/menu.php'); ?>
<!-- HeroSection -->
<section class="w-full py-20 lg:py-32">
<div class="mx-auto max-w-6xl px-4">
<div class="flex min-h-[400px] flex-col gap-6 items-center justify-center rounded-xl p-8 text-center" style="background-color: #7CBFD6;">
<div class="flex flex-col gap-2">
<h1 class="text-white text-4xl md:text-6xl font-black tracking-tighter">Doe &amp; Ajude</h1>
<h2 class="text-white/90 text-base md:text-lg font-normal max-w-2xl mx-auto">Sua doação transforma a vida de um animal necessitado. Juntos, podemos oferecer cuidado, amor e um final feliz.</h2>
</div>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-secondary text-text-light text-base font-bold shadow-lg hover:bg-secondary/90">
<span class="truncate">Quero ajudar agora</span>
</button>
</div>
</div>
</section>
<!-- Como Voce Pode Ajudar Section -->
<section class="w-full py-16 lg:py-24">
<div class="mx-auto max-w-6xl px-4">
<div class="flex flex-col gap-4 text-center mb-12">
<h2 class="text-3xl font-bold tracking-tight">Como Você Pode Ajudar</h2>
<p class="text-subtext-light dark:text-subtext-dark max-w-2xl mx-auto">Existem várias maneiras de contribuir para a nossa causa. Cada gesto de carinho faz a diferença.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<div class="flex flex-col gap-4 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark p-6 text-center items-center">
<div class="flex items-center justify-center size-12 rounded-full bg-primary/10 text-primary">
<span class="material-symbols-outlined">payments</span>
</div>
<h3 class="text-xl font-bold">Doação Financeira</h3>
<p class="text-subtext-light dark:text-subtext-dark text-sm">Sua contribuição monetária ajuda a cobrir custos veterinários, alimentação e manutenção.</p>
<div class="mt-2 w-full rounded-lg bg-background-light dark:bg-white/10 p-3 flex items-center justify-between border border-gray-200 dark:border-gray-700">
<span class="font-mono text-sm text-subtext-light dark:text-subtext-dark">peludosunipe@instituicao.com</span>
<button class="text-primary" title="Copiar PIX">
<span class="material-symbols-outlined text-base">content_copy</span>
</button>
</div>
</div>
<div class="flex flex-col gap-4 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark p-6 text-center items-center">
<div class="flex items-center justify-center size-12 rounded-full bg-primary/10 text-primary">
<span class="material-symbols-outlined">volunteer_activism</span>
</div>
<h3 class="text-xl font-bold">Doar Itens</h3>
<p class="text-subtext-light dark:text-subtext-dark text-sm">Itens como ração, cobertores e medicamentos são essenciais. Veja nossa lista e agende a entrega.</p>
<button class="mt-auto w-full flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary/10 text-primary text-sm font-bold hover:bg-primary/20">
<span class="truncate">Agendar entrega</span>
</button>
</div>
<div class="flex flex-col gap-4 rounded-xl border border-gray-200 dark:border-gray-700 bg-white dark:bg-background-dark p-6 text-center items-center">
<div class="flex items-center justify-center size-12 rounded-full bg-primary/10 text-primary">
<span class="material-symbols-outlined">groups</span>
</div>
<h3 class="text-xl font-bold">Apoiar o Projeto</h3>
<p class="text-subtext-light dark:text-subtext-dark text-sm">Seja um voluntário, proponha uma parceria ou adote com responsabilidade. Preencha nosso formulário.</p>
<button class="mt-auto w-full flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary/10 text-primary text-sm font-bold hover:bg-primary/20">
<span class="truncate">Ver formulário</span>
</button>
</div>
</div>
</div>
</section>
<!-- Beneficios de Ajudar Section -->
<section class="w-full py-16 lg:py-24">
<div class="mx-auto max-w-4xl px-4 text-center">
<h2 class="text-3xl font-bold tracking-tight mb-12">Sua ajuda garante um futuro melhor</h2>
<div class="grid grid-cols-2 md:grid-cols-4 gap-8">
<div class="flex flex-col items-center gap-3">
<span class="material-symbols-outlined text-4xl text-secondary">health_and_safety</span>
<p class="font-semibold">Tratamentos Veterinários</p>
</div>
<div class="flex flex-col items-center gap-3">
<span class="material-symbols-outlined text-4xl text-secondary">pet_supplies</span>
<p class="font-semibold">Alimentação de Qualidade</p>
</div>
<div class="flex flex-col items-center gap-3">
<span class="material-symbols-outlined text-4xl text-secondary">sanitizer</span>
<p class="font-semibold">Castrações e Vacinas</p>
</div>
<div class="flex flex-col items-center gap-3">
<span class="material-symbols-outlined text-4xl text-secondary">cottage</span>
<p class="font-semibold">Abrigo Seguro e Limpo</p>
</div>
</div>
</div>
</section>

<!-- FAQ Section -->
<section class="w-full py-16 lg:py-24">
<div class="mx-auto max-w-3xl px-4">
<div class="flex flex-col gap-4 text-center mb-12">
<h2 class="text-3xl font-bold tracking-tight">Perguntas Frequentes (FAQ)</h2>
<p class="text-subtext-light dark:text-subtext-dark">Tire suas dúvidas sobre como ajudar e para onde vai sua contribuição.</p>
</div>
<div class="space-y-4">
<details class="group rounded-lg bg-white dark:bg-black/20 p-4 border border-gray-200 dark:border-gray-700">
<summary class="flex cursor-pointer items-center justify-between font-semibold">
                                Como posso doar?
                                <span class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-4 text-subtext-light dark:text-subtext-dark text-sm">Você pode doar via PIX, que é a forma mais rápida e direta. Também aceitamos doações de itens como ração e medicamentos em nosso endereço físico, basta agendar a entrega.</p>
</details>
<details class="group rounded-lg bg-white dark:bg-black/20 p-4 border border-gray-200 dark:border-gray-700">
<summary class="flex cursor-pointer items-center justify-between font-semibold">
                                Minha doação é dedutível do imposto de renda?
                                <span class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-4 text-subtext-light dark:text-subtext-dark text-sm">No momento, como um projeto de extensão universitária, não estamos habilitados a oferecer recibos para dedução fiscal. Sua ajuda é uma doação voluntária para a causa animal.</p>
</details>
<details class="group rounded-lg bg-white dark:bg-black/20 p-4 border border-gray-200 dark:border-gray-700">
<summary class="flex cursor-pointer items-center justify-between font-semibold">
                                Como os fundos são utilizados?
                                <span class="material-symbols-outlined transition-transform duration-300 group-open:rotate-180">expand_more</span>
</summary>
<p class="mt-4 text-subtext-light dark:text-subtext-dark text-sm">100% das doações são revertidas para os animais. Os custos prioritários são: tratamento veterinário (consultas, cirurgias, medicamentos), alimentação de alta qualidade, vacinas, castrações e melhorias no abrigo.</p>
</details>
</div>
</div>
</section>
</main>
<!-- Footer -->
<script src="../assets/js/patinhas.js"></script>
<?php include('../includes/rodape.php'); ?>
</div>
</div>
</div>
</footer>
</div>
</body></html>