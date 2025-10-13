# Tema Legado Hello Child

O diretório `legacy-theme/hello-child/` mantém o tema filho utilizado em projetos que ainda dependem de customizações específicas em PHP ou CSS. Novas implementações devem priorizar os Template Kits, mas utilize este tema quando for necessário manter integrações existentes ou entregar hotfixes rápidos.

## Estrutura

- `hello-child/functions.php`: ganchos e ajustes PHP. Siga PSR-12 e documente blocos de código legados.
- `hello-child/style.css`: overrides de estilo seguindo BEM/ITCSS e tokens oficiais.
- `hello-child/theme/`: arquivos herdados do tema base. Evite modificações extensas; prefira resolver via Template Kits.

## Boas práticas

1. Sempre registre no PR que a alteração envolve o tema legado e descreva o motivo.
2. Mantenha compatibilidade com WordPress 6.5+ e WooCommerce.
3. Atualize `docs/library/reports/` ou o README do kit associado quando o hotfix impactar fluxos existentes.
4. Utilize `docs/operations/fluxo-engenharia.md` para validar testes e governança antes do merge.
