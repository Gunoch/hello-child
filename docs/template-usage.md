# Guia de uso dos templates do tema Hello Child

## Visão geral
Este repositório contém um tema filho do **Hello Elementor** focado em entregar uma página institucional de políticas e pequenas personalizações de WooCommerce. Durante a revisão atual foi verificado que todos os templates PHP passam na checagem básica de sintaxe com `php -l` e não apresentam erros estruturais.

## Estrutura principal
- `functions.php`: registra os suportes do tema e carrega os arquivos CSS e JS (tema pai, tema filho e `assets`).
- `page-policy.php`: template de página em largura total para políticas.
- `woocommerce.php`: wrapper padrão para páginas do WooCommerce, mantendo o cabeçalho/rodapé do tema.
- `woocommerce/single-product/title.php`: sobrescreve apenas o título do produto na página individual.
- `assets/css/main.css` e `assets/js/main.js`: arquivos preparados para estilos e scripts adicionais do tema filho.

## Como usar os templates
### 1. Ativar o tema filho
1. Coloque a pasta `hello-child` dentro de `wp-content/themes/` no seu WordPress.
2. No painel, acesse **Aparência → Temas** e ative o **Hello Child** (certifique-se de que o tema pai *Hello Elementor* está instalado).

### 2. Página de políticas (`page-policy.php`)
1. Crie ou edite uma página no WordPress.
2. No painel lateral direito (editor de blocos), localize a caixa **Atributos da página**.
3. Em **Modelo**, selecione **Políticas – Full Width**.
4. Publique/atualize a página. O conteúdo digitado no editor será exibido na área central do template, enquanto as seções extras (banner, galeria e CTA) já estão prontas.
5. Ajuste as imagens da galeria substituindo os caminhos em `/wp-content/uploads/2025/10/...` se necessário.

### 3. Personalizações de WooCommerce
- `woocommerce.php` garante que todas as páginas da loja utilizem o cabeçalho e o rodapé padrão do tema. Não é necessário selecionar manualmente; o WooCommerce usa este arquivo automaticamente quando presente.
- `woocommerce/single-product/title.php` altera apenas a marcação do título do produto. Para estilizar, utilize o seletor `.custom-title` no seu CSS.

## Ajustes rápidos
- Adicione estilos globais em `style.css` (lembre-se de manter o cabeçalho do tema) ou estilos específicos em `assets/css/main.css`.
- Scripts adicionais podem ser colocados em `assets/js/main.js`; eles são carregados no rodapé e dependem do `jquery` incluído pelo WordPress.
- Caso precise desativar o aviso de frete ou CTA na página de políticas, edite ou comente os blocos correspondentes em `page-policy.php`.

## Boas práticas
- Sempre teste alterações em um ambiente de homologação antes de publicar.
- Após editar templates PHP, execute `php -l caminho/do/arquivo.php` para validar a sintaxe.
- Use `child-theme` para CSS/JS personalizados, mantendo o tema pai atualizado sem conflitos.

