import json
from pathlib import Path

ROOT = Path(__file__).resolve().parent.parent
PAGES_DIR = ROOT / "template-kits" / "hello-elementor" / "pages"
TEMPLATES_DIR = ROOT / "template-kits" / "hello-elementor" / "templates"

PALETTE = {
    "background_gradient_start": "#f8f5ff",
    "background_gradient_end": "#fcefed",
    "accent": "#7f3dff",
    "accent_dark": "#5120c2",
    "accent_warm": "#ff8660",
    "text": "#2a2142",
    "muted": "#594f72",
    "surface": "#ffffff",
    "surface_alt": "#f3f0ff",
}


def px(value: int) -> dict:
    return {"unit": "px", "size": value, "sizes": []}


def spacing(top="0", right="0", bottom="0", left="0", unit="px", linked=False):
    return {
        "unit": unit,
        "top": str(top),
        "right": str(right),
        "bottom": str(bottom),
        "left": str(left),
        "isLinked": linked,
    }


def border_radius(value: str) -> dict:
    return {
        "unit": "px",
        "top": value,
        "right": value,
        "bottom": value,
        "left": value,
        "isLinked": True,
    }


def section(section_id: str, *, settings=None, elements=None):
    return {
        "id": section_id,
        "elType": "section",
        "settings": settings or {},
        "elements": elements or [],
    }


def column(column_id: str, *, size: int = 50, settings=None, elements=None):
    base_settings = {"_column_size": size}
    if settings:
        base_settings.update(settings)
    return {
        "id": column_id,
        "elType": "column",
        "settings": base_settings,
        "elements": elements or [],
    }


def heading(widget_id: str, title: str, *, align="left", tag="h2", color=None, size=px(36), weight="600", margin_bottom="16"):
    return {
        "id": widget_id,
        "elType": "widget",
        "widgetType": "heading",
        "settings": {
            "title": title,
            "header_size": tag,
            "align": align,
            "typography_typography": "custom",
            "typography_font_size": size,
            "typography_font_weight": weight,
            "text_color": color or PALETTE["text"],
            "margin": spacing(bottom=margin_bottom),
        },
        "elements": [],
    }


def text_block(widget_id: str, html: str, *, align="left", color=None, size=px(18), line_height=1.7, margin_bottom="24"):
    return {
        "id": widget_id,
        "elType": "widget",
        "widgetType": "text-editor",
        "settings": {
            "editor": html,
            "align": align,
            "text_color": color or PALETTE["muted"],
            "typography_typography": "custom",
            "typography_font_size": size,
            "typography_line_height": {"unit": "em", "size": line_height, "sizes": []},
            "margin": spacing(bottom=margin_bottom),
        },
        "elements": [],
    }


def button(widget_id: str, text: str, *, align="left", style="primary"):
    if style == "primary":
        settings = {
            "text": text,
            "align": align,
            "size": "lg",
            "button_type": "info",
            "background_color": PALETTE["accent"],
            "hover_background_color": PALETTE["accent_dark"],
            "text_color": "#ffffff",
            "border_radius": border_radius("40"),
            "padding": spacing(top="16", right="32", bottom="16", left="32"),
        }
    else:
        settings = {
            "text": text,
            "align": align,
            "size": "lg",
            "button_type": "outline",
            "background_color": PALETTE["surface"],
            "text_color": PALETTE["accent"],
            "border_color": PALETTE["accent"],
            "hover_background_color": PALETTE["accent"],
            "hover_text_color": "#ffffff",
            "border_width": {"unit": "px", "top": "2", "right": "2", "bottom": "2", "left": "2", "isLinked": True},
            "border_radius": border_radius("40"),
            "padding": spacing(top="16", right="32", bottom="16", left="32"),
        }
    return {
        "id": widget_id,
        "elType": "widget",
        "widgetType": "button",
        "settings": settings,
        "elements": [],
    }


def divider(widget_id: str, width="15"):
    return {
        "id": widget_id,
        "elType": "widget",
        "widgetType": "divider",
        "settings": {
            "align": "left",
            "width": {"unit": "%", "size": width, "sizes": []},
            "line_height": {"unit": "px", "size": 4, "sizes": []},
            "color": PALETTE["accent"],
            "margin": spacing(bottom="24"),
        },
        "elements": [],
    }


def icon_list(widget_id: str, items):
    return {
        "id": widget_id,
        "elType": "widget",
        "widgetType": "icon-list",
        "settings": {
            "icon_list": [
                {
                    "text": text,
                    "selected_icon": {"value": "fas fa-check", "library": "fa-solid"},
                    "icon_color": PALETTE["accent"],
                }
                for text in items
            ],
            "text_color": PALETTE["muted"],
            "align": "left",
            "typography_typography": "custom",
            "typography_font_size": px(16),
            "space_between": {"unit": "px", "size": 12, "sizes": []},
        },
        "elements": [],
    }


def stat_card(card_id: str, eyebrow: str, value: str, description: str):
    return column(
        card_id,
        size=25,
        settings={
            "background_background": "classic",
            "background_color": PALETTE["surface"],
            "padding": spacing(top="32", right="32", bottom="32", left="32"),
            "border_radius": border_radius("24"),
            "box_shadow_box_shadow_type": "yes",
            "box_shadow_box_shadow": {"horizontal": 0, "vertical": 20, "blur": 50, "spread": 0, "color": "rgba(23,14,52,0.08)"},
        },
        elements=[
            heading(f"{card_id}_eyebrow", eyebrow, size=px(14), weight="600", margin_bottom="8", color=PALETTE["accent"]),
            heading(f"{card_id}_value", value, size=px(32), weight="700", margin_bottom="12"),
            text_block(f"{card_id}_description", f"<p>{description}</p>", size=px(16), margin_bottom="0"),
        ],
    )


def gallery_card(card_id: str, title: str, description: str):
    return column(
        card_id,
        size=33,
        settings={
            "background_background": "classic",
            "background_color": PALETTE["surface"],
            "padding": spacing(top="28", right="28", bottom="28", left="28"),
            "border_radius": border_radius("20"),
            "box_shadow_box_shadow_type": "yes",
            "box_shadow_box_shadow": {"horizontal": 0, "vertical": 15, "blur": 40, "spread": 0, "color": "rgba(17,13,33,0.07)"},
        },
        elements=[
            heading(f"{card_id}_title", title, size=px(22), weight="600", margin_bottom="12"),
            text_block(f"{card_id}_text", f"<p>{description}</p>", size=px(16), margin_bottom="0"),
        ],
    )


def hero_section(page: str, eyebrow: str, title: str, description: str, primary_cta: str, secondary_cta: str | None = None, *, image_caption: str | None = None):
    text_elements = [
        heading(f"{page}_hero_badge", eyebrow, tag="span", size=px(18), weight="600", color=PALETTE["accent"], margin_bottom="12"),
        heading(f"{page}_hero_title", title, size=px(58), weight="700", margin_bottom="20"),
        text_block(f"{page}_hero_description", f"<p>{description}</p>", size=px(18), margin_bottom="28"),
        divider(f"{page}_hero_divider"),
    ]
    button_row = section(
        f"{page}_hero_button_row",
        settings={"content_width": "full", "gap_columns": "no"},
        elements=[
            column(
                f"{page}_hero_button_column",
                size=100,
                settings={"layout": "flex", "align_items": "center", "gap": px(20)},
                elements=[
                    button(f"{page}_hero_primary", primary_cta),
                ] + ([button(f"{page}_hero_secondary", secondary_cta, style="secondary")] if secondary_cta else []),
            )
        ],
    )
    text_elements.append(button_row)
    visual_column = column(
        f"{page}_hero_visual",
        size=50,
        settings={
            "_column_size": 50,
            "background_background": "classic",
            "background_color": PALETTE["surface"],
            "border_radius": border_radius("32"),
            "padding": spacing(top="48", right="48", bottom="48", left="48"),
            "box_shadow_box_shadow_type": "yes",
            "box_shadow_box_shadow": {"horizontal": 0, "vertical": 30, "blur": 60, "spread": -12, "color": "rgba(23,14,52,0.12)"},
        },
        elements=[
            heading(f"{page}_hero_visual_title", "Detalhes artesanais", size=px(22), weight="600", margin_bottom="12"),
            text_block(
                f"{page}_hero_visual_text",
                "<p>Metais nobres, lapidação criteriosa e acabamentos que respeitam a beleza natural de cada pedra.</p>",
                size=px(16),
                margin_bottom="20",
            ),
        ],
    )
    if image_caption:
        visual_column["elements"].append(
            text_block(f"{page}_hero_caption", f"<p><strong>{image_caption}</strong></p>", size=px(14), margin_bottom="0", color=PALETTE["accent"])
        )
    return section(
        f"{page}_hero_section",
        settings={
            "structure": "50",
            "content_width": "boxed",
            "gap": "extended",
            "background_background": "gradient",
            "background_color": PALETTE["background_gradient_start"],
            "background_color_b": PALETTE["background_gradient_end"],
            "background_gradient_type": "linear",
            "background_gradient_angle": {"unit": "deg", "size": 125, "sizes": []},
            "padding": spacing(top="80", right="40", bottom="80", left="40"),
        },
        elements=[
            column(
                f"{page}_hero_content",
                size=50,
                settings={"_column_size": 50, "padding": spacing(top="0", right="40", bottom="0", left="0")},
                elements=text_elements,
            ),
            visual_column,
        ],
    )


def cards_section(section_id: str, title: str, description: str, cards):
    return section(
        section_id,
        settings={
            "content_width": "boxed",
            "gap": "no",
            "padding": spacing(top="60", right="40", bottom="60", left="40"),
        },
        elements=[
            column(
                f"{section_id}_header",
                size=100,
                settings={"_column_size": 100, "padding": spacing(bottom="24")},
                elements=[
                    heading(f"{section_id}_title", title, align="center", margin_bottom="12"),
                    text_block(f"{section_id}_description", f"<p>{description}</p>", align="center", size=px(16), margin_bottom="40"),
                ],
            ),
            section(
                f"{section_id}_grid",
                settings={"content_width": "full", "gap": "no", "structure": "33"},
                elements=cards,
            ),
        ],
    )


def narrative_section(section_id: str, title: str, paragraphs):
    return section(
        section_id,
        settings={
            "content_width": "boxed",
            "gap": "extended",
            "background_background": "classic",
            "background_color": PALETTE["surface"],
            "padding": spacing(top="72", right="48", bottom="72", left="48"),
            "border_radius": border_radius("32"),
            "box_shadow_box_shadow_type": "yes",
            "box_shadow_box_shadow": {"horizontal": 0, "vertical": 20, "blur": 50, "spread": -16, "color": "rgba(23,14,52,0.08)"},
        },
        elements=[
            column(
                f"{section_id}_column",
                size=100,
                settings={"_column_size": 100},
                elements=[
                    heading(f"{section_id}_title", title, align="center", margin_bottom="24"),
                ]
                + [
                    text_block(
                        f"{section_id}_paragraph_{index}",
                        f"<p>{text}</p>",
                        align="center",
                        size=px(17),
                        margin_bottom="20" if index < len(paragraphs) - 1 else "0",
                    )
                    for index, text in enumerate(paragraphs, start=1)
                ],
            )
        ],
    )


def cta_section(section_id: str, title: str, subtitle: str, primary: str, secondary: str):
    return section(
        section_id,
        settings={
            "content_width": "boxed",
            "gap": "extended",
            "background_background": "gradient",
            "background_color": PALETTE["accent"],
            "background_color_b": PALETTE["accent_warm"],
            "background_gradient_type": "linear",
            "background_gradient_angle": {"unit": "deg", "size": 140, "sizes": []},
            "padding": spacing(top="64", right="48", bottom="64", left="48"),
            "border_radius": border_radius("32"),
            "box_shadow_box_shadow_type": "yes",
            "box_shadow_box_shadow": {"horizontal": 0, "vertical": 25, "blur": 60, "spread": -18, "color": "rgba(0,0,0,0.15)"},
        },
        elements=[
            column(
                f"{section_id}_column",
                size=100,
                settings={"_column_size": 100, "layout": "flex", "direction": "column", "align_items": "center"},
                elements=[
                    heading(f"{section_id}_title", title, align="center", color="#ffffff", margin_bottom="16"),
                    text_block(f"{section_id}_subtitle", f"<p>{subtitle}</p>", align="center", color="#f8f5ff", size=px(16), margin_bottom="32"),
                    section(
                        f"{section_id}_buttons",
                        settings={"content_width": "full", "structure": "50", "gap_columns": "no"},
                        elements=[
                            column(
                                f"{section_id}_buttons_column",
                                size=100,
                                settings={"_column_size": 100, "layout": "flex", "justify_content": "center", "gap": px(16)},
                                elements=[
                                    button(f"{section_id}_primary", primary, style="primary"),
                                    button(f"{section_id}_secondary", secondary, style="secondary"),
                                ],
                            )
                        ],
                    ),
                ],
            )
        ],
    )


def create_home(page: str, title: str):
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "Coleção 2024", "Sofisticação atemporal para cada movimento", "Um editorial completo com joias que transitam entre o cotidiano e ocasiões especiais, com materiais certificados e assinatura autoral.", "Ver catálogo", "Agendar consultoria", image_caption="Personalize sua combinação em até 48h"),
            cards_section(
                f"{page}_destaques",
                "Por que escolher a Ballona",
                "Pensamos em cada detalhe da experiência, do design à entrega impecável.",
                [
                    gallery_card(f"{page}_destaque_criacao", "Design autoral", "Coleções exclusivas desenvolvidas pela nossa diretora criativa com pesquisa de tendências globais."),
                    gallery_card(f"{page}_destaque_material", "Materiais éticos", "Prata 925, ouro reciclado e gemas com rastreabilidade garantida para um luxo consciente."),
                    gallery_card(f"{page}_destaque_experiencia", "Atendimento consultivo", "Consultoras especialistas para guiar combinações, ajustes e presentes memoráveis."),
                ],
            ),
            narrative_section(
                f"{page}_editorial",
                "Editorial Aurora",
                [
                    "Inspirada nas luzes do amanhecer, Aurora une curvas fluidas e brilhos sutis que ressaltam diferentes tons de pele.",
                    "Cada peça pode ser personalizada com gravações delicadas, criando histórias únicas para quem veste Ballona.",
                    "Disponível com envio expresso para todo o Brasil e retirada no ateliê em São Paulo.",
                ],
            ),
            cta_section(f"{page}_cta", "Experimente no seu tempo", "Receba o kit de prova em casa e finalize a compra quando se apaixonar.", "Solicitar kit", "Conversar no WhatsApp"),
        ],
    }


def create_lookbook(page: str, title: str):
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "Lookbook digital", "Curadoria Ballona para cada ocasião", "Explore produções completas com joias e styling assinados pelo nosso time criativo.", "Baixar lookbook", "Receber novidades", image_caption="Atualizado a cada lançamento"),
            cards_section(
                f"{page}_looks",
                "Três atmosferas para inspirar",
                "Misturamos texturas, volumes e contrastes para facilitar sua decisão.",
                [
                    gallery_card(f"{page}_look_diurno", "Ritual Matinal", "Tons claros, texturas suaves e peças leves que iluminam meetings e encontros informais."),
                    gallery_card(f"{page}_look_noite", "Luzes Urbanas", "Brilhos estratégicos e contrastes marcantes pensados para a noite."),
                    gallery_card(f"{page}_look_festa", "Celebração", "Maxi peças combinadas com gemas vibrantes em composições harmônicas."),
                ],
            ),
            narrative_section(
                f"{page}_styling",
                "Como criamos as produções",
                [
                    "Cada look é desenvolvido em parceria com stylists convidados e fotógrafos que traduzem o universo Ballona.",
                    "Indicamos combinações de joias, tecidos e cores que valorizam diferentes biotipos.",
                ],
            ),
            cta_section(f"{page}_cta", "Quer ajuda personalizada?", "Agende uma sessão virtual para montar o look perfeito com nossa equipe.", "Agendar styling", "Salvar referências"),
        ],
    }


def create_contact(page: str, title: str):
    cards = [
        gallery_card(f"{page}_contato_atelie", "Ateliê SP", "Rua Girassol, 489 – Vila Madalena<br>Segunda a sábado, das 10h às 19h."),
        gallery_card(f"{page}_contato_whatsapp", "Consultoria digital", "WhatsApp +55 11 99999-0000<br>Retorno em até 15 minutos."),
        gallery_card(f"{page}_contato_email", "E-mail", "contato@ballona.com<br>Respostas personalizadas em até 24h úteis."),
    ]
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "Fale com a Ballona", "Canais sempre próximos de você", "Escolha o canal ideal para tirar dúvidas, personalizar pedidos ou agendar visitas.", "Enviar mensagem", "Consultar horário"),
            cards_section(
                f"{page}_canais",
                "Canais diretos",
                "Temos equipe dedicada para atendimento consultivo e acompanhamento pós-compra.",
                cards,
            ),
            narrative_section(
                f"{page}_faq",
                "Antes de nos chamar",
                [
                    "Confira nosso FAQ atualizado para respostas imediatas sobre prazos, ajustes e políticas.",
                    "Preferimos contatos agendados para visitas ao ateliê – assim garantimos uma experiência exclusiva.",
                ],
            ),
            cta_section(f"{page}_cta", "Vamos conversar?", "Estamos a um clique de distância para ajudar na sua escolha.", "Abrir WhatsApp", "Ver mapa"),
        ],
    }


def create_collection(page: str, title: str):
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "Coleção Aurora", "Brilho suave inspirado no amanhecer", "Peças moduláveis com gemas em degradê, perfeitas para iluminar o dia inteiro.", "Comprar agora", "Solicitar catálogo", image_caption="Edição limitada - 300 peças"),
            cards_section(
                f"{page}_caracteristicas",
                "Elementos-chave",
                "Destaques que tornam Aurora inesquecível.",
                [
                    gallery_card(f"{page}_caracteristica_modulos", "Módulos intercambiáveis", "Combine pingentes, correntes e ear cuffs para criar novas proporções."),
                    gallery_card(f"{page}_caracteristica_gemas", "Gemas em degradê", "Quartzos, topázios e safiras selecionadas para transições cromáticas suaves."),
                    gallery_card(f"{page}_caracteristica_acabamento", "Acabamentos acetinados", "Toque aveludado com microtexturas exclusivas da Ballona."),
                ],
            ),
            narrative_section(
                f"{page}_origem",
                "Processo criativo",
                [
                    "Aurora nasce de viagens ao norte da Noruega e da observação dos reflexos da aurora boreal.",
                    "O ouro reciclado ganha novos contornos com lapidações assimétricas feitas no Brasil.",
                ],
            ),
            cta_section(f"{page}_cta", "Reserve sua peça", "Produção limitada com certificação de origem e entrega expressa.", "Reservar agora", "Solicitar ajuste"),
        ],
    }


def create_experience(page: str, title: str):
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "Experiência Ballona", "Um ritual completo de compra", "Da primeira consulta ao pós-entrega, acompanhamos cada passo com atenção.", "Conhecer etapas", "Ver depoimentos", image_caption="Time dedicado a você"),
            cards_section(
                f"{page}_etapas",
                "Nossa jornada",
                "Três etapas desenhadas para encantar.",
                [
                    gallery_card(f"{page}_etapa_consulta", "Consulta inspiradora", "Conversamos sobre estilo de vida, ocasiões e preferências para sugerir combinações."),
                    gallery_card(f"{page}_etapa_prova", "Prova guiada", "Enviamos um kit com peças selecionadas e orientamos virtualmente cada ajuste."),
                    gallery_card(f"{page}_etapa_pos", "Acompanhamento", "Registramos a peça e oferecemos manutenção vitalícia com agenda flexível."),
                ],
            ),
            narrative_section(
                f"{page}_sensacoes",
                "Sensações que nos guiam",
                [
                    "Queremos que cada cliente sinta pertencimento, confiança e brilho autêntico.",
                    "Por isso, combinamos tecnologia de medição com artesãos experientes.",
                ],
            ),
            cta_section(f"{page}_cta", "Pronta para viver a experiência?", "Agende sua primeira conversa com nossa equipe de especialistas.", "Agendar encontro", "Ler histórias"),
        ],
    }


def create_team(page: str, title: str):
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "Equipe Ballona", "Criativas, artesãs e especialistas em joias", "Conheça quem dá vida às coleções e garante uma jornada impecável.", "Ver bastidores", "Enviar portfólio"),
            cards_section(
                f"{page}_lideres",
                "Lideranças criativas",
                "Profissionais com trajetórias em moda, design e joalheria.",
                [
                    gallery_card(f"{page}_lider_criativa", "Helena Costa", "Diretora criativa – pesquisa tendências, conduz coleções autorais e editoriais."),
                    gallery_card(f"{page}_lider_atelie", "Maiara Santos", "Mestra joalheira – lidera o ateliê e garante acabamentos impecáveis."),
                    gallery_card(f"{page}_lider_relacionamento", "Ana Valença", "Head de relacionamento – cria experiências personalizadas para cada cliente."),
                ],
            ),
            narrative_section(
                f"{page}_cultura",
                "Nossa cultura",
                [
                    "Valorizamos processos transparentes, materiais éticos e a construção de memórias afetivas.",
                    "Somos um time majoritariamente feminino, comprometido com inclusão e impacto positivo.",
                ],
            ),
            cta_section(f"{page}_cta", "Quer fazer parte?", "Buscamos talentos em design, atendimento consultivo e produção artesanal.", "Ver vagas", "Mandar portfólio"),
        ],
    }


def create_faq(page: str, title: str):
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "FAQ Ballona", "Respostas rápidas para suas dúvidas", "Reunimos as principais perguntas sobre prazos, ajustes e políticas da marca.", "Ver políticas", "Chamar atendimento"),
            cards_section(
                f"{page}_perguntas",
                "Principais temas",
                "Seleção das dúvidas mais frequentes.",
                [
                    gallery_card(f"{page}_faq_entrega", "Envio e prazos", "Produção de peças sob encomenda leva até 15 dias úteis. Entregas expressas disponíveis."),
                    gallery_card(f"{page}_faq_ajustes", "Ajustes e personalização", "Ajustamos medidas sem custo nos primeiros 12 meses e oferecemos gravações especiais."),
                    gallery_card(f"{page}_faq_pagamento", "Pagamento", "Parcelamos em até 6x sem juros e oferecemos condições exclusivas para consultorias."),
                ],
            ),
            narrative_section(
                f"{page}_mais_duvidas",
                "Não encontrou sua resposta?",
                [
                    "Nosso time está disponível para conversar via WhatsApp ou e-mail em horário comercial.",
                    "Também oferecemos guias detalhados em PDF com recomendações de cuidados e políticas completas.",
                ],
            ),
            cta_section(f"{page}_cta", "Converse com a Ballona", "Teremos prazer em ajudar na sua decisão.", "Abrir chat", "Mandar e-mail"),
        ],
    }


def create_care(page: str, title: str):
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "Guia de cuidados", "Como preservar o brilho das suas joias", "Recomendações simples para manter peças Ballona impecáveis por gerações.", "Baixar guia", "Solicitar kit de limpeza", image_caption="Manual atualizado trimestralmente"),
            cards_section(
                f"{page}_rotina",
                "Rotina essencial",
                "Práticas rápidas que fazem diferença no dia a dia.",
                [
                    gallery_card(f"{page}_rotina_limpeza", "Limpeza", "Use pano macio e solução neutra semanalmente para remover resíduos."),
                    gallery_card(f"{page}_rotina_armazenamento", "Armazenamento", "Guarde individualmente em saquinhos de algodão para evitar atritos."),
                    gallery_card(f"{page}_rotina_cuidados", "Contato com produtos", "Evite perfumes, cloro e cosméticos diretamente sobre as peças."),
                ],
            ),
            narrative_section(
                f"{page}_manutencao",
                "Serviços Ballona",
                [
                    "Oferecemos polimento anual gratuito e avaliação completa de gemas e cravações.",
                    "Para reparos avançados, nosso ateliê garante prazos ágeis e comunicação transparente.",
                ],
            ),
            cta_section(f"{page}_cta", "Precisa de suporte?", "Estamos prontos para restaurar e revitalizar suas peças favoritas.", "Solicitar manutenção", "Falar com especialista"),
        ],
    }


def create_policy(page: str, title: str):
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "Políticas Ballona", "Transparência em cada etapa", "Confira como funcionam nossas trocas, devoluções e garantias.", "Ver prazos", "Solicitar suporte"),
            cards_section(
                f"{page}_politicas",
                "Aspectos principais",
                "Resumo das políticas oficiais.",
                [
                    gallery_card(f"{page}_politica_troca", "Trocas", "Aceitas em até 30 dias com embalagem original e certificado."),
                    gallery_card(f"{page}_politica_devolucao", "Devoluções", "Prazo de 7 dias úteis após o recebimento conforme CDC."),
                    gallery_card(f"{page}_politica_garantia", "Garantia", "Cobertura vitalícia para defeitos de fabricação e manutenção gratuita anual."),
                ],
            ),
            narrative_section(
                f"{page}_processo",
                "Como solicitar",
                [
                    "Faça contato pelo nosso canal oficial indicando número do pedido, produto e motivo.",
                    "Enviamos etiqueta reversa, orientações de embalagem e acompanhamos cada etapa até a conclusão.",
                ],
            ),
            cta_section(f"{page}_cta", "Precisa acionar uma política?", "Estamos disponíveis para apoiar com agilidade e cuidado.", "Abrir solicitação", "Ver FAQ"),
        ],
    }


def create_about(page: str, title: str):
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "Sobre a Ballona", "Joias que celebram histórias", "Somos uma joalheria brasileira independente com foco em processos responsáveis e design contemporâneo.", "Conhecer manifesto", "Ver bastidores", image_caption="Fundada em 2014"),
            cards_section(
                f"{page}_pilares",
                "Nossos pilares",
                "Valores que sustentam a marca.",
                [
                    gallery_card(f"{page}_pilar_criacao", "Criação autoral", "Coleções com narrativa única, pensadas para durar além das tendências."),
                    gallery_card(f"{page}_pilar_etica", "Ética", "Transparência total na origem de materiais e parceiros certificados."),
                    gallery_card(f"{page}_pilar_relacionamento", "Relacionamento", "Cuidado humano em cada atendimento, da consultoria ao pós-venda."),
                ],
            ),
            narrative_section(
                f"{page}_historia",
                "Nossa trajetória",
                [
                    "Nasceu do encontro entre design e joalheria artesanal, levando luz a momentos marcantes.",
                    "Hoje atendemos clientes em todo o Brasil com coleções cápsula e peças sob encomenda.",
                ],
            ),
            cta_section(f"{page}_cta", "Pronta para escrever a sua história?", "Vamos criar uma joia inesquecível juntas.", "Explorar coleções", "Conversar agora"),
        ],
    }


def create_exchange(page: str, title: str):
    # Similar to policy but reforcing processo de troca
    return {
        "version": "0.5",
        "title": title,
        "type": "page",
        "content": [
            hero_section(page, "Trocas e devoluções", "Processo sem complicação", "Orientações claras para garantir segurança e tranquilidade na sua compra.", "Iniciar solicitação", "Falar com especialista"),
            cards_section(
                f"{page}_passos",
                "Passo a passo",
                "Veja como realizar trocas, ajustes e devoluções.",
                [
                    gallery_card(f"{page}_passo_1", "Solicitação", "Entre em contato em até 30 dias indicando número do pedido e motivo."),
                    gallery_card(f"{page}_passo_2", "Envio", "Você recebe etiqueta reversa e instruções de embalagem segura."),
                    gallery_card(f"{page}_passo_3", "Conclusão", "Acompanhamos a análise e oferecemos crédito, ajuste ou estorno."),
                ],
            ),
            narrative_section(
                f"{page}_condicoes",
                "Condições importantes",
                [
                    "As peças devem estar sem sinais de uso e acompanhadas do certificado Ballona.",
                    "Personalizações mantêm cobertura de ajustes gratuitos dentro do primeiro ano.",
                ],
            ),
            cta_section(f"{page}_cta", "Precisa de ajuda?", "Nossa equipe está disponível para orientar cada etapa.", "Abrir protocolo", "Ler políticas"),
        ],
    }


PAGE_BUILDERS = {
    "home": create_home,
    "lookbook": create_lookbook,
    "contato": create_contact,
    "colecao": create_collection,
    "experiencia": create_experience,
    "equipe": create_team,
    "faq": create_faq,
    "guia": create_care,
    "politicas": create_policy,
    "sobre": create_about,
    "trocas": create_exchange,
}


PAGE_MAP = {
    "ballona-home": ("home", "Ballona Home"),
    "ballona-home-v2": ("home", "Ballona Home v2"),
    "ballona-lookbook": ("lookbook", "Ballona Lookbook"),
    "ballona-lookbook-v2": ("lookbook", "Ballona Lookbook v2"),
    "ballona-contato": ("contato", "Ballona Contato"),
    "ballona-contato-v2": ("contato", "Ballona Contato v2"),
    "ballona-colecao-aurora": ("colecao", "Ballona Coleção Aurora"),
    "ballona-colecao-aurora-v2": ("colecao", "Ballona Coleção Aurora v2"),
    "ballona-experiencia": ("experiencia", "Ballona Experiência"),
    "ballona-equipe": ("equipe", "Ballona Equipe"),
    "ballona-faq": ("faq", "Ballona FAQ"),
    "ballona-guia-cuidados": ("guia", "Ballona Guia de Cuidados"),
    "ballona-guia-cuidados-v2": ("guia", "Ballona Guia de Cuidados v2"),
    "ballona-politicas-troca-devolucao": ("politicas", "Ballona Políticas"),
    "ballona-politicas-troca-devolucao-v2": ("politicas", "Ballona Políticas v2"),
    "ballona-trocas-devolucoes": ("trocas", "Ballona Trocas e Devoluções"),
    "ballona-trocas-devolucoes-v2": ("trocas", "Ballona Trocas e Devoluções v2"),
    "ballona-sobre": ("sobre", "Ballona Sobre"),
    "ballona-sobre-v2": ("sobre", "Ballona Sobre v2"),
}

TEMPLATE_MAP = {
    "ballona-politicas-troca-devolucao": ("politicas", "Ballona Políticas de Troca e Devoluções"),
}


def main():
    for slug, (page_type, title) in PAGE_MAP.items():
        builder = PAGE_BUILDERS[page_type]
        data = builder(slug, title)
        output_path = PAGES_DIR / f"{slug}.json"
        output_path.write_text(json.dumps(data, indent=2, ensure_ascii=False) + "\n", encoding="utf-8")
        print(f"Regenerated {output_path.relative_to(ROOT)}")

    for slug, (page_type, title) in TEMPLATE_MAP.items():
        builder = PAGE_BUILDERS[page_type]
        data = builder(slug, title)
        output_path = TEMPLATES_DIR / f"{slug}.json"
        output_path.write_text(json.dumps(data, indent=2, ensure_ascii=False) + "\n", encoding="utf-8")
        print(f"Regenerated {output_path.relative_to(ROOT)}")


if __name__ == "__main__":
    main()
