# Fluxo de Engenharia de Software – Tema Hello Child

Este documento descreve o fluxo recomendado para planejar, implementar, revisar e entregar alterações no tema *Hello Child*. O foco é adaptar boas práticas de engenharia de software à estrutura específica deste repositório WordPress.

## 1. Preparação e Planejamento

1. **Entendimento da demanda**
   - Confirme o objetivo da alteração (visual, funcional, integração com WooCommerce etc.).
   - Levante os arquivos impactados utilizando a árvore do projeto descrita na seção 2.
2. **Análise de impacto**
   - Identifique dependências entre hooks, templates PHP, CSS e JS.
   - Verifique se a alteração afeta páginas especiais (p. ex. `theme/templates/page-policy.php`) ou templates do WooCommerce.
3. **Definição de estratégia**
   - Crie uma branch dedicada para a alteração.
   - Planeje testes manuais (navegação, acessibilidade, fluxo de compra) e automatizados disponíveis.

## 2. Estrutura do Projeto e Responsabilidades dos Arquivos

| Caminho | Função principal | Considerações de engenharia |
| --- | --- | --- |
| `style.css` | Metadados do tema filho (nome, template, versão). | Necessário para que o WordPress reconheça o tema. Atualize a versão quando houver entregas relevantes. |
| `functions.php` | Bootstrap do tema: define constantes globais e carrega os arquivos de inicialização em `theme/inc`. | Utilize para registrar novos *includes* e manter o carregamento organizado. |
| `theme/inc/setup.php` | Hooks e configurações centrais (suportes, assets, templates e WooCommerce). | Centralize novos hooks aqui ou em arquivos adicionais dentro de `theme/inc`. |
| `theme/assets/css/main.css` | Folha de estilo principal do child theme. | Organize estilos por componentes/seções; mantenha comentários de cabeçalho para rastreabilidade. |
| `theme/assets/js/main.js` | Personalizações JavaScript. | Estruture scripts em IIFE ou módulos quando necessário, garanta compatibilidade com jQuery (já declarado como dependência). |
| `theme/templates/page-policy.php` | Template de página “Políticas – Full Width”. | Preserve a estrutura semântica (`role`, `aria-label`) e utilize `the_content()` para conteúdo dinâmico. |
| `theme/templates/woocommerce.php` | Template global do WooCommerce. | Usa o wrapper padrão com `woocommerce_content()`. Revise após atualizações do WooCommerce. |
| `theme/templates/woocommerce/single-product/title.php` | Sobrescrita do título do produto. | Mantenha compatibilidade com versões do WooCommerce; atualize comentários de versão ao sincronizar com o core. |
| `template-kits/` | Exportações do Elementor. | Armazene arquivos `.json` ou `.zip` para importação de kits, mantendo a nomenclatura consistente. |

## 3. Fluxo de Implementação por Tipo de Alteração

### 3.1 Novos estilos ou ajustes visuais
1. Atualize `theme/assets/css/main.css`, organizando regras por componente.
2. Se o estilo for compartilhado entre templates, considere variáveis ou mixins (via CSS custom properties) para facilitar manutenção.
3. Caso seja necessário expor classes no HTML, ajuste o template correspondente (`theme/templates/page-policy.php`, `theme/templates/woocommerce.php` ou arquivos em `theme/templates/woocommerce/`).
4. Valide no navegador (modo responsivo e contraste) e execute *lint* se disponível.

### 3.2 Scripts e interações
1. Adicione lógicas em `theme/assets/js/main.js` usando *namespaces* ou funções autoexecutáveis para evitar conflitos globais.
2. Para dependências externas, registre-as no `theme/inc/setup.php` via `wp_enqueue_script`.
3. Teste em navegadores suportados, garantindo que o script só execute após o carregamento do DOM (`jQuery(function($){ ... });`).

### 3.3 Hooks e funcionalidades PHP
1. Centralize novos suportes, filtros ou *shortcodes* em arquivos dentro de `theme/inc`.
2. Documente cada bloco com comentários explicativos.
3. Ao modificar templates (`theme/templates/page-policy.php`, `theme/templates/woocommerce.php` ou arquivos em `theme/templates/woocommerce/`), mantenha compatibilidade com `get_header()`/`get_footer()` e com funções do WooCommerce.
4. Utilize ambientes de staging para validar integrações com plugins.

### 3.4 Templates WooCommerce
1. Verifique se a versão do template está alinhada à documentação oficial.
2. Registre alterações significativas em comentários para facilitar diffs futuros quando WooCommerce for atualizado.
3. Teste fluxos de compra relevantes (detalhes do produto, carrinho, checkout).

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

1. Atualize `style.css` com nova versão do tema se a entrega impactar usuários finais.
2. Gere changelog ou descreva no PR as alterações principais e testes executados.
3. Solicite revisão, ajuste conforme feedback e efetue *merge* após aprovação.
4. Monitore o ambiente de produção após deploy para validar métricas e feedbacks.

---

Seguir este fluxo ajuda a manter consistência, rastreabilidade e qualidade nas evoluções do tema Hello Child.
