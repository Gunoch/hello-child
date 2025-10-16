# Tooling

Scripts e utilitários que apoiam o fluxo de trabalho assistido por IA.

## Ferramentas disponíveis

- `python -m tooling.template_app`: aplica o novo CLI para listar e gerar templates em JSON para o Elementor a partir dos blueprints documentados em `template-kits/hello-elementor/`.
- `tooling/regenerate_templates.py`: ponto de entrada de compatibilidade que aciona o comando `generate` padrão do CLI (gera todos os templates com um único comando).

## Como usar

1. Ative o ambiente virtual desejado (quando aplicável) e garanta que a versão do Python atende aos requisitos do projeto.
2. Liste os templates disponíveis:
   ```bash
   python -m tooling.template_app list
   ```
3. Gere todos os templates com a estrutura padrão do repositório:
   ```bash
   python -m tooling.template_app generate
   ```
4. Para salvar em outro diretório, utilize `--output-dir`:
   ```bash
   python -m tooling.template_app generate bellona-home-v2 --output-dir /tmp/elementor
   ```
5. Versione as saídas apenas após concluir o checklist de QA descrito em `docs/operations/fluxo-engenharia.md`.

> Sugira melhorias de automação adicionando novos comandos ao CLI e atualizando este README com instruções claras.
