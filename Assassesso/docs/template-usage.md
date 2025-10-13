# Guia de Uso dos Template Kits – Hello Elementor

Este guia orienta a importação, configuração e manutenção dos Template Kits versionados no repositório. As instruções estão alinhadas ao fluxo de engenharia unificado e às diretrizes de design 2024.

## Estrutura principal

- `Assassesso/templates/README.md`: visão geral da organização dos kits.
- `Assassesso/templates/hello-elementor/`: coleção oficial para o tema Hello Elementor.
  - `README.md`: instruções detalhadas, tokens aprovados e changelog do kit.
  - `pages/latest/`: páginas completas prontas para publicação.
  - `pages/archive/`: histórico para referência ou rollback.
  - `sections/`: blocos modulares reutilizáveis.
  - `blueprints/`: estruturas de apoio para geração assistida por IA.
- `Assassesso/docs/`: documentação complementar (fluxo de engenharia, diretrizes de design, pesquisas).
- `theme/`, `functions.php`, `style.css`: legado – usar apenas quando for inviável resolver via Template Kit.

## Pré-requisitos

1. Tema **Hello Elementor** ativo e atualizado.
2. Plugin **Elementor** (versão mais recente) e **WooCommerce** configurado para páginas com catálogo.
3. Opcional: **Elementor Pro** para recursos dinâmicos avançados.
4. Briefing/documentação revisados (`briefing.json`, estudos em `docs/`) conforme o fluxo `Descobrir` → `Definir` descrito no `FLUXO-ENGENHARIA.md`.

## Importação passo a passo

1. Acesse **Templates → Template Kits** no painel WordPress.
2. Clique em **Importar Template Kit** e selecione o arquivo `.json` da pasta `pages/latest/` ou `sections/`.
3. Após a importação, abra a página desejada com o Elementor e insira o template em **Meus Templates**.
4. Ajuste conteúdos dinâmicos (produtos, formulários, CTAs, links) e aplique tokens globais via **Site Settings**.
5. Salve a página e valide responsividade nos breakpoints padrão (desktop, tablet, mobile).

## Recomendações pós-importação

- **Identidade**: confirme cores, tipografias e espaçamentos globais. Utilize tokens definidos no README do kit.
- **WooCommerce**: associe widgets às categorias corretas, habilite filtros e configure mensagens de frete/estoque.
- **Acessibilidade**: garanta textos alternativos, hierarquia de headings e foco visível.
- **Performance**: otimize imagens (WebP/AVIF), habilite lazy load e evite animações pesadas.
- **Documentação**: registre adaptações relevantes no README do kit ou em `docs/reports/<slug>-qa.md`.

## Manutenção contínua

- Nomeie arquivos `.json` com padrão `marca-pagina-versao.json` e registre mudanças no changelog.
- Archive versões antigas em `pages/archive/` mantendo metadados (data, motivo da substituição).
- Revise trimestralmente se existe tecnologia mais adequada (novos widgets, recursos Elementor) e atualize o kit conforme necessário.
- Sincronize atualizações de conteúdo com campanhas de marketing e automações (CRM, e-mail, ads).

Seguir este guia assegura que todos os Template Kits permaneçam coerentes com o fluxo de engenharia atual e entreguem experiências de alta qualidade no ecossistema Hello Elementor.
