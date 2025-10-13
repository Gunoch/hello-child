# Assassesso – Hub Unificado de Templates e Diretrizes

O diretório **Assassesso** reúne os artefatos oficiais do projeto: documentação estratégica, Template Kits atualizados e ferramentas de automação. Utilize esta pasta como fonte de verdade para qualquer planejamento ou entrega no ecossistema Hello Elementor.

## Estrutura

- `docs/`: pesquisas, diretrizes de engenharia, UX, conteúdo e checklists de QA.
- `templates/`: kits prontos para importação, organizados por páginas, seções e blueprints assistidos por IA.
- `templates/json-catalog/`: catálogo consolidado de exportações `.json` destinado à distribuição controlada.
- `tooling/`: scripts e automações para padronizar tokens, regenerar templates e executar validações.

## Como utilizar

1. **Entenda o contexto** – revise `docs/ai-ecommerce-design-guidelines.md` e demais pesquisas relevantes antes de iniciar um trabalho.
2. **Planeje a entrega** – defina em qual kit o arquivo será versionado e quais documentos precisam ser atualizados.
3. **Implemente** – produza ou ajuste os templates utilizando containers flexíveis do Elementor e mantenha a organização de pastas descrita em `templates/README.md`.
4. **Documente** – atualize o README do kit com tokens globais, dependências e notas de uso sempre que algo mudar.
5. **Valide e registre** – execute o checklist de QA, salve evidências em `docs/reports/` quando aplicável e referencie-as no PR.

> O tema filho legado permanece na raiz do repositório. Priorize sempre os Template Kits do hub Assassesso para novas implementações.
