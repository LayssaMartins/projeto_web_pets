<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peludos Unipê 🐶🐱</title>

    <link rel="stylesheet" href="/projeto_web_pets/assets/css/style.css">
    <script src="/projeto_web_pets/assets/js/script.js" defer></script>
    <style>
        /* Incluindo o CSS aqui para demonstração rápida.
           No seu projeto, ele deve estar no 'style.css'. */
        header {
            background-color: #1E4D8B; /* Exemplo de cor de fundo para o header */
            padding: 10px 20px;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo a {
            color: #fff;
            text-decoration: none;
            font-size: 1.5rem;
        }
        .logo span {
            font-weight: bold;
        }
        .menu {
            list-style: none;
            display: flex; /* O menu deve ser flexível por padrão no desktop */
            margin: 0;
            padding: 0;
        }
        .menu li a {
            color: #fff;
            text-decoration: none;
            padding: 0 15px;
            display: block;
        }
        /* Seu CSS de hambúrguer e media query vem aqui */
        
        /* Hambúrguer - Desktop: escondido */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 5px;
            z-index: 1000; /* Garante que o ícone fique acima do menu */
        }
        .hamburger span {
            height: 3px;
            width: 25px;
            background: #fff;
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .menu {
                display: none; /* ESCONDE O MENU POR PADRÃO NO MOBILE */
                flex-direction: column;
                position: absolute;
                top: 60px; /* Ajuste para logo abaixo do header */
                right: 0;
                background: #1E4D8B;
                width: 200px;
                padding: 1rem;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                z-index: 999;
            }
            .menu.show {
                display: flex; /* MOSTRA O MENU QUANDO A CLASSE 'show' ESTÁ ATIVA */
            }
            .hamburger {
                display: flex; /* MOSTRA O BOTÃO HAMBÚRGUER NO MOBILE */
            }
            .navbar {
                 /* Garante que o header ocupe a largura total */
                align-items: center;
            }
        }
    </style>
</head>

<body id="topo">

<header>
    <nav class="navbar">

        <div class="logo">
            <a href="/projeto_web_pets/pages/index.php#topo">🐾 Peludos <span>Unipê</span></a>
        </div>
        
        <div class="hamburger" id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <ul class="menu" id="menu">
            <li><a href="/projeto_web_pets/pages/index.php#topo">Início</a></li>
            <li><a href="/projeto_web_pets/pages/index.php#sobre">Sobre</a></li>
            <li><a href="/projeto_web_pets/pages/index.php#acoes">Ajude</a></li>
            <li><a href="/projeto_web_pets/pages/index.php#adocao">Adotar</a></li>
            <li><a href="/projeto_web_pets/pages/index.php#contato">Contato</a></li>
        </ul>

    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const hamburger = document.getElementById('hamburger');
    const menu = document.getElementById('menu');

    // A lógica está correta: ao clicar, alterna a classe 'show'
    hamburger.addEventListener('click', () => {
        menu.classList.toggle('show');
        // Opcional: Adicionar uma classe 'is-active' ao hambúrguer para animação X
        // hamburger.classList.toggle('is-active'); 
    });
});
</script>
</body>
</html>