<?php
/* Template Name: Políticas – Full Width */
if ( ! defined('ABSPATH') ) exit;
get_header(); ?>
<main class="policy">
  <div class="policy-top" role="region" aria-label="Informativo de frete">
    <div class="container"><span class="badge">Frete Grátis acima de R$299</span></div>
  </div>

  <div class="container policy-content">
    <?php while(have_posts()): the_post(); ?>
      <h1 class="policy-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>

  <div class="container policy-gallery">
    <figure class="policy-card">
      <img src="/wp-content/uploads/2025/10/politicas-01.jpg" alt="Semijoia Ballona na embalagem" loading="lazy">
      <figcaption>Acabamento premium com garantia</figcaption>
    </figure>
    <figure class="policy-card">
      <img src="/wp-content/uploads/2025/10/politicas-02.jpg" alt="Detalhe das semijoias com brilho dourado" loading="lazy">
      <figcaption>Qualidade inspecionada peça a peça</figcaption>
    </figure>
  </div>

  <aside class="policy-cta" role="complementary" aria-label="Chamada para ação">
    <div class="container policy-cta-inner">
      <div class="policy-cta-text">
        <h2>Veja as Novidades</h2>
        <p>Descubra os lançamentos e encontre sua próxima peça favorita.</p>
      </div>
      <div class="policy-cta-actions">
        <a class="btn btn-primary" href="/novidades">Ver Novidades</a>
        <a class="btn btn-outline" href="https://instagram.com/lojademvp" target="_blank" rel="noopener">Siga no Instagram</a>
      </div>
    </div>
  </aside>
</main>
<?php get_footer(); ?>
