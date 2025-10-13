# Fluxo de Engenharia – Hello Elementor Template Kits

Este guia descreve o processo oficial para planejar, implementar e entregar alterações nos Template Kits e no tema filho legado. As diretrizes foram atualizadas para alinhar pesquisa, design assistido por IA e governança de código em um fluxo único.

> **Escopo**: aplicar sempre que houver criação ou atualização de templates `.json`, documentação de apoio ou ajustes no tema filho Hello Child. Novas implantações devem priorizar os Template Kits; o tema filho é utilizado apenas para demandas legadas.

## 1. Descobrir

1. **Registrar briefing**
   - Centralize objetivos, público, KPIs e requisitos técnicos em `briefing.json` ou no ticket correspondente.
   - Reforce referências de marca consultando `Assassesso/docs/ai-ecommerce-design-guidelines.md` e estudos atualizados.
2. **Mapear impacto**
   - Identifique arquivos envolvidos (templates, seções, documentação, hooks legados).
   - Verifique integrações com WooCommerce, automações e analytics.
3. **Analisar benchmarks**
   - Revisite dados de mercado recentes, concorrentes diretos e métricas internas para embasar decisões de UX/conversão.

## 2. Definir

1. **Arquitetura de solução**
   - Desenhe fluxos de navegação e componentes obrigatórios conforme a jornada desejada.
   - Defina tokens globais (cores, tipografia, espaçamentos) e documente no README do kit.
2. **Planejamento de QA**
   - Liste testes funcionais (navegação, CTAs, checkout), acessibilidade (axe/Lighthouse) e performance (PageSpeed).
   - Antecipe evidências necessárias para o PR (prints, notas, relatórios em `docs/reports/`).
3. **Preparação de branch**
   - Crie branch dedicada (`feature/<slug>` ou `fix/<slug>`), garantindo isolamento da alteração.

## 3. Construir

1. **Template Kits**
   - Trabalhe no Elementor utilizando containers flexíveis, abordagem mobile-first e widgets nativos.
   - Exporte `.json` com nomes descritivos para `Assassesso/templates/hello-elementor/pages/latest/` ou subpastas equivalentes.
   - Atualize READMEs com dependências, tokens globais e notas de utilização.
2. **Tema filho (legado)**
   - Localize o arquivo em `theme/` ou `functions.php` e aplique padrões PSR-12 (PHP) e BEM/ITCSS (CSS).
   - Documente no topo do arquivo que se trata de manutenção legada.
3. **Automação e scripts**
   - Utilize ferramentas em `Assassesso/tooling/` para normalizar cores, espaçamentos e realizar linting quando disponível.

## 4. Validar

1. **Testes funcionais e de UX**
   - Importar templates em ambiente de testes, revisar nos breakpoints (desktop/tablet/mobile) e garantir fluxo de compra sem bloqueios.
   - Conferir microcopy, links, integrações com formulários e CTAs dinâmicos.
2. **Acessibilidade e performance**
   - Executar checklists: contraste AA, navegação por teclado, foco visível, tamanhos mínimos.
   - Rodar PageSpeed Insights ou ferramenta equivalente; otimizar imagens, animações e scripts pesados.
3. **Documentar resultados**
   - Salvar prints/evidências, atualizar relatórios em `docs/reports/<slug>-qa.md` quando aplicável e registrar observações no PR.

## 5. Entregar

1. **Governança de código**
   - Revise commits para garantir mensagens claras e escopo enxuto.
   - Atualize changelog, READMEs e versões de templates quando houver alterações relevantes.
2. **Pull Request**
   - Descreva resumo das mudanças, impacto esperado, testes realizados e anexar evidências.
   - Solicite revisão do time, ajuste feedbacks e siga a estratégia de merge definida (squash, merge ou rebase).
3. **Pós-merge**
   - Planeje monitoramento de métricas (conversão, carregamento, eventos) e registre aprendizados para próximas iterações.

---

Seguir este fluxo garante consistência entre pesquisas atualizadas, criação assistida por IA e manutenção de templates prontos para o ecossistema Hello Elementor + WooCommerce.
