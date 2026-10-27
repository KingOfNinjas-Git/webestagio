<footer class="footer" id="contactos">
  <div class="footer-cta">
    <h2>Fale connosco, teremos gosto em ajudar.</h2>
    <a class="btn btn-light" href="#contactos" data-open-contact>Contacte-nos</a>
  </div>
  <div class="footer-grid">
    <div>
      <p><strong>Morada</strong></p>
      <p><?= htmlspecialchars($site['footer']['address']) ?></p>
    </div>
    <div>
      <p><strong>Email</strong></p>
      <p><a href="mailto:<?= htmlspecialchars($site['footer']['email']) ?>"><?= htmlspecialchars($site['footer']['email']) ?></a></p>
    </div>
    <div>
      <p><strong>Telefone sede</strong></p>
      <p><?= htmlspecialchars($site['footer']['phone']) ?></p>
    </div>
    <div>
      <p><strong>Redes sociais</strong></p>
      <div class="social-icons">
        <a href="#" aria-label="Facebook"><img src="imgs/imgs-produtos/Icon simple-facebook.svg" alt="" width="20" height="20" loading="lazy" /></a>
        <a href="#" aria-label="YouTube"><img src="imgs/imgs-produtos/Icon simple-youtube.svg" alt="" width="20" height="20" loading="lazy" /></a>
        <a href="#" aria-label="Instagram"><img src="imgs/imgs-produtos/Icon simple-instagram.svg" alt="" width="20" height="20" loading="lazy" /></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p><?= htmlspecialchars($site['footer']['copyright']) ?></p>
    <p>Powered by <a href="https://mindshaker.com">Mindshaker</a></p>
  </div>
</footer>
