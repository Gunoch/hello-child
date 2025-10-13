# Hub de Documentação

O diretório **docs/** consolida as referências necessárias para planejar, executar e validar entregas assistidas por IA no ecossistema Hello Elementor. Utilize este hub como ponto de partida antes de alterar templates ou o tema filho legado.

## Estrutura

- `operations/`: fluxos oficiais de trabalho e governança de código (ex.: `operations/fluxo-engenharia.md`).
- `library/`: acervo de diretrizes, pesquisas, relatórios e materiais de apoio. Inclui estudos específicos de marcas (`library/bellona-w01/`) e guias transversais (`library/ai-ecommerce-design-guidelines.md`).
- `README.md`: mapa rápido para navegar entre operações, biblioteca e kits.

## Como utilizar

1. **Entenda o contexto** – revise `library/ai-ecommerce-design-guidelines.md`, pesquisas da marca e o briefing vigente.
2. **Planeje a entrega** – identifique em `template-kits/` onde o artefato será versionado e quais documentos precisam de atualização.
3. **Implemente** – siga o fluxo descrito em `operations/fluxo-engenharia.md`, mantendo tokens globais e convenções documentadas.
4. **Documente** – atualize o README do kit, changelogs relevantes e reporte achados em `library/reports/` quando aplicável.
5. **Valide e registre** – execute o checklist de QA, salve evidências e referencie-as no Pull Request correspondente.

> O tema filho legado está disponível em `legacy-theme/hello-child/` e deve ser usado apenas quando não houver cobertura pelos Template Kits.
