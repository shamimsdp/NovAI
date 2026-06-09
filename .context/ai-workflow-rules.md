# AI Workflow Rules

## Approach

Build and maintain this WordPress FSE block theme incrementally using a spec-driven workflow. The six context files in `.context/` define what to build, how to build it, and the current state of progress. Always implement against these specs — do not infer or invent behavior from scratch.

This is a commercial theme targeting both **ThemeForest** and **WordPress.org** simultaneously. Every decision must satisfy both review processes.

## Scoping Rules

- Work on one file or one pattern at a time
- Prefer small, verifiable increments over large speculative changes
- Do not combine unrelated concerns in a single implementation step
- When editing `theme.json`, check that no existing style variations would break

## When to Split Work

Split an implementation step if it combines:

- Editing `theme.json` tokens AND editing block patterns (they should be separate commits)
- Creating a new pattern AND modifying `functions.php` registration
- Changing CSS custom properties AND updating block markup that references them
- Any change that cannot be verified by activating the theme and checking the pattern inserter

## Handling Missing Requirements

- Do not invent design decisions not defined in the context files
- If a requirement is ambiguous, resolve it in the relevant context file first
- If a pattern slug collides with an existing one, stop and ask — do not silently rename

## Protected Files (Do Not Modify Without Explicit Instruction)

- `style.css` — WordPress theme header; changes require coordinated version bump
- `theme.json` — Any color/font/spacing slug rename breaks all patterns using that token
- Pattern slugs once created — downstream templates may reference them by slug

## WordPress.org Compliance Rules

These rules are **enforced by reviewers** and will cause hard rejection:

1. **No obfuscated code** — all PHP, JS, and CSS must be human-readable
2. **No calls to external servers** — all fonts, scripts, and styles must be self-hosted
3. **GPL v2 or later** for all PHP/JS/CSS. Font assets must be OFL or GPL-compatible
4. **Text domain `novai`** on every translatable string — no mixed domains
5. **No admin notices** beyond theme-update notices
6. **No upsell/freemium** in the free version — features must not be locked behind payment
7. **Screenshot** must be 1200 × 900 px PNG, showing the real theme design (not a mockup)
8. **`readme.txt`** must follow the exact WordPress.org format

## ThemeForest Compliance Rules

These rules determine approval and quality score:

1. **Documentation** in `documentation/` folder — full HTML docs required
2. **Demo XML** in `demo/` folder — importable demo content
3. **Code quality** — no PHP notices/warnings, proper escaping throughout
4. **Preview images** — main preview 590 × 300, thumbnail 590 × 590
5. **Changelog** in `readme.txt` AND `CHANGELOG.md` — keep in sync
6. **Version bump** in `style.css`, `readme.txt`, `CHANGELOG.md`, and `functions.php` on every release

## Keeping Context in Sync

Update the relevant context file whenever:

- A new pattern category is added → `architecture.md`
- A new design token is added to `theme.json` → `ui-context.md`
- A coding convention is established → `code-standards.md`
- A feature is completed → `progress-tracker.md`

## Before Marking a Pattern Complete

1. Pattern file header has: Title, Slug, Categories, Block Types, Viewport Width, Inserter
2. Slug follows `novai/{name}` format and is unique
3. All colors use `var:preset|color|{slug}` notation
4. Pattern renders without block validation errors in the editor
5. Pattern is visible in the correct category in the Pattern inserter

## Before Marking a Release Ready

1. Theme Check plugin — zero errors, zero warnings
2. Lighthouse test — all four metrics ≥ 95
3. WP_DEBUG enabled — zero PHP errors or notices
4. All patterns insert cleanly in a fresh WordPress install
5. Style variations display correctly in the Site Editor
6. `readme.txt` version matches `style.css` version matches `CHANGELOG.md`
7. `screenshot.png` reflects current design
8. Demo XML imports cleanly via the importer
