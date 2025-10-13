# Kit Hello Elementor – Bellona

Este kit consolida páginas, seções e blueprints aprovados para experiências Bellona dentro do ecossistema Hello Elementor. Todas as entregas seguem as diretrizes de engenharia 2024, privilegiando containers flexíveis, tokens globais e compatibilidade com WooCommerce.

## Organização

- `pages/latest/`: páginas completas prontas para importação.
- `pages/archive/`: versões anteriores mantidas para auditoria e rollback.
- `sections/`: blocos modulares reutilizáveis em campanhas e landing pages.
- `blueprints/`: estruturas declarativas de apoio à geração assistida por IA.

## Inventário atual (Latest)

| Arquivo | Tipo | Destaques |
| --- | --- | --- |
| `bellona-home-v2.json` | Página | Home com narrativa consultiva, vitrine dinâmica e CTA concierge imediato. |
| `bellona-home-w01-ascendant.json` | Página | Ênfase em manifesto, vitrine 3x2 e chamadas para experiências exclusivas. |
| `bellona-home-w01-lumina.json` | Página | Layout compacto com âncoras internas e destaques promocionais. |
| `bellona-home-w01-sentinela.json` | Página | Storytelling Guardiãs com prova social expandida. |
| `bellona-home-w01-vanguard.json` | Página | Tabs de coleção, formulário concierge e métricas sociais. |
| `Sass 3/bellona-home-sass3-luminary.json` | Página | Nova home mobile-first com hero gradiente, métricas em destaque e vitrine dinâmica. |
| `Sass 3/bellona-landing-sass3-oracle.json` | Página | Landing do programa Oracle com jornada em etapas, benefícios e FAQ. |
| `Sass 3/bellona-colecao-sass3-solara.json` | Página | Página de coleção Solara com vitrine temática e storytelling consciente. |
| `bellona-landing-w01-aurora.json` | Página | Landing colecional com storytelling e captura de leads. |
| `bellona-landing-w01-vip.json` | Página | Programa VIP com comparativo de planos e FAQ. |
| `bellona-landing-w01-solstice.json` | Página | Campanha sazonal com contagem regressiva e vitrine temática. |
| `bellona-landing-w01-atelier.json` | Página | Landing institucional com timeline e apresentação de equipe. |
| `bellona-landing-w01-constellation.json` | Página | Projetos sob medida com casos corporativos e CTA consultivo. |
| `bellona-landing-w01-gifting.json` | Página | Kits presentes configuráveis e FAQ orientado a logística. |
| `bellona-colecao-aurora-v2.json` | Página | Coleção Aurora com copy atualizada e curadoria estelar. |
| `bellona-lookbook-v2.json` | Página | Galeria imersiva e CTA recorrente para look do mês. |
| `bellona-guia-cuidados-v2.json` | Página | Orientações pós-compra com CTA de concierge e conteúdo educativo. |
| `bellona-politicas-troca-devolucao-v2.json` | Página | Política oficial com linguagem clara e reforço de canais oficiais. |
| `bellona-trocas-devolucoes-v2.json` | Página | Versão orientada a processos rápidos e FAQs diretos. |
| `bellona-contato-v2.json` | Página | Atendimento híbrido com foco em canais rápidos e mapa de boutique. |
| `bellona-sobre-v2.json` | Página | Storytelling institucional com reforço de comunidade. |

> As versões w01 permanecem válidas e foram mantidas por apresentarem melhor desempenho em testes recentes. Ao criar novas variações, documente resultados e mova páginas substituídas para `pages/archive/`.

### Coleção Sass 3

- Localização: `pages/latest/Sass 3/`
- Objetivo: entregar variações premium otimizadas para campanhas SaaS 3Q24 com foco em concierge, narrativa de produto e métricas de comunidade.
- Templates incluídos:
  - `bellona-home-sass3-luminary.json` – home mobile-first com hero gradiente, counters estratégicos e vitrine WooCommerce.
  - `bellona-landing-sass3-oracle.json` – landing de programa recorrente com jornada em etapas e FAQ detalhado.
  - `bellona-colecao-sass3-solara.json` – página de coleção com vitrine temática, storytelling consciente e CTA concierge.

## Seções modulares

| Arquivo | Uso sugerido |
| --- | --- |
| `bellona-hero-ritual-aurora.json` | Hero imersivo com CTA concierge e benefícios resumidos. |
| `bellona-vitrine-destaques-aurora.json` | Vitrine WooCommerce 3x2 com filtros por aura. |
| `bellona-concierge-faq.json` | Bloco combinado de concierge Guardiãs + FAQ. |
| `bellona-politicas-troca-devolucao.json` | Layout completo de políticas com CTA final. |

## Blueprints (IA)

| Arquivo | Objetivo |
| --- | --- |
| `bellona-home-w02-elysian.json` | Estrutura mobile-first com foco em concierge e prova social premium. |
| `bellona-landing-w02-orion.json` | Jornada colecional com timeline e bundles configuráveis. |
| `bellona-landing-w02-vip.json` | Programa Guardiãs VIP com métricas e micro navegação sticky. |
| `bellona-landing-w02-solstice.json` | Campanha sazonal com pacotes corporativos e contagem regressiva. |

## Fluxo de importação

1. Habilite o tema **Hello Elementor** e plugins **Elementor** + **WooCommerce**.
2. Acesse **Templates → Template Kits** no WordPress e importe o `.json` desejado.
3. Insira o template em **Meus Templates** e personalize conteúdos dinâmicos (produtos, CTA, formulários).
4. Ajuste tokens globais via **Site Settings** para refletir a identidade vigente.
5. Valide nos breakpoints padrão, executando o checklist de acessibilidade e performance.

## Diretrizes complementares

- Utilize referências em `../../docs/ai-ecommerce-design-guidelines.md` para garantir aderência a UX, acessibilidade e SEO.
- Mantenha o README atualizado com qualquer dependência extra (plugins, snippets, automações).
- Documente resultados de QA em `docs/reports/` e cite-os nos PRs.
- Para legados específicos de Bellona w01, consulte os estudos em `../../docs/bellona-w01/` observando que servem como referência histórica; novas entregas devem seguir os princípios unificados descritos nas diretrizes 2024.

Manter este README atualizado assegura visibilidade sobre o estado do kit e facilita decisões rápidas sobre evolução de templates.
