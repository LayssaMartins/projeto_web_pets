function criarGato() {
    const gato = document.createElement("div");
    gato.classList.add("gato");
    gato.innerHTML = "🐱";
    gato.style.top = Math.random() * (window.innerHeight - 50) + "px";
    gato.style.left = "-50px";
    document.body.appendChild(gato);

    let pos = -50;
    const id = setInterval(() => {
        if (pos > window.innerWidth + 50) {
            clearInterval(id);
            gato.remove();
        } else {
            pos += 2 + Math.random() * 3;
            gato.style.left = pos + "px";
        }
    }, 20);
}

setInterval(criarGato, 3000);
