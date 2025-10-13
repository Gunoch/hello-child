# Blueprints de Templates – Ciclo Bellona IA

Esta pasta centraliza **blueprints estruturais** pensados para geração assistida por IA dos templates Bellona.
Eles traduzem as diretrizes de UX documentadas em [`docs/bellona-w01/`](../../docs/bellona-w01/) e nas
[Diretrizes de Design IA](../../docs/ai-ecommerce-design-guidelines.md) para um formato declarativo que pode ser
processado por agentes automatizados antes da exportação final no Elementor.

## Como utilizar

1. Escolha uma das variações dentro de `bellona-ai/` e carregue o arquivo `.json` no orquestrador da IA ou
   ferramenta interna responsável por transformar blueprints em páginas Elementor.
2. Gere os componentes respeitando a hierarquia indicada em `structure`. Cada seção especifica tokens visuais,
   conteúdo sugerido, CTAs e considerações de acessibilidade/performance.
3. Valide o layout no Elementor e exporte o template final para a pasta `pages/`, seguindo a convenção
   `bellona-<contexto>-w02-<variante>.json`.
4. Atualize este README e o índice do kit sempre que novos blueprints forem adicionados ou revisados.

## Convenções do Blueprint

- `meta`: descreve objetivo, persona primária, jornada e KPIs de conversão esperados.
- `structure`: lista ordenada das seções com seus componentes, textos chave, tokens e integrações.
- `seo`: orientações para headings, metas e dados estruturados.
- `qa`: checklist mínimo para testes pós-importação (responsividade, acessibilidade, fluxo de compra).

> Estes artefatos **não** substituem os arquivos exportados do Elementor; eles servem como camada de engenharia para
> agentes de IA gerarem variações com consistência, rastreabilidade e aderência às políticas do projeto.
