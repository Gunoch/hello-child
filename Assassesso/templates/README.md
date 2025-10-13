# Hello Elementor Template Kits

Este diretório centraliza os arquivos de Template Kit preparados para o tema **Hello Elementor** com compatibilidade total para uso junto ao **Elementor** e ao **WooCommerce**.

## Estrutura

```
Assassesso/templates/
└── hello-elementor/
    ├── README.md
    ├── blueprints/
    │   └── bellona-ai/
    ├── pages/
    │   ├── latest/      # Versões atualizadas, alinhadas ao ciclo w01 e diretrizes atuais
    │   └── archive/     # Versões anteriores preservadas para referência
    └── sections/        # Seções modulares (hero, vitrines, concierge, políticas, etc.)
```

- **hello-elementor/**: coleção de templates pensada para o tema base Hello Elementor, já com espaçamentos, tipografia e containers configurados conforme a documentação oficial do tema.
- **blueprints/**: camada de engenharia IA com estruturas em JSON que antecipam componentes, conteúdos e requisitos de QA antes da exportação pelo Elementor.
- **pages/latest/**: templates completos prontos para importação imediata. Utilize estes arquivos para implantações atuais.
- **pages/archive/**: histórico das versões anteriores mantido para consulta ou rollback.
- **sections/**: blocos modulares prontos para compor páginas existentes sem necessidade de reconstrução completa.

## Como importar

1. Certifique-se de que o tema **Hello Elementor** e os plugins **Elementor** e **WooCommerce** estão instalados e ativos.
2. No painel WordPress, acesse **Modelos → Template Kits** (ou **Templates → Kits**, dependendo da tradução).
3. Clique em **Importar Template Kit** e selecione o arquivo `.json` desejado dentro da pasta `pages/latest/`.
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
