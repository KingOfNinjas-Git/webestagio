<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="configs.css" />
  <title>SabonetesMae</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="querys.css">
  <script src="animation.js" defer></script>
</head>

<body style="margin: 0">
  <div class="main-container">
    <div class="main">
      <nav>
        <img src="imgs/maelogoV1.png" alt="" class="logo" />
        <div class="logo-mobile">
          <img src="imgs/maelogoV2.png" alt="" />
        </div>
        <div class="menu-container">
          <div class="menu-icon" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <div class="navigation">
            <span class="close-menu" onclick="toggleMenu()">×</span>
            <a href="#quem-somos">QUEM SOMOS</a>
            <div class="separador"></div>
            <a href="#contactos">CONTACTOS</a>
          </div>
        </div>
      </nav>

      <h1 class="sabonete">O SABONETE QUE FAZ ESPUMA NA ÁGUA DO MAR</h1>
      <p class="sabonete-text">
        Suave na sua pele e inofensivo para o meio ambiente.
      </p>
    </div>
    <div class="produtos">
      <h2 class="produtos-title">
        <span class="title-anossa">a nossa</span><br>
        <span class="title-colecao">colecção</span>
      </h2>
      <?php include 'fetch_soaps.php'; ?>
      <?php foreach ($soaps as $index => $soap): ?> 
        <div class="product-container <?= ($index === 1 || $index === 3) ? 'reverse' : '' ?>">
          <img src="<?= htmlspecialchars($soap['image_url']) ?>" alt="<?= htmlspecialchars($soap['title']) ?>"
            class="imgs-sabonete">
          <div class="product-text">
            <h2 class="product-title"><?= htmlspecialchars($soap['title']) ?></h2>
            <div class="product-info">
              <p class="product-price"><strong><?= number_format($soap['price'], 2) ?>€</strong></p>
              <p class="product-description"><?= htmlspecialchars($soap['description']) ?></p>
            </div>
            <p class="product-highlight"><?= htmlspecialchars($soap['highlight']) ?></p>
            <p class="product-ingredients">
              <strong>Ingredientes:</strong> <?= htmlspecialchars($soap['ingredients']) ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="kits">
    <div class="kit-container">
      <h2 class="kit-title">Kit Miniaturas Sabonetes Clássicos</h2>
      <div class="kit-price-info">
        <p class="kit-price"><strong>35,00€</strong></p>
        <p class="kit-details">7 sabonetes, 65gr cada</p>
      </div>
      <p class="kit-description">
        Uma coleção de miniaturas, para quem não se consegue decidir por um
        só sabonete!
      </p>
      <ul class="kit-list">
        <li>
          Sabonete de Chá Verde e Sândalo
          <span class="kit-add" onclick="toggleDetails(this)">+</span>
        </li>
        <p class="kit-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
          maiores ab nobis voluptatibus numquam, dolorum eligendi nam fugit,
          voluptatem ipsa consequuntur mollitia est. Quasi adipisci facere
          maiores, quibusdam ea corrupti.
        </p>

        <li>
          Sabonete de Mel e Cera de Abelhas
          <span class="kit-add" onclick="toggleDetails(this)">+</span>
        </li>
        <p class="kit-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
          maiores ab nobis voluptatibus numquam, dolorum eligendi nam fugit,
          voluptatem ipsa consequuntur mollitia est. Quasi adipisci facere
          maiores, quibusdam ea corrupti.
        </p>

        <li>
          Sabonete de Tangerina e Cardamomo
          <span class="kit-add" onclick="toggleDetails(this)">+</span>
        </li>
        <p class="kit-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
          maiores ab nobis voluptatibus numquam, dolorum eligendi nam fugit,
          voluptatem ipsa consequuntur mollitia est. Quasi adipisci facere
          maiores, quibusdam ea corrupti.
        </p>

        <li>
          Sabonete de Groselha Preta e Folha de Tomate
          <span class="kit-add" onclick="toggleDetails(this)">+</span>
        </li>
        <p class="kit-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
          maiores ab nobis voluptatibus numquam, dolorum eligendi nam fugit,
          voluptatem ipsa consequuntur mollitia est. Quasi adipisci facere
          maiores, quibusdam ea corrupti.
        </p>

        <li>
          Sabonete de Peónia e Neroli
          <span class="kit-add" onclick="toggleDetails(this)">+</span>
        </li>
        <p class="kit-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
          maiores ab nobis voluptatibus numquam, dolorum eligendi nam fugit,
          voluptatem ipsa consequuntur mollitia est. Quasi adipisci facere
          maiores, quibusdam ea corrupti.
        </p>

        <li>
          Sabonete de Alfazema e Erva Príncipe
          <span class="kit-add" onclick="toggleDetails(this)">+</span>
        </li>
        <p class="kit-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
          maiores ab nobis voluptatibus numquam, dolorum eligendi nam fugit,
          voluptatem ipsa consequuntur mollitia est. Quasi adipisci facere
          maiores, quibusdam ea corrupti.
        </p>

        <li>
          Sabonete de Chá Verde e Sândalo
          <span class="kit-add" onclick="toggleDetails(this)">+</span>
        </li>
        <p class="kit-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas
          maiores ab nobis voluptatibus numquam, dolorum eligendi nam fugit,
          voluptatem ipsa consequuntur mollitia est. Quasi adipisci facere
          maiores, quibusdam ea corrupti.
        </p>
      </ul>
    </div>
  </div>
  <div class="novidades">
    <h2 class="novidades-title">novidades</h2>
    <div class="novidades-grid">
      <div class="novidade-item">
        <img src="imgs/imgs-produtos/watermelon.png" alt="Novidade 1" />
        <p class="novidade-text">Bálsamo Labial Melancia</p>
      </div>
      <div class="novidade-item">
        <img src="imgs/imgs-produtos/sealover.png" alt="Novidade 2" />
        <p class="novidade-text">Sabonete Sea Lover</p>
      </div>
      <div class="novidade-item">
        <img src="imgs/imgs-produtos/toranjashampoo.png" alt="Novidade 3" />
        <p class="novidade-text">Shampoo Sólido para Cabelos Normais</p>
      </div>
      <div class="novidade-item">
        <img src="imgs/imgs-produtos/azeitesabonete.png" alt="Novidade 4" />
        <p class="novidade-text">Sabonete de Azeite Biológico de Tomilho</p>
      </div>
      <div class="novidade-item">
        <img src="imgs/imgs-produtos/incensoshampoo.png" alt="Novidade 5" />
        <p class="novidade-text">Shampoo Sólido para Cabelo e Barba</p>
      </div>
      <div class="novidade-item">
        <img src="imgs/imgs-produtos/kitclassicos.png" alt="Novidade 6" />
        <p class="novidade-text">Kit Miniaturas Sabonetes Clássicos</p>
      </div>
      <div class="novidade-item">
        <img src="imgs\imgs-produtos\wonderbalm.png" alt="Novidade 7" />
        <p class="novidade-text">Wonder Balm</p>
      </div>
      <div class="novidade-item">
        <img src="imgs/imgs-produtos/limasabonete.png" alt="Novidade 8" />
        <p class="novidade-text">Bálsamo Labial Lima</p>
      </div>
    </div>
  </div>
  <div class="faqs">
    <h2 class="faqs-title">faq’s</h2>
    <div class="faqs-container">
      <div class="faqs-column">
        <div class="faq-item" data-target="details-1" onclick="toggleFaq(this)">
          <p class="faq-question">Condições Gerais</p>
          <span class="faq-toggle">+</span>
        </div>
        <p id="details-1" class="faq-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="faq-item" data-target="details-2" onclick="toggleFaq(this)">
          <p class="faq-question">Política De Privacidade</p>
          <span class="faq-toggle">+</span>
        </div>
        <p id="details-2" class="faq-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="faq-item" data-target="details-3" onclick="toggleFaq(this)">
          <p class="faq-question">Que Informação Recolhemos?</p>
          <span class="faq-toggle">+</span>
        </div>
        <p id="details-3" class="faq-extra-details">
          Recolhemos o seu nome, número de telefone, endereço postal, e-mail
          e idade para uso em campanhas de marketing, prémios e newsletters.
          Além disso, quando efetuar uma compra no nosso site, recolhemos
          também informações sobre a morada de entrega e detalhes de
          pagamento. Podemos também recolher outras informações sobre a sua
          experiência no nosso site que contribuem para a melhoria do nosso
          serviço.
        </p>
      </div>
      <div class="faqs-column">
        <div class="faq-item" data-target="details-4" onclick="toggleFaq(this)">
          <p class="faq-question">Como são usados os dados recolhidos?</p>
          <span class="faq-toggle">+</span>
        </div>
        <p id="details-4" class="faq-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="faq-item" data-target="details-5" onclick="toggleFaq(this)">
          <p class="faq-question">Atualização dos seus dados</p>
          <span class="faq-toggle">+</span>
        </div>
        <p id="details-5" class="faq-extra-details">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <div class="faq-item" data-target="details-6" onclick="toggleFaq(this)">
          <p class="faq-question">Clientes Internacionais</p>
          <span class="faq-toggle">+</span>
        </div>
        <p id="details-6" class="faq-extra-details">
          A Mãe Bodycare rege-se pela legislação e autorizações de
          comercialização em vigor em Portugal e não se responsabiliza por
          envios de artigos que não estão autorizadas a serem
          comercializadas no local de entrega. Nestes casos:<br />
          <br />
          Se o envio é efetuado via Correios Portugueses e, entra
          automaticamente em devolução, por motivos de não autorização de
          entrada da mercadoria no país de destino, após a recepção da
          encomenda devolvida na nossa loja, reembolsamos o valor dos
          produtos deduzido de eventuais taxas aduaneiras portuguesas
          aplicadas, sob forma de vale de desconto.<br />
          <br />
          Por motivos de atuação alfandegária, em alguns destinos de exceção
          só é colocada a possibilidade de optar ou não pela devolução. Ela
          é automaticamente efetuada e o custo suportado pelo nosso cliente.
          Embora pouco frequente, em casos específicos, o cliente poderá ter
          que se dirigir ao posto de correios mais próximo para proceder ao
          levantamento da encomenda.<br />
          <br />
          Embora pouco frequente, em casos específicos, o cliente poderá ter
          que se dirigir ao posto de correios mais proximo para proceder ao
          levantamento da encomenda.
        </p>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-section">
        <p><strong>Morada</strong></p>
        <p>Rua Santa Teresa do Menino Jesus Nº6, 17º andar</p>
      </div>
      <div class="footer-section">
        <p><strong>Email</strong></p>
        <p>fpg@fpg.pt</p>
      </div>
      <div class="footer-section telefone">
        <div class="telefone-header">
          <p><strong>Telefone sede</strong></p>
          <p>+351 214 123 780</p>
        </div>
        <a href="javascript:void(0);" onclick="togglePopup()">Contacte-nos</a>
      </div>
      <div class="footer-section">
        <p><strong class="icon-text">Redes sociais</strong></p>
        <div class="social-icons">
          <a href="#"><img src="imgs/imgs-produtos/Icon simple-facebook.svg" alt="Facebook" /></a>
          <a href="#"><img src="imgs/imgs-produtos/Icon simple-youtube.svg" alt="YouTube" /></a>
          <a href="#"><img src="imgs/imgs-produtos/Icon simple-instagram.svg" alt="Instagram" /></a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>© 2023 MÃEBODYCARE. Todos os direitos reservados</p>
      <p class="mindshaker">
        Powered by <a href="https://mindshaker.com">Mindshaker</a>
      </p>
    </div>
  </footer>
  <div id="contact-popup" class="popup hidden">
    <div class="popup-content">
      <h2>CONTACTE-NOS</h2>
      <form action="submit_contact.php" method="POST">
        <input id="name" type="text" name="name" placeholder="Nome" required />
        <div class="form-row">
          <input type="email" name="email" placeholder="Email" required />
          <input type="tel" name="phone" placeholder="Telefone" required />
        </div>
        <textarea name="message" placeholder="Mensagem" required></textarea>
        <button type="submit">Enviar</button>
      </form>
      <span class="close-popup" onclick="togglePopup()">×</span>
    </div>
  </div>
  </div>
</body>

</html>