# Kit: Hello Elementor – Bellona

Este kit foi configurado para funcionar em instalações que utilizam o tema base **Hello Elementor** aliado aos plugins **Elementor** (versão gratuita) e **WooCommerce**. Todos os widgets utilizados são nativos, garantindo compatibilidade sem dependências extras.

Desde o ciclo w02, os blueprints de engenharia assistida por IA estão versionados em `blueprints/bellona-ai/`, permitindo que agentes automatizados gerem novas páginas antes da exportação final em `pages/`.

## Conteúdo do kit

| Arquivo | Tipo | Descrição |
| --- | --- | --- |
| `pages/bellona-home.json` | Página completa | Landing page inicial com destaque para a nova coleção, diferenciais da marca, vitrines de produtos e prova social. |
| `pages/bellona-home-v2.json` | Página completa | Variação com paleta aqua, depoimentos atualizados e CTAs reposicionados para conversão imediata. |
| `pages/bellona-sobre.json` | Página completa | Página institucional com manifesto da marca, linha do tempo, pilares estratégicos e CTA para newsletter do atelier. |
| `pages/bellona-sobre-v2.json` | Página completa | Versão alternativa com narrativa renovada, blocos revisados e foco em bastidores do atelier. |
| `pages/bellona-colecao-aurora.json` | Página completa | Apresenta a coleção Aurora com destaques de produtos, sugestões de styling, galeria curada e formulário para agendar sessão exclusiva. |
| `pages/bellona-colecao-aurora-v2.json` | Página completa | Versão complementar com textos revisados, curadoria estelar e tonalidades frias para destacar os cristais. |
| `pages/bellona-lookbook.json` | Página completa | Lookbook digital com galerias de inspiração, destaques temáticos e orientações de styling da equipe Bellona. |
| `pages/bellona-lookbook-v2.json` | Página completa | Variação com ênfase em experiências semanais, galerias imersivas e CTA para look do mês. |
| `pages/bellona-guia-cuidados.json` | Página completa | Guia prático de conservação com rotina passo a passo, destaques de boas práticas e FAQ de manutenção das peças. |
| `pages/bellona-guia-cuidados-v2.json` | Página completa | Alternativa com orientações refinadas, CTA atualizado e ajustes de copy para suporte dedicado. |
| `pages/bellona-trocas-devolucoes.json` | Página completa | Layout de políticas de trocas e devoluções com blocos reutilizáveis (banner, destaques, FAQ, CTA para suporte e bloco WooCommerce de produtos relacionados). |
| `pages/bellona-trocas-devolucoes-v2.json` | Página completa | Versão expandida com linguagem simplificada, CTAs duplicados e destaques orientados a processos sem fricção. |
| `pages/bellona-contato.json` | Página completa | Central de relacionamento com cards de canais, checklist de atendimento e área para formulário Elementor ou shortcode. |
| `pages/bellona-contato-v2.json` | Página completa | Opção com linguagem personalizada, foco em concierge híbrido e ajuste de cores para contraste elevado. |
| `pages/bellona-politicas-troca-devolucao.json` | Página completa | Políticas de trocas e devoluções com cabeçalho responsivo, banner informativo, texto oficial, galeria de imagens e CTA final para redes sociais. |
| `pages/bellona-politicas-troca-devolucao-v2.json` | Página completa | Variação revisada com copy atualizada, rodapé ampliado e novo destaque para redes sociais oficiais. |
| `pages/bellona-faq.json` | Página completa | Página de perguntas frequentes com bloco hero contextual, respostas detalhadas e copy alinhada ao concierge Bellona. |
| `pages/bellona-equipe.json` | Página completa | Página institucional para apresentar o time, cultura da marca e CTA de relacionamento. |
| `pages/bellona-experiencia.json` | Página completa | Página dedicada à jornada de personalização com etapas, serviços exclusivos e chamada para consultoria. |
| `pages/bellona-home-w01-ascendant.json` | Página completa | Home heroica com destaque para manifesto w01, vitrine 3x2 e CTA concierge imediato. |
| `pages/bellona-home-w01-sentinela.json` | Página completa | Home com narrativa manifesto, benefícios em ícones e bloco de testemunhos Guardiãs. |
| `pages/bellona-home-w01-vanguard.json` | Página completa | Home com tabs de coleção, formulário concierge 2h e métricas sociais. |
| `pages/bellona-home-w01-lumina.json` | Página completa | Home compacta com navegação âncora, destaques em promoção e call-to-action para briefing semanal. |
| `pages/bellona-landing-w01-aurora.json` | Página completa | Landing da coleção Aurora com materiais, storytelling e captura de leads. |
| `pages/bellona-landing-w01-vip.json` | Página completa | Landing do programa Guardiãs Bellona com benefícios, etapas e FAQ. |
| `pages/bellona-landing-w01-solstice.json` | Página completa | Landing sazonal com contagem regressiva, vitrine de ofertas e garantias de campanha. |
| `pages/bellona-landing-w01-atelier.json` | Página completa | Landing institucional do atelier com processo criativo, equipe e formulário de tour. |
| `pages/bellona-landing-w01-constellation.json` | Página completa | Landing para projetos sob medida com timeline estratégica e casos corporativos. |
| `pages/bellona-landing-w01-gifting.json` | Página completa | Landing de presentes premium com kits configuráveis, depoimentos e FAQ. |
| `blueprints/bellona-ai/bellona-home-w02-elysian.json` | Blueprint IA | Estrutura declarativa para home mobile-first focada em concierge imediato e prova social premium. |
| `blueprints/bellona-ai/bellona-landing-w02-orion.json` | Blueprint IA | Jornada colecional Orion com storytelling em timeline, lookbook imersivo e CTAs de bundle. |
| `blueprints/bellona-ai/bellona-landing-w02-vip.json` | Blueprint IA | Programa Guardiãs VIP com métricas, tabelas de planos e micro navegação sticky. |
| `blueprints/bellona-ai/bellona-landing-w02-solstice.json` | Blueprint IA | Campanha sazonal Solstice com contagem regressiva e kits corporativos. |

## Passo a passo de importação

1. Faça login no WordPress com perfil de administrador.
2. Confirme que o tema **Hello Elementor** está ativo em **Aparência → Temas**.
3. Acesse **Templates → Template Kits** e clique em **Importar Template Kit**.
4. Carregue o arquivo desejado dentro da pasta `pages/`.
5. Após a importação, abra a página em que deseja utilizar o layout pelo Elementor e insira o template a partir da aba **Meus Templates**.

## Ajustes recomendados após a importação

- **Identidade visual**: atualize as configurações globais de cores e tipografia do site através do Elementor para replicar a identidade da marca.
- **WooCommerce**: nos widgets de produtos, selecione as categorias ou coleções que façam sentido para a página. Aproveite os widgets dinâmicos do Elementor Pro, se disponíveis, para exibir produtos em promoção, mais vendidos, etc.
- **Responsividade**: revise o layout nos modos tablet e mobile garantindo que espaçamentos e alinhamentos acompanhem as diretrizes do Hello Elementor.
- **Links e CTAs**: personalize botões de contato (WhatsApp, e-mail) e âncoras internas para evitar links quebrados.

> Consulte o diretório [`docs/bellona-w01/`](../../docs/bellona-w01) para seguir a paleta cromática, tipografia, linguagem e microcopy definidos para a fase w01 antes de publicar qualquer variação.

## Referências úteis

- [Documentação oficial do Hello Elementor](https://elementor.com/help/hello-theme/)
- [Guia do Elementor sobre Template Kits](https://elementor.com/help/template-kits/)
- [Documentação do WooCommerce](https://woocommerce.com/documentation/)

## Checklist rápido de engenharia

1. Exporte o layout do Elementor garantindo que apenas widgets nativos sejam utilizados.
2. Nomeie o arquivo `.json` de forma descritiva (`bellona-<pagina>.json`).
3. Valide o arquivo importando em um ambiente de teste com Hello Elementor + WooCommerce.
4. Atualize a tabela de conteúdo acima e registre particularidades ou dependências neste `README`.

Mantenha este diretório atualizado com novos templates (páginas, pop-ups e seções) seguindo o mesmo padrão de organização.
