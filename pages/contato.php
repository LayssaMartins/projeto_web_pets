<?php include('../includes/menu.php'); ?>
<link rel="stylesheet" href="../assets/css/contato.css">

<main class="contato">
  <section class="titulo">
    <h1>Fale Conosco 💌</h1>
    <p>Quer adotar, doar ou tirar dúvidas? Mande uma mensagem, vamos adorar conversar com você! 🐾</p>
  </section>

  <section class="formulario-contato">
  <?php
    // 1. Captura o parâmetro 'pet' da URL
    $pet_interesse = isset($_GET['pet']) ? htmlspecialchars($_GET['pet']) : '';

    // 2. Captura o parâmetro 'assunto' da URL
    $assunto_selecionado = isset($_GET['assunto']) ? htmlspecialchars($_GET['assunto']) : 'duvidas';

    // 3. Cria a mensagem inicial
    $mensagem_inicial = '';
    if ($pet_interesse) {
        $mensagem_inicial = "Olá, tenho interesse em adotar o(a) {$pet_interesse}. Gostaria de mais informações sobre o processo de adoção.\n\n";
    }
  ?>
    <form action="enviar_contato.php" method="POST" class="form-contato">
      <label for="nome">Nome:</label>
      <input type="text" id="nome" name="nome" placeholder="Seu nome completo" required>

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" placeholder="exemplo@email.com" required>

      <label for="assunto">Assunto:</label>
      <select id="assunto" name="assunto">
        <option value="adocao" <?php if ($assunto_selecionado == 'adocao') echo 'selected'; ?>>Quero Adotar</option>
        <option value="doacao" <?php if ($assunto_selecionado == 'doacao') echo 'selected'; ?>>Doações</option>
        <option value="duvidas" <?php if ($assunto_selecionado == 'duvidas') echo 'selected'; ?>>Dúvidas Gerais</option>
      </select>

      <label for="mensagem">Mensagem:</label>
      <textarea id="mensagem" name="mensagem" rows="5" required><?php echo $mensagem_inicial; ?></textarea>

      <button type="submit" class="btn-enviar">Enviar Mensagem 🐶</button>
    </form>
  </section>

  <section class="redes">
    <h2>Nos siga nas redes sociais!</h2>
    <p>📸 Instagram: <a href="https://www.instagram.com/peludosunipe" target="_blank">@peludosunipe</a></p>
  </section>
</main>

<?php include('../includes/rodape.php'); ?>
