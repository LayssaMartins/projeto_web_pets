// Função para criar as patinhas animadas 🐾
function criarPatinha() {
  const patinha = document.createElement("div");
  patinha.classList.add("patinha");
  patinha.innerHTML = "🐾";
  patinha.style.left = Math.random() * window.innerWidth + "px";
  patinha.style.animationDuration = 4 + Math.random() * 3 + "s";
  document.body.appendChild(patinha);

  setTimeout(() => {
    patinha.remove();
  }, 7000);
}

setInterval(criarPatinha, 600);

// Gradient animado de fundo para o Hero
const hero = document.querySelector('.hero');
let hue = 0;

function animateHero() {
  hue = (hue + 1) % 360;
  hero.style.background = `linear-gradient(270deg, hsl(${hue}, 70%, 85%), hsl(${(hue+40)%360}, 70%, 90%), hsl(${(hue+80)%360}, 70%, 95%))`;
  requestAnimationFrame(animateHero);
}

animateHero();


const numPatinhas = 5;

for (let i = 0; i < numPatinhas; i++) {
  const patinha = document.createElement('div');
  patinha.classList.add('patinha');
  patinha.style.left = `${Math.random() * 90}vw`;
  document.body.appendChild(patinha);
}
