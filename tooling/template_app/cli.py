"""Command-line interface for Elementor JSON template generation."""
from __future__ import annotations

import argparse
import json
from dataclasses import dataclass
from pathlib import Path
from typing import Iterable, Literal, Sequence

from . import builders

TemplateKind = Literal["page", "section"]


@dataclass(frozen=True)
class TemplateDescriptor:
    """Metadata needed to build a template."""

    slug: str
    title: str
    builder_key: str
    kind: TemplateKind
    default_directory: Path

    def build(self) -> dict:
        builder = builders.PAGE_BUILDERS[self.builder_key]
        return builder(self.slug, self.title)


class TemplateApp:
    """Utility class that orchestrates template generation."""

    def __init__(self, repo_root: Path | None = None) -> None:
        self.repo_root = repo_root or Path(__file__).resolve().parents[2]
        self.template_root = self.repo_root / "template-kits" / "hello-elementor"
        self.page_directories = {
            "latest": self.template_root / "pages" / "latest",
            "archive": self.template_root / "pages" / "archive",
        }
        self.sections_directory = self.template_root / "sections"
        self.records = self._load_records()

    def _load_records(self) -> dict[str, TemplateDescriptor]:
        records: dict[str, TemplateDescriptor] = {}
        for slug, (builder_key, title) in builders.PAGE_MAP.items():
            directory = (
                self.page_directories["latest"]
                if slug in builders.LATEST_SLUGS
                else self.page_directories["archive"]
            )
            records[slug] = TemplateDescriptor(
                slug=slug,
                title=title,
                builder_key=builder_key,
                kind="page",
                default_directory=directory,
            )
        for slug, (builder_key, title) in builders.TEMPLATE_MAP.items():
            records[slug] = TemplateDescriptor(
                slug=slug,
                title=title,
                builder_key=builder_key,
                kind="section",
                default_directory=self.sections_directory,
            )
        return records

    def _iter_records(self, kind: str) -> list[TemplateDescriptor]:
        records = list(self.records.values())
        if kind == "pages":
            return [record for record in records if record.kind == "page"]
        if kind == "sections":
            return [record for record in records if record.kind == "section"]
        return records

    def resolve(self, slugs: Sequence[str], kind: str) -> list[TemplateDescriptor]:
        candidates = {record.slug: record for record in self._iter_records(kind)}
        if not slugs:
            return sorted(candidates.values(), key=lambda record: record.slug)
        missing = [slug for slug in slugs if slug not in candidates]
        if missing:
            missing_formatted = ", ".join(sorted(missing))
            raise KeyError(f"Slug(s) not found for kind '{kind}': {missing_formatted}")
        return [candidates[slug] for slug in slugs]

    def list_templates(self, kind: str) -> list[TemplateDescriptor]:
        return sorted(self._iter_records(kind), key=lambda record: record.slug)

    def generate(
        self,
        descriptors: Iterable[TemplateDescriptor],
        *,
        output_dir: Path | None = None,
        indent: int = 2,
        dry_run: bool = False,
    ) -> list[Path]:
        results: list[Path] = []
        output_dir = output_dir.resolve() if output_dir else None
        for descriptor in descriptors:
            data = descriptor.build()
            json_text = json.dumps(data, indent=indent, ensure_ascii=False)
            if dry_run:
                print(f"\n# {descriptor.slug} ({descriptor.kind})")
                print(json_text)
                continue
            target_directory = output_dir or descriptor.default_directory
            target_directory.mkdir(parents=True, exist_ok=True)
            output_path = target_directory / f"{descriptor.slug}.json"
            output_path.write_text(json_text + "\n", encoding="utf-8")
            results.append(output_path)
        return results

    def describe_path(self, path: Path) -> str:
        try:
            return str(path.relative_to(self.repo_root))
        except ValueError:
            return str(path)


def build_parser() -> argparse.ArgumentParser:
    parser = argparse.ArgumentParser(
        description="Generate Elementor JSON templates from predefined blueprints.",
    )
    subparsers = parser.add_subparsers(dest="command", required=True)

    list_parser = subparsers.add_parser("list", help="List available templates.")
    list_parser.add_argument(
        "--kind",
        choices=["pages", "sections", "all"],
        default="all",
        help="Filter results by template type.",
    )

    generate_parser = subparsers.add_parser(
        "generate", help="Generate templates and write them to disk."
    )
    generate_parser.add_argument(
        "slugs",
        nargs="*",
        help="Specific slugs to generate. Defaults to all slugs in the selected kind.",
    )
    generate_parser.add_argument(
        "--kind",
        choices=["pages", "sections", "all"],
        default="all",
        help="Limit generation to a subset of templates.",
    )
    generate_parser.add_argument(
        "--output-dir",
        type=Path,
        help=(
            "Optional output directory. When omitted, files are saved in the repo's "
            "template-kits structure."
        ),
    )
    generate_parser.add_argument(
        "--indent",
        type=int,
        default=2,
        help="JSON indentation level.",
    )
    generate_parser.add_argument(
        "--dry-run",
        action="store_true",
        help="Print JSON to stdout without writing files.",
    )

    return parser


def _print_list(descriptors: Sequence[TemplateDescriptor]) -> None:
    if not descriptors:
        print("Nenhum template encontrado.")
        return
    slug_width = max(len("Slug"), max(len(desc.slug) for desc in descriptors))
    kind_width = max(len("Tipo"), max(len(desc.kind) for desc in descriptors))
    header = f"{'Slug'.ljust(slug_width)}  {'Tipo'.ljust(kind_width)}  Título"
    print(header)
    print("-" * len(header))
    for descriptor in descriptors:
        print(
            f"{descriptor.slug.ljust(slug_width)}  "
            f"{descriptor.kind.ljust(kind_width)}  "
            f"{descriptor.title}"
        )


def main(argv: Sequence[str] | None = None) -> int:
    parser = build_parser()
    args = parser.parse_args(argv)
    app = TemplateApp()

    if args.command == "list":
        descriptors = app.list_templates(args.kind)
        _print_list(descriptors)
        return 0

    if args.command == "generate":
        try:
            descriptors = app.resolve(args.slugs, args.kind)
        except KeyError as error:
            parser.error(str(error))
        paths = app.generate(
            descriptors,
            output_dir=args.output_dir,
            indent=args.indent,
            dry_run=args.dry_run,
        )
        if not args.dry_run:
            for path in paths:
                print(f"Gerado {app.describe_path(path)}")
        return 0

    parser.error("Comando inválido")
    return 1


__all__ = ["TemplateApp", "TemplateDescriptor", "main", "build_parser"]
