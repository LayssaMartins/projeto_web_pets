<?php include('../includes/menu.php'); ?>
<link rel="stylesheet" href="../assets/css/adote.css">
<main class="adote">
  <section class="titulo">
    <h1>Adote um Amigo 🐾</h1>
    <p>Conheça nossos peludos que estão prontos para receber muito amor! 💕</p>
  </section>

  <section class="animais-lista">
    <!-- Exemplo de card de animal (depois será gerado dinamicamente via PHP + banco de dados) -->
    <div class="animal-card">
      <img src="../assets/img/dog1.jpg" alt="Cachorro para adoção">
      <h2>Bolinha</h2>
      <p><strong>Idade:</strong> 2 anos</p>
      <p><strong>Tipo:</strong> Cachorro</p>
      <p>Brincalhão, carinhoso e adora correr! 🐕</p>
      <a href="contato.php?assunto=adocao&pet=Bolinha" class="btn-adotar">Quero Adotar 💛</a>
    </div>

    <div class="animal-card">
      <img src="../assets/img/cat1.jpg" alt="Gato para adoção">
      <h2>Mimi</h2>
      <p><strong>Idade:</strong> 1 ano</p>
      <p><strong>Tipo:</strong> Gato</p>
      <p>Calminha e adora tirar sonecas ao sol ☀️😺</p>
      <a href="contato.php?assunto=adocao&pet=Bolinha" class="btn-adotar">Quero Adotar 💛</a>
    </div>

    <div class="animal-card">
      <img src="../assets/img/dog2.jpg" alt="Cachorro para adoção">
      <h2>Thor</h2>
      <p><strong>Idade:</strong> 3 anos</p>
      <p><strong>Tipo:</strong> Cachorro</p>
      <p>Fiel e cheio de energia, pronto pra novas aventuras! 🦴</p>
      <a href="contato.php?assunto=adocao&pet=Bolinha" class="btn-adotar">Quero Adotar 💛</a>
    </div>
  </section>
</main>

<?php include('../includes/rodape.php'); ?>
