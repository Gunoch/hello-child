# Kit: Hello Elementor – Bellona

Este kit foi configurado para funcionar em instalações que utilizam o tema base **Hello Elementor** aliado aos plugins **Elementor** (versão gratuita) e **WooCommerce**. Todos os widgets utilizados são nativos, garantindo compatibilidade sem dependências extras.

Os artefatos estão organizados para destacar as versões mais atuais do projeto:

- `pages/latest/`: páginas completas aprovadas nas diretrizes atualizadas (ciclo w01 e variações v2).
- `pages/archive/`: versões anteriores preservadas para consulta e comparativo histórico.
- `sections/`: seções modulares (hero, vitrines, concierge, políticas) prontas para inserir em páginas existentes.
- `blueprints/`: estruturas declarativas para geração assistida por IA (ciclo w02).

## Conteúdo do kit (Latest)

| Arquivo | Tipo | Descrição |
| --- | --- | --- |
| `pages/latest/bellona-home-v2.json` | Página completa | Variação com paleta aqua, depoimentos atualizados e CTAs reposicionados para conversão imediata. |
| `pages/latest/bellona-home-w01-ascendant.json` | Página completa | Home heroica com destaque para manifesto w01, vitrine 3x2 e CTA concierge imediato. |
| `pages/latest/bellona-home-w01-lumina.json` | Página completa | Home compacta com navegação âncora, destaques em promoção e call-to-action para briefing semanal. |
| `pages/latest/bellona-home-w01-sentinela.json` | Página completa | Home com narrativa manifesto, benefícios em ícones e bloco de testemunhos Guardiãs. |
| `pages/latest/bellona-home-w01-vanguard.json` | Página completa | Home com tabs de coleção, formulário concierge 2h e métricas sociais. |
| `pages/latest/bellona-landing-w01-aurora.json` | Página completa | Landing da coleção Aurora com materiais, storytelling e captura de leads. |
| `pages/latest/bellona-landing-w01-vip.json` | Página completa | Landing do programa Guardiãs Bellona com benefícios, etapas e FAQ. |
| `pages/latest/bellona-landing-w01-solstice.json` | Página completa | Landing sazonal com contagem regressiva, vitrine de ofertas e garantias de campanha. |
| `pages/latest/bellona-landing-w01-atelier.json` | Página completa | Landing institucional do atelier com processo criativo, equipe e formulário de tour. |
| `pages/latest/bellona-landing-w01-constellation.json` | Página completa | Landing para projetos sob medida com timeline estratégica e casos corporativos. |
| `pages/latest/bellona-landing-w01-gifting.json` | Página completa | Landing de presentes premium com kits configuráveis, depoimentos e FAQ. |
| `pages/latest/bellona-colecao-aurora-v2.json` | Página completa | Versão complementar com textos revisados, curadoria estelar e tonalidades frias. |
| `pages/latest/bellona-lookbook-v2.json` | Página completa | Variação com ênfase em experiências semanais, galerias imersivas e CTA para look do mês. |
| `pages/latest/bellona-guia-cuidados-v2.json` | Página completa | Alternativa com orientações refinadas, CTA atualizado e ajustes de copy. |
| `pages/latest/bellona-politicas-troca-devolucao-v2.json` | Página completa | Versão revisada com copy atualizada, rodapé ampliado e novo destaque para redes sociais oficiais. |
| `pages/latest/bellona-trocas-devolucoes-v2.json` | Página completa | Versão expandida com linguagem simplificada, CTAs duplicados e destaques orientados a processos sem fricção. |
| `pages/latest/bellona-contato-v2.json` | Página completa | Opção com linguagem personalizada, foco em concierge híbrido e ajuste de cores para contraste elevado. |
| `pages/latest/bellona-sobre-v2.json` | Página completa | Versão alternativa com narrativa renovada, bastidores do atelier e reforço da comunidade Guardiãs. |

As demais páginas (v1) permanecem disponíveis em `pages/archive/` para referência.

## Seções modulares

| Arquivo | Tipo | Descrição |
| --- | --- | --- |
| `sections/bellona-hero-ritual-aurora.json` | Seção modular | Hero imersivo com CTA concierge, lista de benefícios e imagem editorial da coleção Aurora. |
| `sections/bellona-vitrine-destaques-aurora.json` | Seção modular | Vitrine curada com filtros de aura, grid WooCommerce 3x2 e CTA para styling personalizado. |
| `sections/bellona-concierge-faq.json` | Seção modular | Bloco combinado de concierge Guardiãs e FAQ com garantias, logística assistida e selos de confiança. |
| `sections/bellona-politicas-troca-devolucao.json` | Página/seção | Layout completo de políticas com cabeçalho responsivo, banner informativo, texto oficial e CTA final. |

## Blueprints (IA)

| Arquivo | Tipo | Descrição |
| --- | --- | --- |
| `blueprints/bellona-ai/bellona-home-w02-elysian.json` | Blueprint IA | Estrutura mobile-first focada em concierge imediato e prova social premium. |
| `blueprints/bellona-ai/bellona-landing-w02-orion.json` | Blueprint IA | Jornada colecional Orion com storytelling em timeline, lookbook imersivo e CTAs de bundle. |
| `blueprints/bellona-ai/bellona-landing-w02-vip.json` | Blueprint IA | Programa Guardiãs VIP com métricas, tabelas de planos e micro navegação sticky. |
| `blueprints/bellona-ai/bellona-landing-w02-solstice.json` | Blueprint IA | Campanha sazonal Solstice com contagem regressiva e kits corporativos. |

## Passo a passo de importação

1. Faça login no WordPress com perfil de administrador.
2. Confirme que o tema **Hello Elementor** está ativo em **Aparência → Temas**.
3. Acesse **Templates → Template Kits** e clique em **Importar Template Kit**.
4. Carregue o arquivo desejado dentro da pasta `pages/latest/`.
5. Após a importação, abra a página em que deseja utilizar o layout pelo Elementor e insira o template a partir da aba **Meus Templates**.

## Ajustes recomendados após a importação

- **Identidade visual**: atualize as configurações globais de cores e tipografia do site através do Elementor para replicar a identidade da marca.
- **WooCommerce**: nos widgets de produtos, selecione as categorias ou coleções que façam sentido para a página. Aproveite os widgets dinâmicos do Elementor Pro, se disponíveis, para exibir produtos em promoção, mais vendidos, etc.
- **Responsividade**: revise o layout nos modos tablet e mobile garantindo que espaçamentos e alinhamentos acompanhem as diretrizes do Hello Elementor.
- **Links e CTAs**: personalize botões de contato (WhatsApp, e-mail) e âncoras internas para evitar links quebrados.

> Consulte `../../docs/bellona-w01/` para seguir a paleta cromática, tipografia, linguagem e microcopy definidos para a fase w01 antes de publicar qualquer variação. Use também `../../docs/ai-ecommerce-design-guidelines.md` para alinhar entregas assistidas por IA.

## Referências úteis

- [Documentação oficial do Hello Elementor](https://elementor.com/help/hello-theme/)
- [Guia do Elementor sobre Template Kits](https://elementor.com/help/template-kits/)
- [Documentação do WooCommerce](https://woocommerce.com/documentation/)

## Checklist rápido de engenharia

1. Exporte o layout do Elementor garantindo que apenas widgets nativos sejam utilizados.
2. Nomeie o arquivo `.json` de forma descritiva (`bellona-<pagina>.json`).
3. Valide o arquivo importando em um ambiente de teste com Hello Elementor + WooCommerce.
4. Atualize as tabelas acima e registre particularidades ou dependências neste `README`.

Mantenha este diretório atualizado com novos templates (páginas, pop-ups e seções) seguindo o mesmo padrão de organização.
