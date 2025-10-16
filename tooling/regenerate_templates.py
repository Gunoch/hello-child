"""Compat entrypoint for regenerating Elementor templates.

Prefer executing ``python -m tooling.template_app`` to access the full CLI.
This module keeps backwards compatibility with legacy automation that expects
``tooling/regenerate_templates.py`` to regenerate every template.
"""

from __future__ import annotations

from pathlib import Path
import sys

if __package__ in {None, ""}:
    # Permite execução direta via ``python tooling/regenerate_templates.py``
    repo_root = Path(__file__).resolve().parent.parent
    if str(repo_root) not in sys.path:
        sys.path.insert(0, str(repo_root))
    from tooling.template_app.cli import main
else:  # pragma: no cover - fluxo utilizado apenas em execuções via ``python -m``
    from .template_app.cli import main


def regenerate_all(argv: list[str] | None = None) -> int:
    """Regenerate templates using the new CLI.

    Quando nenhum argumento é fornecido, reproduz o comportamento legado de
    gerar todos os templates. Caso contrário, encaminha os argumentos para o
    CLI moderno.
    """

    if argv:
        return main(argv)
    return main(["generate"])


if __name__ == "__main__":
    raise SystemExit(regenerate_all(sys.argv[1:]))
