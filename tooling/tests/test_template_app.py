from pathlib import Path

from tooling.template_app.cli import TemplateApp


def test_generate_expands_user_directory(monkeypatch, tmp_path):
    fake_home = tmp_path / "home"
    fake_home.mkdir()
    monkeypatch.setenv("HOME", str(fake_home))

    app = TemplateApp()
    descriptor = app.list_templates("pages")[0]

    output_dir = Path("~/exports")
    generated_paths = app.generate([descriptor], output_dir=output_dir)

    expected_directory = fake_home / "exports"
    assert generated_paths[0].parent == expected_directory
    assert generated_paths[0].name == f"{descriptor.slug}.json"
    assert generated_paths[0].is_file()


def test_describe_path_relative_to_repo(tmp_path):
    repo_root = tmp_path / "repo"
    repo_root.mkdir()

    app = TemplateApp(repo_root=repo_root)
    target_inside = repo_root / "nested" / "file.json"
    target_inside.parent.mkdir(parents=True)
    target_inside.touch()

    assert app.describe_path(target_inside) == "nested/file.json"

    target_outside = tmp_path / "external.json"
    target_outside.touch()

    assert app.describe_path(target_outside) == str(target_outside)
