# Guia de Implementação dos Templates w01 – Bellona

> Referência para manter os templates w01 alinhados às diretrizes atuais. Combine estas instruções com o fluxo oficial (`../../operations/fluxo-engenharia.md`) e registre qualquer divergência detectada durante QA.

## Estrutura do kit w01
- Conjunto de landing pages e homes orientadas a campanhas, assinatura VIP e lançamentos permanentes.
- Arquivos `.json` importáveis diretamente no Elementor (Hello Elementor + WooCommerce).
- Identificadores seguem o padrão `w01_<contexto>_<descricao>` para rastreabilidade.

## Preparação do ambiente
1. Atualize tokens globais conforme `identidade-visual-bellona.md` e diretrizes vigentes.
2. Verifique plugins essenciais: Elementor, WooCommerce e formulários nativos (Elementor Forms recomendado).
3. Configure integrações de comunicação (WhatsApp Business, CRM) e liste produtos destaque.

## Importação
1. Acesse **Templates → Template Kits** e importe o arquivo desejado.
2. Substitua assets provisórios por imagens oficiais otimizadas (mín. 2000px, ≤200 KB, formato WebP/AVIF quando possível).
3. Atualize conteúdos dinâmicos:
   - Links de coleções WooCommerce e âncoras internas.
   - Texto dos CTAs e URLs de atendimento.
   - Carrosséis de depoimentos (máx. 6 itens para preservar desempenho).

## Ajustes recomendados
- **Homes** – configurar redirecionamentos de CTAs para experiências concierge ou assinatura.
- **Landing de coleção** – habilitar lightbox em galerias e associar produtos à taxonomia correta.
- **Landing sazonal** – revisar contadores, estoques e mensagens promocionais conforme campanha ativa.

## Checklist pós-importação
- [ ] PageSpeed ≥85 (mobile) / ≥95 (desktop) após otimizações.
- [ ] Formulários testados com envio real ao CRM/automação.
- [ ] Revisão de manifesto, benefícios e microcopy com branding/conteúdo.
- [ ] Sitemap e Search Console atualizados quando páginas forem publicadas.

> Caso algum passo conflite com as diretrizes unificadas, priorize a orientação mais recente e atualize este guia registrando o motivo.
