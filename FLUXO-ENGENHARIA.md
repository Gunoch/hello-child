# Fluxo de Engenharia de Software – Template Kits Hello Elementor

Este documento descreve o fluxo recomendado para planejar, implementar, revisar e entregar alterações nos **Template Kits compatíveis com o tema Hello Elementor** hospedados neste repositório. Mantemos também a documentação do tema filho legado (*Hello Child*) para projetos existentes, mas o foco principal agora é a criação e evolução de kits prontos para importação no Elementor.

> ℹ️ **Compatibilidade**: todas as entregas devem considerar o tema base Hello Elementor, o plugin Elementor (gratuito) e integrações com WooCommerce. O tema filho permanece disponível apenas para casos legados; novas implementações devem priorizar os Template Kits.

## 1. Preparação e Planejamento

1. **Entendimento da demanda**
   - Confirme o objetivo da alteração (novo template, ajuste visual, integração com WooCommerce etc.) e registre o briefing em `briefing.json` conforme diretrizes de IA descritas em `docs/ai-ecommerce-design-guidelines.md`.
   - Levante os arquivos impactados utilizando a árvore do projeto descrita na seção 2 (kits, documentação, arquivos legados do tema filho) e identifique se serão criados relatórios em `docs/reports/`.
2. **Análise de impacto**
   - Identifique dependências entre hooks, templates PHP, CSS e JS.
   - Verifique se a alteração afeta páginas especiais (p. ex. `theme/templates/page-policy.php`) ou templates do WooCommerce.
3. **Definição de estratégia**
   - Crie uma branch dedicada para a alteração.
   - Planeje testes manuais (navegação, acessibilidade, fluxo de compra) e automatizados disponíveis.

## 2. Estrutura do Projeto e Responsabilidades dos Arquivos

| Caminho | Função principal | Considerações de engenharia |
| --- | --- | --- |
| `Assassesso/templates/README.md` | Visão geral dos kits disponíveis. | Atualize sempre que novos kits, páginas ou seções forem adicionados. |
| `Assassesso/templates/hello-elementor/` | Kit oficial para o tema Hello Elementor. | Estruture subpastas (`pages/latest/`, `pages/archive/`, `sections/`) e documente dependências no `README.md` local. |
| `Assassesso/templates/hello-elementor/pages/latest/*.json` | Templates completos exportados do Elementor. | Valide a compatibilidade com Elementor e WooCommerce antes de versionar. |
| `docs/` | Documentação de apoio. | Inclui guias de uso, fluxo de engenharia e referências. |
| `style.css`, `functions.php`, `theme/` | Tema filho legado. | Manter somente para compatibilidade; evite novos desenvolvimentos aqui salvo demandas específicas. |

## 3. Fluxo de Implementação por Tipo de Alteração

### 3.1 Novos templates ou ajustes visuais
1. Consulte `docs/ai-ecommerce-design-guidelines.md` para definir componentes reutilizáveis, tokens de estilo e checklist de QA antes de abrir o Elementor.
2. Gere os layouts no Elementor garantindo que os containers usem as configurações padrão do Hello Elementor, abordagem *mobile first* e tipografia com `clamp()`.
3. Exporte o template (`.json`) e salve na subpasta correspondente (por exemplo, `pages/` ou `sections/`), mantendo nome alinhado ao slug definido no briefing.
4. Atualize o `README.md` do kit com instruções de uso, dependências, tokens globais configurados e recomendações de responsividade.
5. Valide no navegador (modo responsivo, contraste e navegação por teclado) após importar o template em um ambiente de teste e anote resultados no relatório de QA do projeto.

### 3.2 Scripts e interações
1. Utilize apenas widgets nativos do Elementor sempre que possível para evitar dependências externas.
2. Caso scripts adicionais sejam necessários, documente-os claramente no `README.md` do kit e forneça instruções de inclusão via Elementor ou snippets.
3. Teste as interações após a importação para garantir compatibilidade com o frontend do Hello Elementor.

### 3.3 Hooks e funcionalidades PHP (legado)
1. Apenas quando uma demanda exigir manutenção do tema filho, centralize novos suportes, filtros ou *shortcodes* em arquivos dentro de `theme/inc`.
2. Documente cada bloco com comentários explicativos e sinalize no changelog que se trata de funcionalidade legada.
3. Ao modificar templates (`theme/templates/page-policy.php`, `theme/templates/woocommerce.php` ou arquivos em `theme/templates/woocommerce/`), mantenha compatibilidade com `get_header()`/`get_footer()` e com funções do WooCommerce.
4. Utilize ambientes de staging para validar integrações com plugins.

### 3.4 Templates WooCommerce
1. Priorize widgets WooCommerce do Elementor para montar listas de produtos e vitrines nos Template Kits.
2. Quando utilizar templates PHP legados, verifique se a versão está alinhada à documentação oficial do WooCommerce.
3. Teste fluxos de compra relevantes (detalhes do produto, carrinho, checkout) após importar o template para garantir que CTAs e links estejam corretos.

## 4. Revisão e Qualidade

1. **Revisão de código**
   - Garanta que cada *commit* descreva claramente a mudança.
   - Valide padrões de codificação PHP (PSR-12) e CSS (nomenclatura consistente).
2. **Testes**
   - Execute testes manuais definidos na etapa de planejamento.
   - Sempre que possível, capture evidências (prints ou notas) para anexar ao PR.
3. **Acessibilidade e desempenho**
   - Verifique que novos elementos mantenham atributos `aria` e semântica adequada.
   - Otimize imagens referenciadas em templates e evite carregar scripts desnecessários.

## 5. Entrega

1. Atualize os `README.md` dos kits e incremente versões dos arquivos `.json` quando houver mudanças relevantes.
2. Gere changelog ou descreva no PR as alterações principais e testes executados (importação/verificação em ambiente de teste).
3. Solicite revisão, ajuste conforme feedback e efetue *merge* após aprovação.
4. Para projetos que ainda utilizem o tema filho, atualize `style.css` e demais arquivos apenas quando necessário, sinalizando a natureza legada da mudança.

---

Seguir este fluxo ajuda a manter consistência, rastreabilidade e qualidade na evolução dos Template Kits compatíveis com o Hello Elementor, preservando a retrocompatibilidade com o tema filho quando necessário.
