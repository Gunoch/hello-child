# Hello Elementor Template Kits

Este diretório centraliza os arquivos de Template Kit preparados para o tema **Hello Elementor** com compatibilidade total para uso junto ao **Elementor** e ao **WooCommerce**.

## Estrutura

```
template-kits/
└── hello-elementor/
    ├── README.md          # Guia específico de configuração do kit para o tema Hello Elementor
    └── pages/
        ├── ballona-home.json
        ├── ballona-sobre.json
        ├── ballona-colecao-aurora.json
        ├── ballona-lookbook.json
        ├── ballona-guia-cuidados.json
        ├── ballona-trocas-devolucoes.json
        ├── ballona-contato.json
        └── ballona-politicas-troca-devolucao.json
```

- **hello-elementor/**: coleção de templates pensada para o tema base Hello Elementor, já com espaçamentos, tipografia e containers configurados conforme a documentação oficial do tema.
- **pages/**: templates completos de páginas criados com widgets nativos do Elementor, prontos para importar via biblioteca do plugin. A coleção Ballona inclui landing page, institucional, lookbook, guia de cuidados, apresentação de coleção e páginas de atendimento.
- **templates/**: sessões ou páginas modulares prontas para serem inseridas em páginas existentes, facilitando a montagem de fluxos específicos (ex.: políticas, banners, CTAs).

## Como importar

1. Certifique-se de que o tema **Hello Elementor** e os plugins **Elementor** e **WooCommerce** estão instalados e ativos.
2. No painel WordPress, acesse **Modelos → Template Kits** (ou **Templates → Kits**, dependendo da tradução).
3. Clique em **Importar Template Kit** e selecione o arquivo `.json` desejado dentro da pasta `pages/`.
4. Após a importação, abra a página que deseja editar com o Elementor e insira o template importado a partir da aba **Meus Templates**.
5. Ajuste links, imagens e dados dinâmicos (por exemplo, contatos e CTAs de produtos) para refletirem o conteúdo final do projeto.

## Compatibilidade com WooCommerce

Os blocos que fazem referência a produtos ou categorias utilizam widgets padrão do Elementor, garantindo compatibilidade com o WooCommerce sem exigir código adicional. Para aprimorar a integração:

- Configure as páginas da loja diretamente pelo WooCommerce (Loja, Carrinho, Checkout e Minha Conta).
- Utilize os widgets WooCommerce do Elementor para exibir produtos e coleções no layout importado.
- Caso utilize Elementor Pro, explore os widgets dinâmicos para substituir textos estáticos por dados reais da loja.

## Boas práticas

- Sempre importe os templates em um ambiente de testes antes de aplicar em produção.
- Mantenha os arquivos `.json` organizados por tipo (páginas, pop-ups, seções) criando subpastas adicionais conforme o kit evoluir.
- Documente quaisquer dependências externas (addons, plugins complementares) diretamente no `README` do kit.
- Utilize a versão mais recente do tema Hello Elementor para garantir que espaçamentos e tokens de design sejam aplicados corretamente.

Para instruções detalhadas sobre cada kit, consulte o `README.md` específico dentro da pasta `hello-elementor/`.
