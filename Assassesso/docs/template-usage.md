# Guia de uso dos Template Kits – Hello Elementor

## Visão geral

Este repositório agora concentra **Template Kits** compatíveis com o tema base **Hello Elementor**. Os arquivos foram organizados para facilitar a importação no Elementor, garantindo alinhamento com as diretrizes do tema e com integrações do WooCommerce, sem depender de um tema filho personalizado.

## Estrutura principal

- `Assassesso/templates/README.md`: visão geral dos kits disponíveis e instruções rápidas de importação.
- `Assassesso/templates/hello-elementor/`: coleção de kits preparada especificamente para o tema Hello Elementor.
  - `README.md`: instruções detalhadas de configuração e ajustes pós-importação, incluindo referência à identidade w01.
  - `pages/latest/`: arquivos `.json` referentes às páginas atualizadas (ciclo w01 e variações v2) construídas no Elementor.
  - `pages/archive/`: histórico das versões anteriores preservadas para consulta.
  - `sections/`: blocos modulares reutilizáveis.
- `Assassesso/docs/`: documentação de apoio (incluindo este guia, o fluxo de engenharia e as novas diretrizes de design orientadas por IA).
- `Assassesso/docs/bellona-w01/`: estudos de identidade, UX, conteúdo e checklist operacional que orientam a aplicação das páginas w01.
- `theme/`, `functions.php`, `style.css`: permanecem disponíveis para projetos legados que ainda utilizam o tema filho, mas não são mais o foco principal.

## Pré-requisitos

1. Tema **Hello Elementor** ativo.
2. Plugin **Elementor** instalado (recomenda-se a versão mais recente).
3. Para layouts que listam produtos, ter **WooCommerce** instalado e configurado.
4. Opcional: **Elementor Pro**, caso deseje utilizar widgets dinâmicos adicionais (não obrigatório para os templates atuais).
5. Briefing atualizado em `briefing.json` e revisão prévia das diretrizes em [`docs/ai-ecommerce-design-guidelines.md`](./ai-ecommerce-design-guidelines.md) quando o projeto for conduzido por assistentes de IA.

## Importando um Template Kit

1. No painel WordPress, acesse **Templates → Template Kits**.
2. Clique em **Importar Template Kit**.
3. Selecione o arquivo `.json` correspondente dentro da pasta `Assassesso/templates/hello-elementor/pages/latest/`.
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
- Utilize a checklist de QA descrita nas diretrizes de IA para registrar resultados em `docs/reports/<slug>-qa.md`.

Seguir estas orientações garante que os Template Kits continuem compatíveis com o ecossistema Hello Elementor e WooCommerce, reduzindo conflitos e facilitando a evolução do projeto.
