<?php
/**
 * Template Name: Bellona - Journal & Inspirações
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
            <span class="bellona-eyebrow">Journal Bellona</span>
            <h1>Ideias de styling, bastidores e histórias que inspiram nossas coleções.</h1>
            <p>Explore editoriais, guias de presente e entrevistas com mulheres que fazem parte do universo Bellona.</p>
        </div>
        <div class="bellona-card-grid">
            <article class="bellona-card">
                <h3 class="bellona-card__title">Guia de presentes</h3>
                <p class="bellona-card__text">Sugestões de kits e combinações para surpreender em datas especiais.</p>
                <span class="bellona-highlight">Atualizado mensalmente</span>
            </article>
            <article class="bellona-card">
                <h3 class="bellona-card__title">Styling corporativo</h3>
                <p class="bellona-card__text">Como levar brilho com elegância para reuniões e eventos de negócios.</p>
                <span class="bellona-highlight">Com moodboards para download</span>
            </article>
            <article class="bellona-card">
                <h3 class="bellona-card__title">Bastidores do atelier</h3>
                <p class="bellona-card__text">Conheça artesãos e processos que dão vida às nossas semijoias.</p>
                <span class="bellona-highlight">Novos episódios quinzenais</span>
            </article>
        </div>
    </section>

    <section class="bellona-section" id="posts">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Últimos artigos</span>
            <h2>Destaques recentes do nosso blog.</h2>
        </div>
        <div class="bellona-bento">
            <article class="bellona-bento__item">
                <img src="https://via.placeholder.com/560x360/F7F3EF/2B183B?text=Editorial+Bellona" alt="Editorial Bellona" />
                <h3>Editorial Golden Hour no topo de BH</h3>
                <p>Descubra as referências, looks e makes que inspiraram a campanha mais brilhante da temporada.</p>
                <a class="bellona-btn bellona-btn--ghost" href="#">Ler artigo</a>
            </article>
            <article class="bellona-bento__item">
                <img src="https://via.placeholder.com/560x360/D4AF37/FFFFFF?text=Guia+de+Presentes" alt="Guia de presentes" />
                <h3>Guia Bellona para presentes inesquecíveis</h3>
                <p>Lista curada por especialistas com sugestões para aniversários, promoções e agradecimentos corporativos.</p>
                <a class="bellona-btn bellona-btn--ghost" href="#">Ler artigo</a>
            </article>
            <article class="bellona-bento__item">
                <img src="https://via.placeholder.com/560x360/2B183B/FFFFFF?text=Entrevista" alt="Entrevista" />
                <h3>Conversa com Helena Duarte</h3>
                <p>Nossa diretora criativa compartilha processos, referências e visão para o futuro da Bellona.</p>
                <a class="bellona-btn bellona-btn--ghost" href="#">Ler artigo</a>
            </article>
        </div>
    </section>

    <section class="bellona-section bellona-section--light" id="midia">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Bellona na mídia</span>
            <h2>Veja onde nossas coleções já foram destaque.</h2>
        </div>
        <table class="bellona-table">
            <tbody>
                <tr>
                    <td><strong>Revista Luxo &amp; Lifestyle</strong></td>
                    <td>Edição de agosto - Editorial "Urban Brilliance" com Golden Hour.</td>
                </tr>
                <tr>
                    <td><strong>Podcast Vozes da Moda</strong></td>
                    <td>Episódio #58 com entrevista da diretora criativa Helena Duarte.</td>
                </tr>
                <tr>
                    <td><strong>Portal Elas Lideram</strong></td>
                    <td>Matéria sobre empreendedorismo feminino e slow fashion.</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="bellona-section" id="newsletter">
        <div class="bellona-newsletter">
            <span class="bellona-eyebrow">Newsletter semanal</span>
            <h2>Receba inspirações e pré-vendas direto no seu e-mail.</h2>
            <form action="#" method="post">
                <label class="screen-reader-text" for="bellona-journal-email">E-mail</label>
                <input type="email" id="bellona-journal-email" name="email" placeholder="Digite seu e-mail" required />
                <button class="bellona-btn bellona-btn--primary" type="submit">Assinar agora</button>
            </form>
        </div>
    </section>
</main>

<?php
get_footer();
