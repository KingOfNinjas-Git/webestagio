<footer class="footer" id="contactos">
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
      <p><a href="#contactos" data-open-contact><strong>Contacte-nos</strong></a></p>
    </div>
    <div>
      <p><strong>Redes sociais</strong></p>
      <div class="social-icons">
        <a href="#" aria-label="Facebook"><img src="imgs/imgs-produtos/Icon simple-facebook.svg" alt="" width="24" height="24" loading="lazy" /></a>
        <a href="#" aria-label="YouTube"><img src="imgs/imgs-produtos/Icon simple-youtube.svg" alt="" width="24" height="24" loading="lazy" /></a>
        <a href="#" aria-label="Instagram"><img src="imgs/imgs-produtos/Icon simple-instagram.svg" alt="" width="24" height="24" loading="lazy" /></a>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <p><?= htmlspecialchars($site['footer']['copyright']) ?></p>
    <p>Powered by <a href="https://mindshaker.com">Mindshaker</a></p>
  </div>
</footer>
