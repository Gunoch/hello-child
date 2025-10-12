<?php
/**
 * Template Name: Bellona - Página Inicial
 * Template Post Type: page
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<main id="primary" class="bellona-page">
    <section class="bellona-hero" id="inicio">
        <div class="bellona-hero__content">
            <span class="bellona-eyebrow">Bellona Semijoias</span>
            <h1 class="bellona-hero__headline">Brilho autoral para mulheres que lideram a própria história.</h1>
            <p class="bellona-hero__description">A Bellona cria semijoias com banho de ouro 18k, pedras naturais selecionadas e acabamentos artesanais. Cada coleção combina a força da mulher contemporânea com a delicadeza de detalhes atemporais.</p>
            <div class="bellona-hero__cta" data-bellona-scroll>
                <a class="bellona-btn bellona-btn--primary" href="#colecoes">Ver coleções</a>
                <a class="bellona-btn bellona-btn--ghost" href="#atendimento">Agendar consultoria</a>
            </div>
            <div class="bellona-chip-list">
                <span class="bellona-chip">Banho de ouro 18k hipoalergênico</span>
                <span class="bellona-chip">Garantia Bellona de 12 meses</span>
                <span class="bellona-chip">Envio para todo o Brasil</span>
            </div>
        </div>
        <div class="bellona-feature__media" aria-hidden="true">
            <img src="https://via.placeholder.com/720x900/F7F3EF/2B183B?text=Lookbook+Bellona" alt="Lookbook Bellona" />
        </div>
    </section>

    <section class="bellona-section bellona-section--light" id="destaques">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Destaques da Semana</span>
            <h2>Escolhas pensadas para elevar seus momentos cotidianos.</h2>
            <p>Mix perfeito entre peças statement e clássicos indispensáveis. Ideal para composições versáteis do escritório ao evento especial.</p>
        </div>
        <div class="bellona-card-grid">
            <article class="bellona-card">
                <h3 class="bellona-card__title">Coleção Aurora</h3>
                <p class="bellona-card__text">Design orgânico inspirado no nascer do sol. Peças com curvas suaves e cristais lapidados com brilho difuso.</p>
                <div class="bellona-chip-list">
                    <span class="bellona-chip">Ear cuffs assimétricos</span>
                    <span class="bellona-chip">Banho ouro champagne</span>
                </div>
            </article>
            <article class="bellona-card">
                <h3 class="bellona-card__title">Linhas Essenciais</h3>
                <p class="bellona-card__text">Clássicos com acabamento perfeito para o uso diário: argolas, chokers minimalistas e anéis com pavê brilhante.</p>
                <div class="bellona-chip-list">
                    <span class="bellona-chip">Garantia antialérgica</span>
                    <span class="bellona-chip">Peças empilháveis</span>
                </div>
            </article>
            <article class="bellona-card">
                <h3 class="bellona-card__title">Signature Bellona</h3>
                <p class="bellona-card__text">Edição limitada com pedras naturais exclusivas, numerada e acompanhada de certificado Bellona Maison.</p>
                <div class="bellona-chip-list">
                    <span class="bellona-chip">Quartzo rosa e topázio</span>
                    <span class="bellona-chip">Estojo colecionável</span>
                </div>
            </article>
        </div>
    </section>

    <section class="bellona-section" id="manifesto">
        <div class="bellona-feature bellona-stack--two">
            <div class="bellona-feature__media">
                <img src="https://via.placeholder.com/960x640/F7F3EF/2B183B?text=Atelier+Bellona" alt="Atelier Bellona" />
            </div>
            <div class="bellona-feature__content">
                <span class="bellona-eyebrow">Manifesto Bellona</span>
                <h2 class="bellona-feature__title">Luxo consciente, produzido em pequenos lotes.</h2>
                <p class="bellona-feature__text">Nossos metais recebem banho triplo de ouro 18k e acabamento manual feito por artesãos parceiros em Minas Gerais. A cada coleção escolhemos pedras com procedência rastreada e priorizamos embalagens recicláveis, mantendo o padrão premium Bellona.</p>
                <ul class="bellona-icon-list">
                    <li>
                        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true"><path d="M9.5 16.2 5.3 12l1.4-1.4 2.8 2.8 7.8-7.8L18.7 7l-9.2 9.2z" /></svg>
                        <span>Processo slow fashion com lotes numerados e controle de qualidade rigoroso.</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true"><path d="M9.5 16.2 5.3 12l1.4-1.4 2.8 2.8 7.8-7.8L18.7 7l-9.2 9.2z" /></svg>
                        <span>100% das peças recebem verniz antialérgico e são livres de níquel.</span>
                    </li>
                    <li>
                        <svg viewBox="0 0 24 24" role="presentation" aria-hidden="true"><path d="M9.5 16.2 5.3 12l1.4-1.4 2.8 2.8 7.8-7.8L18.7 7l-9.2 9.2z" /></svg>
                        <span>Certificado Bellona Maison garantindo reposição gratuita de banho em até 12 meses.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="bellona-section bellona-section--light" id="colecoes">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Coleções em Destaque</span>
            <h2>Designers exclusivos que celebram a força feminina.</h2>
            <p>Selecione uma coleção e descubra mix &amp; match pensados para diferentes ocasiões: trabalho, celebrações e presenteáveis.</p>
        </div>
        <div class="bellona-collection-grid">
            <article class="bellona-collection-card">
                <img src="https://via.placeholder.com/800x600/D4AF37/FFFFFF?text=Colecao+Aurora" alt="Coleção Aurora" />
                <div class="bellona-collection-card__body">
                    <h3>Coleção Aurora</h3>
                    <p>Detalhes orgânicos com banho ouro rosé e cristais translúcidos para iluminar produções diurnas.</p>
                    <div class="bellona-collection-card__meta">
                        <span>Lançamento</span>
                        <span>Top 5 presentáveis</span>
                    </div>
                    <a class="bellona-btn bellona-btn--ghost" href="#">Ver lookbook</a>
                </div>
            </article>
            <article class="bellona-collection-card">
                <img src="https://via.placeholder.com/800x600/2B183B/FFFFFF?text=Golden+Hour" alt="Coleção Golden Hour" />
                <div class="bellona-collection-card__body">
                    <h3>Golden Hour</h3>
                    <p>Geometrias limpas com banho ouro amarelo radiante e pontos de luz em zircônias lapidadas.</p>
                    <div class="bellona-collection-card__meta">
                        <span>Edição limitada</span>
                        <span>Garantia vitalícia de banho</span>
                    </div>
                    <a class="bellona-btn bellona-btn--ghost" href="#">Ver lookbook</a>
                </div>
            </article>
            <article class="bellona-collection-card">
                <img src="https://via.placeholder.com/800x600/F7F3EF/2B183B?text=Essential+Line" alt="Linha Essencial" />
                <div class="bellona-collection-card__body">
                    <h3>Essential Line</h3>
                    <p>Peças moduláveis e empilháveis para uma rotina sofisticada. Versatilidade total com acabamento impecável.</p>
                    <div class="bellona-collection-card__meta">
                        <span>Mix &amp; match</span>
                        <span>Disponível em kits</span>
                    </div>
                    <a class="bellona-btn bellona-btn--ghost" href="#">Ver lookbook</a>
                </div>
            </article>
        </div>
    </section>

    <section class="bellona-section" id="editorial">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Editorial Bellona</span>
            <h2>Semijoias que acompanham conquistas, memórias e novas histórias.</h2>
            <p>Inspire-se com composições pensadas para diferentes estilos de vida, fotografadas em ambientes urbanos e resort.</p>
        </div>
        <div class="bellona-lookbook">
            <img src="https://via.placeholder.com/560x720/C197A3/FFFFFF?text=Editorial+01" alt="Editorial Bellona 01" />
            <img src="https://via.placeholder.com/560x720/2B183B/FFFFFF?text=Editorial+02" alt="Editorial Bellona 02" />
            <img src="https://via.placeholder.com/560x720/F7F3EF/2B183B?text=Editorial+03" alt="Editorial Bellona 03" />
            <img src="https://via.placeholder.com/560x720/D4AF37/FFFFFF?text=Editorial+04" alt="Editorial Bellona 04" />
        </div>
    </section>

    <section class="bellona-section bellona-section--light" id="depoimentos">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Experiências Bellona</span>
            <h2>Clientes que transformaram o acessório em assinatura pessoal.</h2>
        </div>
        <div class="bellona-testimonials">
            <article class="bellona-testimonial">
                <p>“A consultoria virtual da Bellona me ajudou a montar um mix de argolas perfeito para o dia e para eventos. As peças chegaram impecáveis.”</p>
                <span class="bellona-testimonial__name">Marina Albuquerque — CEO &amp; Investidora</span>
            </article>
            <article class="bellona-testimonial">
                <p>“Sou noiva e comprei o kit Golden Hour para o meu casamento civil. Recebi elogios o dia todo e as peças seguiram intactas após a festa.”</p>
                <span class="bellona-testimonial__name">Laura Martins — Arquiteta</span>
            </article>
            <article class="bellona-testimonial">
                <p>“Presentear minha equipe com as pulseiras Bellona foi um sucesso. Personalizaram com iniciais e veio com cartão escrito à mão.”</p>
                <span class="bellona-testimonial__name">Fernanda Soares — Diretora Comercial</span>
            </article>
        </div>
    </section>

    <section class="bellona-section" id="atendimento">
        <div class="bellona-cta-banner">
            <span class="bellona-eyebrow">Consultoria Signature</span>
            <h2>Agende uma curadoria exclusiva com nossas especialistas.</h2>
            <p class="bellona-tagline">Reunião online de 30 minutos com moodboard personalizado, dicas de composição e seleção de peças sob medida para o seu estilo.</p>
            <div class="bellona-hero__cta">
                <a class="bellona-btn bellona-btn--primary" href="#contato">Reservar horário</a>
                <a class="bellona-btn bellona-btn--ghost" href="#colecoes">Conhecer coleções</a>
            </div>
        </div>
    </section>

    <section class="bellona-section bellona-section--light" id="newsletter">
        <div class="bellona-newsletter">
            <span class="bellona-eyebrow">Club Bellona</span>
            <h2>Receba pré-vendas, lançamentos e convites para eventos privados.</h2>
            <p>Inscreva-se e ganhe acesso antecipado às coleções limitadas, além de condições especiais em kits presentáveis.</p>
            <form action="#" method="post">
                <label class="screen-reader-text" for="bellona-newsletter-email">E-mail</label>
                <input type="email" id="bellona-newsletter-email" name="email" placeholder="Seu melhor e-mail" required />
                <button type="submit" class="bellona-btn bellona-btn--primary">Quero fazer parte</button>
            </form>
        </div>
    </section>
</main>

<?php
get_footer();
