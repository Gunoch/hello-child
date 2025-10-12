# Guia de uso dos templates do tema Hello Child

## Visão geral
Este repositório contém um tema filho do **Hello Elementor** focado em entregar uma página institucional de políticas e pequenas personalizações de WooCommerce. A estrutura foi reorganizada para separar claramente os arquivos do tema, templates PHP, kits do Elementor e documentação de apoio.

## Estrutura principal
- `functions.php`: define as constantes globais do tema filho e carrega os arquivos de inicialização localizados em `theme/inc`.
- `theme/inc/setup.php`: concentra os *hooks* de suporte do tema, carregamento de assets, registro de templates e integração com WooCommerce.
- `theme/templates/page-policy.php`: implementação do template de página em largura total para políticas.
- `theme/templates/woocommerce.php`: *wrapper* padrão para páginas do WooCommerce, mantendo cabeçalho e rodapé do tema.
- `theme/templates/woocommerce/single-product/title.php`: sobrescreve apenas o título do produto na página individual.
- `theme/assets/css/main.css` e `theme/assets/js/main.js`: arquivos preparados para estilos e scripts adicionais do tema filho.
- `template-kits/`: arquivos exportados do Elementor para importação como Template Kits.
- `docs/`: documentação (incluindo este guia e fluxos de engenharia).

## Como usar os templates
### 1. Ativar o tema filho
1. Coloque a pasta `hello-child` dentro de `wp-content/themes/` no seu WordPress.
2. No painel, acesse **Aparência → Temas** e ative o **Hello Child** (certifique-se de que o tema pai *Hello Elementor* está instalado).

### 2. Página de políticas
1. Crie ou edite uma página no WordPress.
2. No painel lateral direito (editor de blocos), localize a caixa **Atributos da página**.
3. Em **Modelo**, selecione **Políticas – Full Width** (registrado pelo filtro `theme_page_templates`).
4. Publique/atualize a página. O conteúdo digitado no editor será exibido na área central do template, enquanto as seções extras (banner, galeria e CTA) já estão prontas.
5. Ajuste as imagens da galeria substituindo os caminhos em `/wp-content/uploads/2025/10/...` se necessário.

### 3. Personalizações de WooCommerce
- O filtro `woocommerce_locate_template` garante que o WooCommerce utilize automaticamente os arquivos presentes em `theme/templates/woocommerce/`.
- `theme/templates/woocommerce.php` mantém o cabeçalho e o rodapé do tema em todas as páginas da loja.
- `theme/templates/woocommerce/single-product/title.php` altera apenas a marcação do título do produto. Para estilizar, utilize o seletor `.custom-title` no seu CSS.

## Ajustes rápidos
- Adicione estilos globais em `style.css` (mantenha o cabeçalho do tema) ou estilos específicos em `theme/assets/css/main.css`.
- Scripts adicionais podem ser colocados em `theme/assets/js/main.js`; eles são carregados no rodapé e dependem do `jquery` incluído pelo WordPress.
- Caso precise desativar o aviso de frete ou CTA na página de políticas, edite ou comente os blocos correspondentes em `theme/templates/page-policy.php`.

## Boas práticas
- Sempre teste alterações em um ambiente de homologação antes de publicar.
- Após editar templates PHP, execute `php -l caminho/do/arquivo.php` para validar a sintaxe.
- Mantenha os ajustes de CSS/JS dentro da pasta `theme/` para garantir que o tema pai possa ser atualizado sem conflitos.
