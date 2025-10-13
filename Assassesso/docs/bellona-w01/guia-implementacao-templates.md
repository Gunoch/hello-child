# Guia de Implementação dos Templates w01 – Bellona

## Estrutura do Kit w01
- 10 variações de landing/home pages focadas em campanhas, assinatura VIP e lançamentos permanentes.
- Cada arquivo `.json` foi configurado para importar diretamente no Elementor (Hello Elementor + WooCommerce).
- IDs dos elementos seguem padrão `w01_<contexto>_<descricao>` para facilitar rastreabilidade.

## Preparação do Ambiente
1. Atualizar tokens globais de cor e tipografia conforme `identidade-visual-bellona.md`.
2. Instalar plugins necessários: Elementor, WooCommerce, plugin de formulários (Elementor Forms nativo recomendado).
3. Configurar integrações: WhatsApp Business API ou link direto e lista de produtos destaque.

## Passos de Importação
1. Vá em **Templates → Import Templates** e selecione o arquivo desejado.
2. Após importação, edite a página e substitua imagens placeholder por assets oficiais (mínimo 2000px largura, 72dpi, fundo neutro).
3. Atualize campos dinâmicos:
   - Links para coleções no WooCommerce.
   - Texto dos CTAs e URLs de WhatsApp/LP de assinatura.
   - Carrosséis de depoimento (manter máximo 6 itens para performance).

## Ajustes Recomendados por Tipo de Página
- **Home assinatura**: criar redirecionamento no WooCommerce para o programa Guardiãs Bellona.
- **Landing de coleção**: habilitar Lightbox para galerias e taggear produtos com categoria da coleção.
- **Landing sazonal**: atualizar contagem regressiva via widget nativo e conferir timezone.

## Checklist Pós-publicação
- [ ] Conferir desempenho no PageSpeed (meta 85+ mobile, 95+ desktop).
- [ ] Validar formulário enviando teste real para CRM.
- [ ] Revisar seções de manifesto e benefícios com equipe de branding.
- [ ] Atualizar sitemap e disparar request de indexação no Search Console.

Este guia deve ser utilizado junto aos demais estudos para garantir consistência na entrega de cada variação w01.
