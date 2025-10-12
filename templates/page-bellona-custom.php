<?php
/**
 * Template Name: Bellona - Atelier Personalizado
 * Template Post Type: page
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="bellona-page">
    <section class="bellona-section bellona-section--light">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Atelier Personalizado</span>
            <h1>Crie uma peça Bellona exclusiva para marcar momentos especiais.</h1>
            <p>Desenvolvemos projetos sob medida para noivas, aniversários marcantes e presentes corporativos. Conte sua história e transforme memórias em joias.</p>
        </div>
        <div class="bellona-feature bellona-stack--two">
            <div class="bellona-feature__media">
                <img src="https://via.placeholder.com/960x720/F7F3EF/2B183B?text=Atelier+Personalizado" alt="Atelier personalizado Bellona" />
            </div>
            <div class="bellona-feature__content">
                <h2 class="bellona-feature__title">Processo consultivo com acompanhamento em cada etapa.</h2>
                <p class="bellona-feature__text">Nossa equipe cria moodboards, protótipos em 3D e acompanha a produção artesanal até a entrega final. Você participa das escolhas de banho, pedras, gravações e embalagem.</p>
                <div class="bellona-chip-list">
                    <span class="bellona-chip">Briefing detalhado</span>
                    <span class="bellona-chip">Prototipagem 3D</span>
                    <span class="bellona-chip">Aprovação digital</span>
                </div>
            </div>
        </div>
    </section>

    <section class="bellona-section" id="etapas">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Como funciona</span>
            <h2>Três etapas para transformar sua ideia em semijoia.</h2>
        </div>
        <div class="bellona-bento">
            <article class="bellona-bento__item">
                <h3>1. Imersão</h3>
                <p>Reunião inicial para entender o propósito, referências visuais e faixa de investimento.</p>
                <span class="bellona-highlight">Entrega: moodboard e proposta de materiais.</span>
            </article>
            <article class="bellona-bento__item">
                <h3>2. Criação</h3>
                <p>Desenvolvemos desenho técnico, render 3D e protótipo físico (opcional) para ajustes finos.</p>
                <span class="bellona-highlight">Entrega: renderização 3D e amostra.</span>
            </article>
            <article class="bellona-bento__item">
                <h3>3. Produção</h3>
                <p>Produção manual com acompanhamento da equipe Bellona e embalagem premium personalizada.</p>
                <span class="bellona-highlight">Entrega: peça final com certificado.</span>
            </article>
        </div>
    </section>

    <section class="bellona-section bellona-section--light" id="servicos">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Serviços Complementares</span>
            <h2>Detalhes que tornam cada projeto memorável.</h2>
        </div>
        <div class="bellona-card-grid">
            <article class="bellona-card">
                <h3 class="bellona-card__title">Gravações e iniciais</h3>
                <p class="bellona-card__text">Adicione monogramas, datas marcantes ou mensagens manuscritas no interior das peças.</p>
            </article>
            <article class="bellona-card">
                <h3 class="bellona-card__title">Embalagem sob medida</h3>
                <p class="bellona-card__text">Caixas rígidas, laços em cetim italiano e cartões caligrafados com papel algodão.</p>
            </article>
            <article class="bellona-card">
                <h3 class="bellona-card__title">Entrega concierge</h3>
                <p class="bellona-card__text">Envio personalizado com motorista parceiro na Grande BH ou courier express em capitais.</p>
            </article>
        </div>
    </section>

    <section class="bellona-section" id="cases">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Projetos Bellona</span>
            <h2>Histórias que ganharam vida em semijoias.</h2>
        </div>
        <div class="bellona-lookbook">
            <img src="https://via.placeholder.com/560x720/2B183B/FFFFFF?text=Case+Noiva" alt="Case noiva Bellona" />
            <img src="https://via.placeholder.com/560x720/D4AF37/FFFFFF?text=Case+Corporativo" alt="Case corporativo Bellona" />
            <img src="https://via.placeholder.com/560x720/C197A3/FFFFFF?text=Case+Aniversario" alt="Case aniversário Bellona" />
        </div>
        <div class="bellona-card-grid" style="margin-top:2rem;">
            <article class="bellona-card">
                <h3 class="bellona-card__title">Noiva Aurora</h3>
                <p class="bellona-card__text">Tiara flexível com cristais rosé e ear cuff removível para usar após o casamento.</p>
            </article>
            <article class="bellona-card">
                <h3 class="bellona-card__title">Kit Corporativo Estelar</h3>
                <p class="bellona-card__text">Pulseira personalizada com gravação a laser, entregue com cartão manuscrito para executivas.</p>
            </article>
            <article class="bellona-card">
                <h3 class="bellona-card__title">Coleção Família Lima</h3>
                <p class="bellona-card__text">Pingentes com pedras de nascimento de cada membro da família, entregues em estojo exclusivo.</p>
            </article>
        </div>
    </section>

    <section class="bellona-section bellona-section--gradient" id="cta">
        <span class="bellona-eyebrow">Comece agora</span>
        <h2>Compartilhe sua ideia com a nossa equipe criativa.</h2>
        <p class="bellona-tagline">Preencha o formulário e receba em 24h um briefing inicial com sugestão de materiais, banhos e investimento estimado.</p>
        <div class="bellona-hero__cta">
            <a class="bellona-btn bellona-btn--primary" href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Solicitar proposta</a>
            <a class="bellona-btn bellona-btn--ghost" href="tel:5531999990000">WhatsApp concierge</a>
        </div>
    </section>
</main>

<?php
get_footer();
