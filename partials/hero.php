<?php /* O topo: a imagem de fundo ocupa sempre a largura toda do ecrã (ver .hero em styles.css). */ ?>
<header class="hero">
  <picture>
    <source media="(min-width: 1082px)" type="image/webp" sizes="100vw"
      srcset="imgs/hero-wide-1280.webp 1280w, imgs/hero-wide-1920.webp 1920w, imgs/hero-wide-2560.webp 2560w" />
    <img class="hero-bg" src="imgs/hero-tall-1000.webp" alt="" fetchpriority="high" decoding="async" sizes="100vw"
      srcset="imgs/hero-tall-640.webp 640w, imgs/hero-tall-1000.webp 1000w, imgs/hero-tall-1500.webp 1500w" />
  </picture>

  <div class="hero-inner">
    <a class="brand" href="#" aria-label="MÃE">
      <img class="brand-wide" src="imgs/maelogoV1.png" alt="MÃE" width="318" height="264" />
      <img class="brand-narrow" src="imgs/maelogoV2.png" alt="MÃE" width="154" height="91" />
    </a>

    <button type="button" class="menu-button" aria-label="Abrir o menu" aria-expanded="false" aria-controls="navigation">
      <span></span><span></span><span></span>
    </button>
    <nav class="nav" id="navigation" aria-label="Principal">
      <a href="#quem-somos">QUEM SOMOS</a>
      <span class="nav-separator" aria-hidden="true"></span>
      <a href="#contactos">CONTACTOS</a>
    </nav>

    <h1 class="hero-title">O SABONETE QUE FAZ ESPUMA NA ÁGUA DO MAR</h1>
    <p class="hero-text">Suave na sua pele e inofensivo para o meio ambiente.</p>
  </div>
</header>
