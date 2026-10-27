<?php /* A barra de menu flutuante e o topo: a imagem de fundo ocupa sempre a largura toda do ecrã (ver .hero em styles.css). */ ?>
<header class="site-header">
  <a class="brand" href="#" aria-label="MÃE, início">
    <img src="imgs/maelogoV2.png" alt="MÃE" width="154" height="91" />
  </a>
  <button type="button" class="menu-button" aria-label="Abrir o menu" aria-expanded="false" aria-controls="navigation">
    <span></span><span></span><span></span>
  </button>
  <nav class="nav" id="navigation" aria-label="Principal">
    <a href="#quem-somos">Colecção</a>
    <a href="#kit">Kit</a>
    <a href="#novidades">Novidades</a>
    <a href="#faqs">FAQ’s</a>
    <a href="#contactos">Contactos</a>
    <a class="btn" href="#contactos" data-open-contact>Contacte-nos</a>
  </nav>
</header>

<section class="hero">
  <picture>
    <source media="(min-width: 1082px)" type="image/webp" sizes="100vw"
      srcset="imgs/hero-wide-1280.webp 1280w, imgs/hero-wide-1920.webp 1920w, imgs/hero-wide-2560.webp 2560w" />
    <img class="hero-bg" src="imgs/hero-tall-1000.webp" alt="" fetchpriority="high" decoding="async" sizes="100vw"
      srcset="imgs/hero-tall-640.webp 640w, imgs/hero-tall-1000.webp 1000w, imgs/hero-tall-1500.webp 1500w" />
  </picture>

  <div class="hero-inner">
    <p class="hero-kicker">Natural handmade bodycare · desde 2013</p>
    <h1 class="hero-title">O sabonete que faz espuma na água do mar</h1>
    <p class="hero-text">Suave na sua pele e inofensivo para o meio ambiente.</p>
    <div class="hero-actions">
      <a class="btn btn-light" href="#quem-somos">Descobrir a colecção</a>
      <a class="btn btn-ghost" href="#kit">Ver o kit</a>
    </div>
  </div>
</section>

<div class="container values">
  <p class="value"><strong>Suave na pele</strong><span>Receitas naturais, pensadas para o dia a dia.</span></p>
  <p class="value"><strong>Amigo do ambiente</strong><span>Inofensivo para o meio ambiente e para o mar.</span></p>
  <p class="value"><strong>Feito à mão</strong><span>Sabonetes artesanais, feitos com cuidado.</span></p>
</div>
