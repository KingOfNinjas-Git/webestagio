<?php /* A janela "Contacte-nos". Sem JavaScript o formulário continua a funcionar (submit_contact.php volta à página). */ ?>
<div id="contact-popup" class="popup hidden" role="dialog" aria-modal="true" aria-labelledby="contact-title">
  <div class="popup-content" id="contacto-form">
    <h2 id="contact-title">CONTACTE-NOS</h2>
    <form action="submit_contact.php" method="POST">
      <input id="name" type="text" name="name" placeholder="Nome" aria-label="Nome" autocomplete="name" maxlength="100" required />
      <div class="form-row">
        <input type="email" name="email" placeholder="Email" aria-label="Email" autocomplete="email" maxlength="150" required />
        <input type="tel" name="phone" placeholder="Telefone" aria-label="Telefone" autocomplete="tel" maxlength="30" required />
      </div>
      <textarea name="message" placeholder="Mensagem" aria-label="Mensagem" maxlength="2000" required></textarea>
      <p class="popup-message" role="status" aria-live="polite"></p>
      <button type="submit">Enviar</button>
    </form>
    <button type="button" class="close-popup" aria-label="Fechar">×</button>
  </div>
</div>
