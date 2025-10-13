# Diretrizes de Design IA para E-commerce WordPress

## 1. Objetivo
Estabelecer políticas e passos técnicos para que assistentes de IA planejem, projetem e entreguem páginas de e-commerce modernas no WordPress (tema Hello Elementor + WooCommerce) com foco em estética, conversão e manutenção.

## 2. Pesquisa e Boas Práticas
- **Estratégia de marca**: respeitar identidade visual, selecionar paleta acessível (contraste AA), tipografias legíveis e criar hierarquia visual consistente.
- **Arquitetura de informação**: mapear personas, jornada de compra e priorizar conteúdos críticos (valor do produto, benefícios, prova social e CTA claro).
- **Conversão e confiança**: incluir prova social (avaliações, selos), propostas de valor acima da dobra, CTA persistente e políticas (troca, frete) acessíveis.
- **Responsividade e performance**: projetar primeiro para mobile, reutilizar componentes, limitar widgets pesados, otimizar imagens (WebP, lazy-load) e testar no PageSpeed.
- **Acessibilidade**: usar textos alternativos, semântica correta, foco visível, labels explícitas e evitar apenas cores para comunicar estado.
- **SEO e marketing**: estruturar headings, metadados, dados estruturados (schema.org/Offer), usar URLs amigáveis, breadcrumbs e integrar pixels/conversões.
- **Integração WooCommerce**: validar estoque, variações e meios de pagamento, configurar upsell/cross-sell nativos e manter páginas de checkout leves.
- **Automação e governança**: versionar templates `.json`, registrar dependências de plugins, documentar triggers de automação (e-mails, webhooks) e revisar periodicamente.

## 3. Política Atualizada de Criação de Páginas
1. **Diagnóstico guiado por IA**
   - Coletar briefing (segmento, público, diferenciais, produtos foco).
   - Analisar concorrentes e referências visuais para alinhar expectativas.
2. **Planejamento UX**
   - Produzir mapa do site e fluxos críticos (descoberta → compra → pós-venda).
   - Definir componentes reutilizáveis (headers, banners, vitrines, formulários).
3. **Design Sistemático**
   - Montar biblioteca de estilos (cores, tipografia, espaçamentos) e tokens no Elementor.
   - Criar wireframes responsivos (mobile first) e validar com heurísticas de Nielsen.
4. **Implementação no Elementor**
   - Utilizar containers, grid fluido, breakpoints (desktop, tablet, mobile) e clamp para tipografia.
   - Configurar widgets WooCommerce nativos para vitrines, carrosséis e checkout.
5. **Otimização de Conteúdo**
   - Inserir textos persuasivos (headline, bullet points, benefícios) e microcopy para CTAs.
   - Configurar SEO on-page (headings, meta descrições, links internos) e dados estruturados.
6. **Teste e Qualidade**
   - Validar acessibilidade com Lighthouse/axe, contrast checker e navegação por teclado.
   - Rodar testes de performance (PageSpeed, GTmetrix) e corrigir elementos pesados.
   - Revisar fluxo de compra (adicionar ao carrinho, cupom, checkout, confirmação).
7. **Documentação e Entrega**
   - Exportar templates `.json`, atualizar README, registrar dependências e versões.
   - Capturar evidências (prints em breakpoints) e checklist de QA.
   - Planejar monitoramento pós-lançamento (métricas de conversão, heatmaps).

## 4. Passos Técnicos para Execução Autônoma pela IA
1. `briefing.json`: gerar/atualizar arquivo com dados do cliente e KPIs.
2. `docs/ai-ecommerce-design-guidelines.md`: revisar diretrizes antes de iniciar.
3. Criar pasta no kit (`template-kits/hello-elementor/pages/`) com slug do projeto.
4. Definir tokens de estilo via painel Elementor (cores globais, tipografia) e documentar no README do kit.
5. Construir seções: hero, vitrines, categorias, depoimentos, blog, FAQ, CTAs finais.
6. Configurar widgets WooCommerce (lista de produtos, carrinho lateral, checkout) com filtros e ordenação apropriados.
7. Integrar formulários com automações (Elementor Forms → webhooks) conforme briefing.
8. Aplicar otimizações: lazy load, compressão de imagens, minificação CSS/JS via Elementor/servidor.
9. Executar checklist de QA (acessibilidade, performance, SEO) e salvar resultados em `docs/reports/<slug>-qa.md`.
10. Versionar arquivos (templates, README, relatórios) conforme fluxo Git deste repositório.

## 5. Referências
- Google UX Playbook for Retail
- WCAG 2.1 AA
- WordPress & WooCommerce Codex
- Elementor Design System Guidelines
- Baymard Institute – Checkout UX

> Esta documentação deve ser revisada a cada trimestre ou quando surgirem novas práticas recomendadas para e-commerce.
