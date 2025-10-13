# Diretrizes de Design IA para E-commerce WordPress (2024)

Estas diretrizes consolidam práticas atuais para que equipes e assistentes de IA planejem, projetem e entreguem páginas de e-commerce modernas utilizando WordPress + Hello Elementor + WooCommerce. O documento deve ser revisado a cada trimestre ou quando houver mudanças relevantes no ecossistema.

## 1. Objetivos
- Garantir consistência visual e narrativa entre templates, campanhas e automações.
- Otimizar conversão com experiências mobile-first e microcopy orientada a dados.
- Assegurar acessibilidade, desempenho e governança desde a concepção até a publicação.

## 2. Pesquisa e insumos obrigatórios
1. **Briefing estruturado** – registrar público, proposta de valor, métricas de sucesso, diferenciais logísticos e requisitos técnicos.
2. **Benchmark atualizado** – comparar referências de 2023/2024 (retail premium, DTC e marketplaces) focando em hero, provas sociais e checkout.
3. **Dados internos** – analisar resultados de campanhas anteriores, heatmaps e pesquisas com clientes para validar hipóteses.

## 3. Princípios de experiência
- **Identidade viva**: trabalhe com tokens globais (cores, tipografia, espaçamentos) definidos no Elementor Site Settings. Utilize `clamp()` para tipografia fluida e assegure contraste mínimo AA.
- **Arquitetura orientada à jornada**: priorize proposta de valor acima da dobra, evidencie diferenciais, inclua prova social e CTA persistente. Disponibilize políticas (troca, frete, garantia) em até dois cliques.
- **Conteúdo assistido por IA**: gere copy com tom consultivo, revise manualmente e mantenha CTAs acionáveis. Registre variações aprovadas no README do kit.
- **Acessibilidade**: forneça textos alternativos, semântica correta (H1–H3 sequencial), foco visível e áreas de toque ≥44px.
- **Performance**: limite vídeos a uma seção, comprima imagens (≤200 KB sempre que possível, formato WebP/AVIF), habilite lazy load e evite widgets que exijam scripts externos pesados.

## 4. Fluxo recomendado para criação de páginas
1. **Diagnosticar** – reunir briefing, dados e insights de UX (`docs/library/bellona-w01/` ou estudos equivalentes) e definir indicadores alvo.
2. **Planejar** – desenhar wireframes mobile-first, mapear componentes reutilizáveis e tokens necessários.
3. **Implementar no Elementor** – usar containers flexíveis, grid responsivo e widgets nativos WooCommerce. Documentar tokens, animações e integrações.
4. **Otimizar copy e SEO** – estruturar headings, meta descrição, links internos, dados estruturados (`schema.org/Offer`) e garantir coerência com campanhas.
5. **Validar** – executar QA funcional, acessibilidade (axe, Lighthouse) e performance (PageSpeed). Registrar evidências em `docs/reports/`.
6. **Entregar** – exportar `.json`, atualizar README do kit, informar dependências e checklist de QA no PR.

## 5. Automação e governança
- Versione todos os artefatos (templates, relatórios, imagens otimizadas) junto ao código.
- Utilize ferramentas em `tooling/` para normalizar tokens e gerar builds reproduzíveis.
- Documente integrações com CRM, analytics e automações (webhooks, e-mails) para facilitar manutenção.

## 6. Referências recomendadas
- Google UX Playbook for Retail (2023)
- WCAG 2.2 AA
- Documentação Hello Elementor & Elementor Flexbox Containers
- WooCommerce Storefront Guidelines (2024)
- Baymard Institute – Checkout UX (edição 2024)

> Sempre confronte estas diretrizes com feedbacks reais de clientes e métricas de desempenho. Atualize o documento ao identificar novas evidências ou mudanças no ecossistema WordPress/Elementor.
