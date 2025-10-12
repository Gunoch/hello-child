# Guia de uso dos Template Kits – Hello Elementor

## Visão geral

Este repositório agora concentra **Template Kits** compatíveis com o tema base **Hello Elementor**. Os arquivos foram organizados para facilitar a importação no Elementor, garantindo alinhamento com as diretrizes do tema e com integrações do WooCommerce, sem depender de um tema filho personalizado.

## Estrutura principal

- `template-kits/README.md`: visão geral dos kits disponíveis e instruções rápidas de importação.
- `template-kits/hello-elementor/`: coleção de kits preparada especificamente para o tema Hello Elementor.
  - `README.md`: instruções detalhadas de configuração e ajustes pós-importação.
  - `pages/`: arquivos `.json` referentes a páginas completas construídas no Elementor.
    - `ballona-home.json`: landing page inicial com hero, destaques de produtos e depoimentos.
    - `ballona-trocas-devolucoes.json`: página de políticas com FAQs e orientação para suporte.
    - `ballona-contato.json`: central de atendimento com cards de canais e checklist de formulário.
    - `ballona-politicas-troca-devolucao.json`: página institucional completa com políticas detalhadas, galeria de imagens e CTA final.
- `docs/`: documentação de apoio (incluindo este guia e o fluxo de engenharia).
- `theme/`, `functions.php`, `style.css`: permanecem disponíveis para projetos legados que ainda utilizam o tema filho, mas não são mais o foco principal.

## Pré-requisitos

1. Tema **Hello Elementor** ativo.
2. Plugin **Elementor** instalado (recomenda-se a versão mais recente).
3. Para layouts que listam produtos, ter **WooCommerce** instalado e configurado.
4. Opcional: **Elementor Pro**, caso deseje utilizar widgets dinâmicos adicionais (não obrigatório para os templates atuais).

## Importando um Template Kit

1. No painel WordPress, acesse **Templates → Template Kits**.
2. Clique em **Importar Template Kit**.
3. Selecione o arquivo `.json` correspondente dentro da pasta `template-kits/hello-elementor/pages/`.
4. Após a importação, edite a página desejada com o Elementor e insira o template importado pela aba **Meus Templates**.
5. Ajuste conteúdos dinâmicos, como widgets WooCommerce, textos de FAQ e links de CTA.

## Recomendações de compatibilidade

- **Hello Elementor**: utilize as configurações globais do Elementor (Site Settings) para manter tipografia e espaçamentos consistentes com o tema.
- **WooCommerce**: associe os widgets de produtos às categorias corretas e personalize mensagens de estoque ou frete conforme a política da loja.
- **Responsividade**: revise o layout nos modos Tablet e Mobile, ajustando margens e espaçamentos para evitar sobreposições.
- **Acessibilidade**: mantenha textos alternativos em imagens e utilize títulos hierárquicos (`H2`, `H3`) conforme importado nos templates.

## Boas práticas de manutenção

- Versione novos templates utilizando nomes descritivos e organizando-os em subpastas (por exemplo, `sections/`, `popups/`).
- Documente dependências adicionais diretamente nos arquivos `README.md` de cada kit.
- Ao atualizar um template, incremente o número de versão no cabeçalho do arquivo `.json` (caso aplicável) e registre as mudanças no changelog do projeto.
- Teste a importação em um ambiente de staging antes de aplicar no site oficial.

Seguir estas orientações garante que os Template Kits continuem compatíveis com o ecossistema Hello Elementor e WooCommerce, reduzindo conflitos e facilitando a evolução do projeto.
