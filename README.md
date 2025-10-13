# Hello Child & Template Kits

Este repositório concentra a documentação, os templates e os ativos necessários para evoluir experiências digitais baseadas no tema **Hello Elementor**. A estrutura foi reorganizada para privilegiar as entregas em Template Kits, mantendo o tema filho legado disponível apenas para cenários específicos.

## Visão geral da estrutura

- `docs/`: hub central de conhecimento.
  - `README.md`: mapa do conteúdo disponível e como navegar pelas referências.
  - `operations/`: fluxos operacionais e governança (ex.: `operations/fluxo-engenharia.md`).
  - `library/`: diretrizes de design, UX, conteúdo e relatórios pesquisáveis.
- `template-kits/`: coleção oficial de Template Kits (`hello-elementor/` + catálogo `.json`).
- `tooling/`: scripts e automações para padronização, QA e geração assistida por IA.
- `legacy-theme/hello-child/`: tema filho Hello Child para manutenções específicas em PHP/CSS.

## Diretrizes unificadas de engenharia

As políticas do projeto foram consolidadas em torno de cinco pilares:

1. **Pesquisa guiada por dados** – todo trabalho inicia com briefing documentado, análise de benchmarks recentes e métricas de desempenho (ver `docs/library/ai-ecommerce-design-guidelines.md`).
2. **Design sistemático** – utilize tokens globais, containers flexíveis do Elementor e padrões responsivos mobile-first; documente decisões no README de cada kit.
3. **Entrega sustentável** – prefira widgets nativos, valide compatibilidade com WooCommerce e WordPress 6.5+, e registre dependências antes do commit.
4. **Qualidade verificável** – execute o checklist de QA (acessibilidade, performance e fluxo de compra) e anexe evidências no PR.
5. **Governança transparente** – mantenha changelogs, relatórios em `docs/library/reports/` (quando aplicável) e utilize o fluxo Git descrito em `docs/operations/fluxo-engenharia.md`.

## Template Kits

Os Template Kits residem em [`template-kits/`](template-kits/README.md) e são distribuídos em subpastas por tipo de artefato. Consulte sempre:

- `template-kits/hello-elementor/README.md` para visão detalhada das páginas e seções disponíveis.
- `docs/library/template-usage.md` para o passo a passo de importação e ajustes pós-importação.
- `docs/library/ai-ecommerce-design-guidelines.md` para checklist de criação assistida por IA e políticas de performance/acessibilidade.

> Sempre importe os templates em ambiente de testes, valide responsividade nos três breakpoints e atualize links/imagens antes da publicação.

## Tema filho legado

O tema filho **Hello Child** permanece disponível em `legacy-theme/hello-child/` para projetos que ainda dependem de customizações específicas. Novas implantações devem priorizar os Template Kits; ao trabalhar no tema filho, siga o fluxo descrito em `docs/operations/fluxo-engenharia.md`, aplique PSR-12 em PHP e mantenha compatibilidade com WooCommerce.

## Contribuição

1. Crie uma branch dedicada seguindo a nomenclatura definida pelo time (ex.: `feature/<slug>`).
2. Execute o ciclo descrito em `docs/operations/fluxo-engenharia.md`, garantindo commits descritivos e testes manuais documentados.
3. Atualize a documentação pertinente (READMEs, changelog, relatórios) sempre que uma alteração afetar templates ou diretrizes.
4. Abra um Pull Request com resumo das mudanças, checklist de QA e evidências de validação.

## Licença

Os ativos seguem a mesma licença do tema base Hello Elementor. Consulte os termos oficiais do tema e do Elementor antes de redistribuir arquivos.
