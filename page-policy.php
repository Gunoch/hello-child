<?php
/**
 * Template Name: Políticas – Full Width
 *
 * Página institucional com informações de políticas internas.
 *
 * @package HelloChild
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

$upload_dir      = wp_upload_dir();
$uploads_baseurl = isset( $upload_dir['baseurl'] ) ? $upload_dir['baseurl'] : content_url( 'uploads' );
$uploads_baseurl = trailingslashit( $uploads_baseurl );
$gallery_images  = [
  [
    'src'     => $uploads_baseurl . '2025/10/politicas-01.jpg',
    'alt'     => __( 'Semijoia Ballona na embalagem', 'hello-child' ),
    'caption' => __( 'Acabamento premium com garantia', 'hello-child' ),
  ],
  [
    'src'     => $uploads_baseurl . '2025/10/politicas-02.jpg',
    'alt'     => __( 'Detalhe das semijoias com brilho dourado', 'hello-child' ),
    'caption' => __( 'Qualidade inspecionada peça a peça', 'hello-child' ),
  ],
];

get_header();
?>

<main class="policy" role="main">
  <div
    class="policy-top"
    role="region"
    aria-label="<?php echo esc_attr__( 'Informativo de frete', 'hello-child' ); ?>"
  >
    <div class="container"><span class="badge"><?php esc_html_e( 'Frete Grátis acima de R$299', 'hello-child' ); ?></span></div>
  </div>

  <div class="container policy-content">
    <?php while ( have_posts() ) : the_post(); ?>
      <h1 class="policy-title"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>

  <div class="container policy-gallery">
    <?php foreach ( $gallery_images as $image ) : ?>
      <figure class="policy-card">
        <img
          src="<?php echo esc_url( $image['src'] ); ?>"
          alt="<?php echo esc_attr( $image['alt'] ); ?>"
          loading="lazy"
        >
        <figcaption><?php echo esc_html( $image['caption'] ); ?></figcaption>
      </figure>
    <?php endforeach; ?>
  </div>

  <aside class="policy-cta" role="complementary" aria-label="<?php echo esc_attr__( 'Chamada para ação', 'hello-child' ); ?>">
    <div class="container policy-cta-inner">
      <div class="policy-cta-text">
        <h2><?php esc_html_e( 'Veja as Novidades', 'hello-child' ); ?></h2>
        <p><?php esc_html_e( 'Descubra os lançamentos e encontre sua próxima peça favorita.', 'hello-child' ); ?></p>
      </div>
      <div class="policy-cta-actions">
        <a class="btn btn-primary" href="<?php echo esc_url( home_url( '/novidades' ) ); ?>">
          <?php esc_html_e( 'Ver Novidades', 'hello-child' ); ?>
        </a>
        <a
          class="btn btn-outline"
          href="<?php echo esc_url( 'https://instagram.com/lojademvp' ); ?>"
          target="_blank"
          rel="noopener"
        >
          <?php esc_html_e( 'Siga no Instagram', 'hello-child' ); ?>
        </a>
      </div>
    </div>
  </aside>
</main>

<?php get_footer(); ?>
