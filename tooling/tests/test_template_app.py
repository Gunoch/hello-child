import json
from pathlib import Path

import pytest

from tooling.template_app.cli import TemplateApp
from tooling.template_app import builders


@pytest.fixture
def repo_root(tmp_path: Path) -> Path:
    repo = tmp_path / "repo"
    (repo / "template-kits" / "hello-elementor" / "pages" / "latest").mkdir(parents=True)
    (repo / "template-kits" / "hello-elementor" / "pages" / "archive").mkdir(parents=True)
    (repo / "template-kits" / "hello-elementor" / "sections").mkdir(parents=True)
    return repo


def test_list_templates_sorted_and_scoped(repo_root: Path) -> None:
    app = TemplateApp(repo_root=repo_root)

    pages = app.list_templates("pages")

    assert pages == sorted(pages, key=lambda descriptor: descriptor.slug)
    assert {descriptor.kind for descriptor in pages} == {"page"}

    latest_slug = next(iter(builders.LATEST_SLUGS))
    latest_descriptor = next(descriptor for descriptor in pages if descriptor.slug == latest_slug)

    expected_directory = repo_root / "template-kits" / "hello-elementor" / "pages" / "latest"
    assert latest_descriptor.default_directory == expected_directory


def test_resolve_reports_missing_slugs(repo_root: Path) -> None:
    app = TemplateApp(repo_root=repo_root)

    resolved = app.resolve(["bellona-home"], "pages")
    assert [descriptor.slug for descriptor in resolved] == ["bellona-home"]

    with pytest.raises(KeyError) as excinfo:
        app.resolve(["bellona-home", "inexistente"], "pages")

    assert "inexistente" in str(excinfo.value)
    assert "kind 'pages'" in str(excinfo.value)


def test_generate_writes_files_with_expected_content(repo_root: Path) -> None:
    app = TemplateApp(repo_root=repo_root)
    descriptors = app.resolve(["bellona-home"], "pages")

    output_dir = repo_root / "output"
    paths = app.generate(descriptors, output_dir=output_dir, indent=4)

    assert len(paths) == 1
    output_path = paths[0]
    assert output_path.exists()

    data = json.loads(output_path.read_text(encoding="utf-8"))
    assert data == descriptors[0].build()

    relative_description = app.describe_path(output_path)
    assert relative_description == str(output_path.relative_to(repo_root))


def test_generate_dry_run_prints_preview(repo_root: Path, capsys: pytest.CaptureFixture[str]) -> None:
    app = TemplateApp(repo_root=repo_root)
    descriptors = app.resolve(["bellona-home"], "pages")

    paths = app.generate(descriptors, dry_run=True)

    assert paths == []

    captured = capsys.readouterr()
    assert "# bellona-home (page)" in captured.out
    assert '"elType": "section"' in captured.out or '"elType": "column"' in captured.out
