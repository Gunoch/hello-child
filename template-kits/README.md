# Hello Elementor Template Kits

Este diretório reúne os Template Kits homologados para uso com o tema **Hello Elementor**, alinhados às diretrizes de engenharia 2024 e totalmente compatíveis com Elementor + WooCommerce.

## Estrutura

```
template-kits/
└── hello-elementor/
    ├── README.md
    ├── blueprints/
    ├── pages/
    │   ├── latest/      # Versões atuais aprovadas
    │   └── archive/     # Histórico para referência
    └── sections/        # Blocos modulares reutilizáveis
```

- **hello-elementor/**: coleção oficial com tokens de design padronizados, containers flexíveis e compatibilidade com WordPress 6.5+.
- **blueprints/**: estruturas declarativas para geração assistida por IA; utilize-as como base para novas páginas antes da exportação.
- **pages/latest/**: arquivos `.json` prontos para importação imediata.
- **pages/archive/**: versões antigas preservadas com propósito de auditoria.
- **sections/**: componentes isolados que podem ser combinados em páginas existentes.

## Fluxo de trabalho recomendado

1. Consulte `hello-elementor/README.md` para entender quais templates já existem e quais tokens devem ser mantidos.
2. Ao criar novas páginas ou seções, siga o fluxo `Descobrir → Definir → Construir → Validar → Entregar` descrito em `../docs/operations/fluxo-engenharia.md`.
3. Exporte os arquivos `.json` diretamente para a subpasta correspondente, mantendo a convenção `marca-pagina-versao.json`.
4. Atualize o README do kit com notas de uso, dependências e mudanças relevantes.
5. Sempre mova versões substituídas para `pages/archive/` com a data e o motivo da atualização.

## Boas práticas

- Importe templates em ambiente de staging antes da publicação.
- Utilize apenas widgets nativos ou recursos oficiais do Elementor/Elementor Pro.
- Documente integrações adicionais (CRM, scripts) no README e no PR.
- Garanta que todos os templates passem pelo checklist de acessibilidade e performance definido nas diretrizes de design IA.

Para detalhes específicos de cada kit, consulte `hello-elementor/README.md`.
