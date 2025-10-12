<?php
/*
 * Template Name: Políticas – Full Width
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>
<main class="policy">
  <div class="policy-top" role="region" aria-label="<?php esc_attr_e( 'Informativo de frete', 'hello-child' ); ?>">
    <div class="container"><span class="badge"><?php esc_html_e( 'Frete Grátis acima de R$299', 'hello-child' ); ?></span></div>
  </div>

  <div class="container policy-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <h1 class="policy-title"><?php the_title(); ?></h1>
      <div class="policy-body"><?php the_content(); ?></div>
    <?php endwhile; ?>
  </div>

  <div class="container policy-gallery">
    <figure class="policy-card">
      <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/policy-01.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Semijoia Ballona na embalagem', 'hello-child' ); ?>" loading="lazy">
      <figcaption><?php esc_html_e( 'Acabamento premium com garantia', 'hello-child' ); ?></figcaption>
    </figure>
    <figure class="policy-card">
      <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/policy-02.jpg' ) ); ?>" alt="<?php esc_attr_e( 'Detalhe das semijoias com brilho dourado', 'hello-child' ); ?>" loading="lazy">
      <figcaption><?php esc_html_e( 'Qualidade inspecionada peça a peça', 'hello-child' ); ?></figcaption>
    </figure>
  </div>

  <aside class="policy-cta" role="complementary" aria-label="<?php esc_attr_e( 'Chamada para ação', 'hello-child' ); ?>">
    <div class="container policy-cta-inner">
      <div class="policy-cta-text">
        <h2><?php esc_html_e( 'Veja as Novidades', 'hello-child' ); ?></h2>
        <p><?php esc_html_e( 'Descubra os lançamentos e encontre sua próxima peça favorita.', 'hello-child' ); ?></p>
      </div>
      <div class="policy-cta-actions">
        <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/novidades' ) ); ?>"><?php esc_html_e( 'Ver Novidades', 'hello-child' ); ?></a>
        <a class="btn btn-outline" href="https://instagram.com/lojademvp" target="_blank" rel="noopener">
          <?php esc_html_e( 'Siga no Instagram', 'hello-child' ); ?>
        </a>
      </div>
    </div>
  </aside>
</main>
<?php
get_footer();
