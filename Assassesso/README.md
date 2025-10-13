# Assassesso – Hub de Templates e Diretrizes

O diretório **Assassesso** concentra os artefatos mais recentes do projeto, reunindo templates atualizados, documentação de engenharia e ferramentas de apoio em um único ponto de acesso. Utilize esta pasta como referência principal ao planejar novas entregas ou atualizar experiências existentes no Elementor.

## Estrutura

- `docs/`: documentação estratégica e guias operacionais alinhados às diretrizes vigentes.
- `templates/`: kits prontos para importação, incluindo páginas priorizadas e seções modulares compatíveis com o tema Hello Elementor.
- `templates/hello-elementor/pages/latest/`: conjunto oficial de páginas atualizadas seguindo as políticas de design IA e o ciclo w01 da marca Bellona.
- `templates/hello-elementor/pages/archive/`: versões anteriores mantidas para consulta histórica.
- `templates/hello-elementor/sections/`: blocos modulares reutilizáveis (hero, vitrines, concierge, políticas, etc.).
- `templates/hello-elementor/blueprints/`: blueprints de engenharia assistida para acelerar a geração de novas páginas.
- `templates/json-catalog/`: catálogo consolidado de exportações `.json` prontos para distribuição.
- `tooling/`: utilitários de automação para regenerar templates e aplicar padrões visuais consistentes.

## Como utilizar

1. Revise os guias em `docs/` para alinhar identidade visual, microcopy e requisitos técnicos antes de abrir o Elementor.
2. Importe os arquivos de `templates/hello-elementor/pages/latest/` para iniciar novos projetos com a versão mais atualizada dos layouts.
3. Consulte os blueprints em `templates/hello-elementor/blueprints/` para gerar variantes assistidas por IA seguindo os tokens definidos.
4. Use os scripts em `tooling/` para padronizar cores, espaçamentos e demais tokens globais, mantendo coerência entre entregas.
5. Sempre registre ajustes relevantes no `README` do kit correspondente e atualize a documentação se diretrizes forem revisadas.

> Para demandas legadas do tema filho, utilize os arquivos na raiz do repositório (`style.css`, `functions.php` e `theme/`). Eles permanecem disponíveis, mas novos desenvolvimentos devem priorizar os Template Kits organizados neste hub.
