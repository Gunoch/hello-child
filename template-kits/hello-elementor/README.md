# Kit: Hello Elementor – Ballona

Este kit foi configurado para funcionar em instalações que utilizam o tema base **Hello Elementor** aliado aos plugins **Elementor** (versão gratuita) e **WooCommerce**. Todos os widgets utilizados são nativos, garantindo compatibilidade sem dependências extras.

## Conteúdo do kit

| Arquivo | Tipo | Descrição |
| --- | --- | --- |
| `pages/ballona-home.json` | Página completa | Landing page inicial com destaque para a nova coleção, diferenciais da marca, vitrines de produtos e prova social. |
| `pages/ballona-trocas-devolucoes.json` | Página completa | Layout de políticas de trocas e devoluções com blocos reutilizáveis (banner, destaques, FAQ, CTA para suporte e bloco WooCommerce de produtos relacionados). |
| `pages/ballona-contato.json` | Página completa | Central de relacionamento com cards de canais, checklist de atendimento e área para formulário Elementor ou shortcode. |

## Passo a passo de importação

1. Faça login no WordPress com perfil de administrador.
2. Confirme que o tema **Hello Elementor** está ativo em **Aparência → Temas**.
3. Acesse **Templates → Template Kits** e clique em **Importar Template Kit**.
4. Carregue o arquivo desejado dentro da pasta `pages/`.
5. Após a importação, abra a página em que deseja utilizar o layout pelo Elementor e insira o template a partir da aba **Meus Templates**.

## Ajustes recomendados após a importação

- **Identidade visual**: atualize as configurações globais de cores e tipografia do site através do Elementor para replicar a identidade da marca.
- **WooCommerce**: nos widgets de produtos, selecione as categorias ou coleções que façam sentido para a página. Aproveite os widgets dinâmicos do Elementor Pro, se disponíveis, para exibir produtos em promoção, mais vendidos, etc.
- **Responsividade**: revise o layout nos modos tablet e mobile garantindo que espaçamentos e alinhamentos acompanhem as diretrizes do Hello Elementor.
- **Links e CTAs**: personalize botões de contato (WhatsApp, e-mail) e âncoras internas para evitar links quebrados.

## Referências úteis

- [Documentação oficial do Hello Elementor](https://elementor.com/help/hello-theme/)
- [Guia do Elementor sobre Template Kits](https://elementor.com/help/template-kits/)
- [Documentação do WooCommerce](https://woocommerce.com/documentation/)

## Checklist rápido de engenharia

1. Exporte o layout do Elementor garantindo que apenas widgets nativos sejam utilizados.
2. Nomeie o arquivo `.json` de forma descritiva (`ballona-<pagina>.json`).
3. Valide o arquivo importando em um ambiente de teste com Hello Elementor + WooCommerce.
4. Atualize a tabela de conteúdo acima e registre particularidades ou dependências neste `README`.

Mantenha este diretório atualizado com novos templates (páginas, pop-ups e seções) seguindo o mesmo padrão de organização.
