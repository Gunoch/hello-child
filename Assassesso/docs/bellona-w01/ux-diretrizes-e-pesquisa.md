# Pesquisa e Diretrizes de UX – Bellona w01 (Referência Histórica)

> Este documento preserva os insights de pesquisa da fase w01 da marca Bellona. Utilize-o como complemento às diretrizes unificadas de 2024 descritas em `../ai-ecommerce-design-guidelines.md` e ao fluxo `Descobrir → Definir → Construir → Validar → Entregar` presente em `../../../FLUXO-ENGENHARIA.md`. Ao aplicar estas referências, valide se continuam coerentes com os dados atuais do projeto.

## Como usar no fluxo atual
- **Descobrir**: confirme se os objetivos e personas aqui descritos permanecem válidos com os dados mais recentes (analytics, entrevistas, vendas).
- **Definir**: adapte as seções obrigatórias para refletir campanhas ativas e metas atualizadas.
- **Construir**: combine estes padrões com tokens globais vigentes e guidelines de acessibilidade 2024.
- **Validar**: registre aprendizados no relatório de QA e sinalize quando ajustes estratégicos forem necessários.

## Objetivos da experiência
- Converter visitantes em compradores recorrentes destacando exclusividade e confiabilidade.
- Construir confiança rápida em um e-commerce sem loja física por meio de prova social, certificações e transparência operacional.
- Facilitar a descoberta de coleções com navegação intuitiva, filtros acessíveis e CTAs para atendimento concierge.

## Metodologia de pesquisa (w01)
1. **Análise comparativa** – benchmark com e-commerces premium de joias focando hero, storytelling e checkout.
2. **Entrevistas exploratórias** – clientes VIP e recorrentes para mapear gatilhos de compra, objeções e expectativas.
3. **Desk research** – dados de mercado brasileiro 2023/2024 sobre ticket médio, sazonalidades e comportamento mobile-first.

## Insights-chave
- Hero deve combinar peça ícone com mensagem de empoderamento pragmático.
- Benefícios precisam tangibilizar banho antialérgico, garantia estendida e embalagens sustentáveis.
- Prova social deve alternar depoimentos, notas de imprensa e UGC curado.
- Acesso rápido a WhatsApp e guia de tamanhos aumenta conversão durante a jornada.

## Princípios de UX para templates Bellona
1. **Proposta de valor em 5 segundos** – título com verbo ativo, subheadline funcional e CTA visível.
2. **Jornada em camadas** – manifesto, vitrines, diferenciais, depoimentos e CTA final organizados em narrativa progressiva.
3. **Redução de fricção** – formulários curtos com feedback imediato e opção de catálogo rápido.
4. **Acessibilidade** – contraste mínimo 4.5:1, tipografia fluida (≥16px desktop, ≥15px mobile) e áreas de toque ≥44px.
5. **Performance** – limitar vídeos pesados, comprimir imagens (≤200 KB) e reutilizar componentes.

## Seções recomendadas por tipo de página
| Página | Seções | Observações |
| --- | --- | --- |
| Home Principal | Hero, Destaques coleção, Manifesto, Benefícios, Prova social, CTA concierge | Atualizar coleções conforme campanhas vigentes. |
| Landing de coleção | Hero colecional, Curadoria, Materiais, Vídeo/Lookbook, Prova social específica, CTA catálogo | Conectar diretamente às categorias WooCommerce. |
| Landing de assinatura VIP | Hero com promessa, Vantagens, Degraus do programa, Depoimentos VIP, FAQ, CTA inscrição | Incluir comparativo com compra avulsa. |
| Landing sazonal | Banner de campanha, Oferta, Contagem regressiva, Vitrine, Garantias, CTA final | Ajustar para datas comemorativas e estoque disponível. |

## Recomendações de testes pós-importação
- Validar responsividade e espaçamentos nos três breakpoints do Elementor.
- Utilizar ferramentas de acessibilidade (axe, Lighthouse) e contrast checkers.
- Simular fluxo de compra completo e contato via WhatsApp concierge.
- Registrar feedbacks de clientes e atualizar este documento quando surgirem novos aprendizados.

> Caso dados recentes entrem em conflito com estas diretrizes w01, priorize o que for respaldado por pesquisa atualizada e registre a atualização na documentação global.
