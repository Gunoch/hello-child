# Hello Child & Template Kits

Este repositório centraliza a documentação e os artefatos necessários para desenvolver experiências com o tema **Hello Elementor**. A pasta `Assassesso/` reúne os materiais mais recentes (templates, diretrizes, automações), enquanto os arquivos do tema filho legado permanecem na raiz para compatibilidade com projetos existentes.

## Estrutura do projeto

- `Assassesso/`: hub com as últimas diretrizes, templates e ferramentas aprovadas para produção.
  - `docs/`: guias de apoio com instruções detalhadas de identidade, UX, tom de voz e fluxo de engenharia.
  - `templates/hello-elementor/pages/latest/`: páginas atualizadas seguindo o ciclo w01 e as políticas de design IA vigentes.
  - `templates/hello-elementor/pages/archive/`: versões anteriores preservadas para referência.
  - `templates/hello-elementor/sections/`: blocos modulares reutilizáveis (hero, vitrines, concierge, políticas, etc.).
  - `templates/hello-elementor/blueprints/`: estruturas declarativas para geração assistida por IA.
  - `templates/json-catalog/`: catálogo organizado de exportações `.json` pronto para distribuição.
  - `tooling/`: automações de suporte para regenerar e padronizar templates.
- `theme/`, `style.css`, `functions.php`: tema filho Hello Child (legado). Utilize apenas quando indispensável.
- `FLUXO-ENGENHARIA.md`: orientações completas sobre o processo de desenvolvimento, revisão e entrega.

## Template Kits

Os Template Kits são distribuídos em [`Assassesso/templates/`](Assassesso/templates/README.md) e incluem páginas completas e seções modulares construídas com widgets nativos do Elementor. Cada kit possui um `README.md` com instruções de importação, requisitos e boas práticas para personalização. Priorize os arquivos em `pages/latest/` para iniciar novas implantações e consulte o arquivo `Assassesso/docs/ai-ecommerce-design-guidelines.md` antes de gerar variações assistidas por IA.

> Recomenda-se sempre importar os templates em um ambiente de testes, validar responsividade e atualizar links/imagens conforme o projeto final.

## Tema filho legado

O tema filho *Hello Child* permanece disponível para iniciativas que ainda dependem de customizações em PHP ou CSS. Para novas implementações, priorize os Template Kits localizados em `Assassesso/templates/`. Ao editar o tema filho, siga os padrões documentados em `FLUXO-ENGENHARIA.md` e mantenha a compatibilidade com o WooCommerce.

## Guias e documentação

- Consulte [`Assassesso/docs/template-usage.md`](Assassesso/docs/template-usage.md) para um passo a passo de importação e configuração dos templates.
- Revise as [Diretrizes de Design IA para E-commerce WordPress](Assassesso/docs/ai-ecommerce-design-guidelines.md) antes de iniciar novos layouts gerados por assistentes automatizados.
- Utilize o fluxo descrito em [`FLUXO-ENGENHARIA.md`](FLUXO-ENGENHARIA.md) para planejar, implementar e validar qualquer alteração.

## Como contribuir

1. Crie uma branch dedicada para a alteração planejada.
2. Siga o fluxo de engenharia do projeto, garantindo commits descritivos e testes manuais dos templates importados.
3. Atualize a documentação pertinente (`README.md` dos kits, changelog e instruções de uso) sempre que um template ou funcionalidade for alterado.
4. Abra um Pull Request detalhando mudanças e evidências de validação.

## Licença

Este projeto segue a mesma licença do tema base Hello Elementor. Consulte os termos oficiais do tema e do Elementor antes de redistribuir os assets.
