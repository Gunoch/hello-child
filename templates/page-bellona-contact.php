<?php
/**
 * Template Name: Bellona - Contato & Showrooms
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
            <span class="bellona-eyebrow">Fale com a Bellona</span>
            <h1>Consultoria personalizada para presentes, eventos e compras corporativas.</h1>
            <p>Conte com nossa equipe para escolher peças sob medida para o seu estilo ou enviar presentes marcantes. Atendemos em todo o Brasil com envios rápidos.</p>
        </div>
        <div class="bellona-contact">
            <div class="bellona-contact__card">
                <h2>Atendimento Signature</h2>
                <p>Consultoria online com especialista Bellona para montar mix de peças e indicar tamanhos ideais.</p>
                <a class="bellona-btn bellona-btn--primary" href="#formulario">Agendar horário</a>
                <div class="bellona-chip-list">
                    <span class="bellona-chip">Sessão de 30 minutos</span>
                    <span class="bellona-chip">Moodboard personalizado</span>
                </div>
            </div>
            <div class="bellona-contact__card">
                <h2>Contato rápido</h2>
                <address>
                    <strong>WhatsApp:</strong> (31) 99999-0000<br />
                    <strong>E-mail:</strong> concierge@bellona.com.br<br />
                    <strong>Horário:</strong> Segunda a sábado, 9h às 20h
                </address>
                <div class="bellona-social">
                    <a href="#">Instagram</a>
                    <a href="#">Pinterest</a>
                    <a href="#">TikTok</a>
                </div>
            </div>
            <div class="bellona-contact__card">
                <h2>Bellona Maison</h2>
                <address>
                    Rua das Pedras, 245 - Funcionários<br />
                    Belo Horizonte - MG<br />
                    <strong>Showroom:</strong> Mediante agendamento
                </address>
                <img src="https://via.placeholder.com/420x260/F7F3EF/2B183B?text=Mapa+Bellona" alt="Mapa do showroom Bellona" />
            </div>
        </div>
    </section>

    <section class="bellona-section" id="formulario">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">Agende sua consultoria</span>
            <h2>Preencha o formulário e escolha o melhor horário.</h2>
        </div>
        <form class="bellona-bento" action="#" method="post">
            <div class="bellona-bento__item">
                <label for="bellona-nome">Nome completo</label>
                <input type="text" id="bellona-nome" name="nome" placeholder="Como devemos te chamar?" required />
            </div>
            <div class="bellona-bento__item">
                <label for="bellona-email">E-mail</label>
                <input type="email" id="bellona-email" name="email" placeholder="Seu e-mail" required />
            </div>
            <div class="bellona-bento__item">
                <label for="bellona-telefone">WhatsApp</label>
                <input type="tel" id="bellona-telefone" name="telefone" placeholder="(00) 00000-0000" />
            </div>
            <div class="bellona-bento__item">
                <label for="bellona-servico">Interesse</label>
                <select id="bellona-servico" name="servico">
                    <option value="consultoria">Consultoria personal stylist</option>
                    <option value="noiva">Linha noivas e madrinhas</option>
                    <option value="corporativo">Presentes corporativos</option>
                    <option value="atacado">Atacado / Revenda</option>
                </select>
            </div>
            <div class="bellona-bento__item" style="grid-column: 1 / -1;">
                <label for="bellona-mensagem">Mensagem</label>
                <textarea id="bellona-mensagem" name="mensagem" rows="6" placeholder="Conte detalhes sobre o evento, estilo ou orçamento desejado."></textarea>
            </div>
            <div class="bellona-bento__item" style="grid-column: 1 / -1;">
                <button type="submit" class="bellona-btn bellona-btn--primary">Enviar mensagem</button>
            </div>
        </form>
    </section>

    <section class="bellona-section bellona-section--light" id="faq">
        <div class="bellona-section__intro">
            <span class="bellona-eyebrow">FAQ Bellona</span>
            <h2>Perguntas frequentes sobre nossos serviços.</h2>
        </div>
        <div class="bellona-card-grid">
            <article class="bellona-card">
                <h3 class="bellona-card__title">Qual o prazo de entrega?</h3>
                <p class="bellona-card__text">Enviamos em até 24h após confirmação de pagamento. Capitais recebem em 2 a 5 dias úteis via transportadora parceira.</p>
            </article>
            <article class="bellona-card">
                <h3 class="bellona-card__title">Como funciona a garantia?</h3>
                <p class="bellona-card__text">Todas as peças têm garantia de 12 meses para banho e pedras. Oferecemos primeira manutenção gratuita.</p>
            </article>
            <article class="bellona-card">
                <h3 class="bellona-card__title">Há condições especiais para atacado?</h3>
                <p class="bellona-card__text">Sim. Disponibilizamos tabela diferenciada a partir de 20 peças e catálogo exclusivo com lançamentos antecipados.</p>
            </article>
        </div>
    </section>
</main>

<?php
get_footer();
