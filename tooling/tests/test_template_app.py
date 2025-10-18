from pathlib import Path
import sys

import pytest

PROJECT_ROOT = Path(__file__).resolve().parents[2]
if str(PROJECT_ROOT) not in sys.path:
    sys.path.insert(0, str(PROJECT_ROOT))

from tooling.template_app.cli import TemplateApp


def create_app() -> TemplateApp:
    # Instantiate with the repository root resolved from this test file to avoid
    # relying on the module location when the tests are executed from another
    # working directory.
    return TemplateApp(repo_root=PROJECT_ROOT)


def test_resolve_all_preserves_duplicates():
    app = create_app()

    records = app.resolve([], "all")
    assert len(records) == len(app.records)

    duplicated = [record for record in records if record.slug == "bellona-politicas-troca-devolucao"]
    assert {record.kind for record in duplicated} == {"page", "section"}


def test_resolve_requires_kind_for_ambiguous_slug():
    app = create_app()

    with pytest.raises(KeyError) as excinfo:
        app.resolve(["bellona-politicas-troca-devolucao"], "all")

    message = str(excinfo.value)
    assert "Use --kind to disambiguate" in message


def test_resolve_with_kind_returns_specific_descriptor():
    app = create_app()

    page_descriptor = app.resolve(["bellona-politicas-troca-devolucao"], "pages")[0]
    section_descriptor = app.resolve(["bellona-politicas-troca-devolucao"], "sections")[0]

    assert page_descriptor.kind == "page"
    assert section_descriptor.kind == "section"
