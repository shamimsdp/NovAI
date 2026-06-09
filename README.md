<br/>

```
███╗   ██╗ ██████╗ ██╗   ██╗ █████╗ ██╗
████╗  ██║██╔═══██╗██║   ██║██╔══██╗██║
██╔██╗ ██║██║   ██║██║   ██║███████║██║
██║╚██╗██║██║   ██║╚██╗ ██╔╝██╔══██║██║
██║ ╚████║╚██████╔╝ ╚████╔╝ ██║  ██║██║
╚═╝  ╚═══╝ ╚═════╝   ╚═══╝  ╚═╝  ╚═╝╚═╝
```

**A production-ready WordPress FSE block theme for AI startup founders, SaaS teams, and developer-first companies**

[![Version](https://img.shields.io/badge/version-1.0.0-6C47FF?style=flat-square)](CHANGELOG.md)
[![WordPress](https://img.shields.io/badge/WordPress-6.4%2B-21759B?style=flat-square&logo=wordpress)](https://wordpress.org)
[![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?style=flat-square&logo=php&logoColor=white)](https://php.net)
[![Node](https://img.shields.io/badge/Node-20.x_LTS-339933?style=flat-square&logo=nodedotjs&logoColor=white)](https://nodejs.org)
[![License](https://img.shields.io/badge/license-GPL--2.0-green?style=flat-square)](LICENSE)
[![Lighthouse](https://img.shields.io/badge/Lighthouse-95%2B-F4A433?style=flat-square)](https://pagespeed.web.dev)
[![ThemeForest](https://img.shields.io/badge/ThemeForest-Ready-82B541?style=flat-square)](https://themeforest.net)
[![wp.org](https://img.shields.io/badge/WordPress.org-Ready-21759B?style=flat-square&logo=wordpress)](https://wordpress.org/themes/)

<br/>

[Features](#-features) · [Templates](#-starter-templates) · [Patterns](#-pattern-library) · [Quick Start](#-quick-start-local-wordpress) · [Installation](#-installation) · [Development](#-development) · [Submission](#-submission-notes)

<br/>

---

## Overview

NovAI is a lightning-fast, **Full Site Editing (FSE)** WordPress block theme with three niche-ready starter templates built for founders launching AI tools, SaaS analytics products, and developer-first companies.

Designed to pass both **ThemeForest quality review** and **WordPress.org theme review**, NovAI ships with a complete `theme.json` v3 design token system, a 28-pattern library, 5 style variations, and a fully self-hosted font stack — no Google Fonts, no jQuery, no page builder required.

---

## Features

|     | Feature                 | Detail                                                        |
| --- | ----------------------- | ------------------------------------------------------------- |
| ⚡  | **Lighthouse 95+**      | Performance, Accessibility, Best Practices, SEO               |
| 🎨  | **theme.json v3**       | 16 colors · 9 fluid type sizes · 7 spacing sizes · 4 shadows  |
| 🧩  | **28 Block Patterns**   | 7 categories — drag and drop to build any page                |
| 🖼  | **5 Style Variations**  | Dark · Minimal · Vibrant · Corporate · Gradient               |
| 🚀  | **3 Starter Templates** | NovAI · Orbit · Forge — complete page sets per niche          |
| 🔤  | **Self-Hosted Fonts**   | Inter WOFF2 bundled — zero CDN, GDPR-clean                    |
| ♿  | **WCAG 2.1 AA**         | Accessible markup, skip links, focus states, landmark regions |
| 🌍  | **Translation Ready**   | `.pot` file included · text-domain: `novai`                   |
| 📱  | **Responsive**          | Mobile-first, fluid type scale via `clamp()`                  |
| 🛒  | **WooCommerce Ready**   | Compatible (full template overrides in v1.1)                  |
| 🔒  | **Security Hardened**   | Escaped output, no external calls, no obfuscation             |
| 🤖  | **AI-Assisted Dev**     | GitHub Copilot agents + skills pre-configured                 |

---

## Starter Templates

### NovAI — AI Tooling

> Deep Space · Nova Purple · Inter

The flagship template for AI product launches. Features a dark, immersive design with a terminal-style hero, feature bento grid, 3-column pricing, FAQ accordion, and a full-width CTA section.

```
Background: #0D0B1A  Surface: #1E1A38  Accent: #6C47FF  Text: #F7F6FE
```

### Orbit — SaaS Analytics

> Dark Navy · Sky Blue · Inter

Analytics dashboard aesthetic for SaaS companies. Clean data-display layouts, statistics bar, feature comparisons, logo grid, and a waitlist / early-access CTA.

```
Background: #03111F  Surface: #0B2133  Accent: #38BDF8  Text: #F0F9FF
```

### Forge — Developer Tools

> True Black · Amber · System Mono

Monospace-driven developer tool aesthetic. Code blocks, terminal mockups, changelog pattern, integration grid, and a minimal single-row footer.

```
Background: #0F0F0F  Surface: #1A1A1A  Accent: #EAB308  Text: #FAFAFA
```

---

## Pattern Library

**28 patterns · 7 categories**

| Category      | Count | Patterns                                                                        |
| ------------- | ----- | ------------------------------------------------------------------------------- |
| Navigation    | 3     | `nav-dark` · `nav-light` · `nav-minimal`                                        |
| Heroes        | 4     | `hero-dark` · `hero-split` · `hero-light` · `hero-code`                         |
| Features      | 4     | `features-3col` · `features-alt` · `features-bento` · `features-stats`          |
| Social Proof  | 4     | `logos` · `testimonials-3col` · `testimonial-featured` · `team`                 |
| Pricing & CTA | 5     | `pricing-3col` · `pricing-2col` · `cta-dark` · `cta-light` · `waitlist`         |
| Content       | 6     | `how-steps` · `faq` · `code-block` · `changelog` · `integrations` · `stats-bar` |
| Footer & Misc | 3     | `footer-dark` · `footer-minimal` · `banner`                                     |

Access all patterns in **Appearance → Editor → Patterns** or via the block inserter (**+** icon).

---

## Style Variations

Switch the entire color scheme in one click via **Appearance → Editor → Styles → Browse Styles**.

| Variation            | Background                     | Feel                          |
| -------------------- | ------------------------------ | ----------------------------- |
| **Dark** _(default)_ | `#0D0B1A` Deep Space           | Flagship NovAI template       |
| **Minimal**          | `#F7F6FE` Lavender White       | Clean light mode              |
| **Vibrant**          | `#6C47FF` → `#38BDF8` gradient | Bold gradient hero            |
| **Corporate**        | `#FFFFFF` White                | Professional, approachable    |
| **Gradient**         | `#0D0B1A` + glow overlays      | Dark with radial accent glows |

---

## Requirements

| Requirement    | Minimum    | Recommended                   |
| -------------- | ---------- | ----------------------------- |
| WordPress      | 6.4        | 6.6+                          |
| PHP            | 8.0        | 8.2+                          |
| Node.js        | 20.x LTS   | 20.11.1                       |
| Docker Desktop | 24+        | Latest                        |
| Browser        | Any modern | Chrome, Firefox, Safari, Edge |

> Node.js and Docker are **dev-only** requirements for the local environment. Production servers only need WordPress + PHP.

---

## ⚡ Quick Start — Local WordPress

NovAI uses **`wp-env`** — WordPress's official zero-dependency local environment. No XAMPP, WAMP, or LocalWP needed.

### Prerequisites

1. **Node.js 20 LTS** — [nodejs.org](https://nodejs.org/en/download) or via nvm:

    ```powershell
    nvm install 20.11.1
    nvm use 20.11.1
    ```

2. **Docker Desktop** — [docker.com/products/docker-desktop](https://www.docker.com/products/docker-desktop/)
    - Install and launch Docker Desktop
    - Wait for the whale icon in the taskbar to turn solid white (engine running)

### First-Time Setup

```powershell
# 1. Clone the repo (or open the existing folder)
cd d:\app\NovAI

# 2. Install dependencies (includes @wordpress/env)
npm install

# 3. Start WordPress — first run downloads WP 6.6 + PHP 8.2 images (~500 MB)
npm run env:start
```

WordPress is now live at:

| URL                                | Credentials          |
| ---------------------------------- | -------------------- |
| **http://localhost:8888**          | Site frontend        |
| **http://localhost:8888/wp-admin** | `admin` / `password` |

NovAI is automatically activated — no manual theme activation needed.

### Daily Workflow

```powershell
# Start local WordPress
npm run env:start

# Stop containers (preserves database)
npm run env:stop

# Completely reset — wipes database, fresh install
npm run env:clean

# Tail WordPress/PHP logs
npm run env:logs
```

### What `.wp-env.json` Configures

| Setting        | Value                                   |
| -------------- | --------------------------------------- |
| WordPress      | 6.6                                     |
| PHP            | 8.2                                     |
| Theme          | Current folder (NovAI auto-activated)   |
| `WP_DEBUG`     | `true`                                  |
| `WP_DEBUG_LOG` | `true` (logs to `wp-content/debug.log`) |
| `SCRIPT_DEBUG` | `true`                                  |

### Troubleshooting wp-env

**Docker not running:**

```powershell
# Start Docker Desktop first, wait for system tray icon, then:
npm run env:start
```

**Port 8888 already in use:**

```json
// Add to .wp-env.json
{ "port": 9999, "testsPort": 9998 }
```

**Reset completely:**

```powershell
npm run env:clean
npm run env:start
```

**Node version issues (Windows + nvm):**

```powershell
# Run as Administrator
nvm use 20.11.1
# Then close and reopen VS Code terminal
```

---

## Installation

## Start WordPress

```
    npm run env:start
    # or directly:
    wp-env start
```

## Useful commands

```
    npm run env:stop    # stop containers
    npm run env:clean   # wipe database (fresh install)
    npm run env:logs    # tail WordPress/PHP logs
    npm run pot         # regenerate languages/novai.pot

    npm run build        # Build CSS and JS assets
    npm run watch        # Watch for changes and rebuild
    npm run env:stop     # Stop the local development environment
    npm run env:reset    # Stop and remove the local development environment
```

### From WordPress Dashboard

```
Appearance → Themes → Add New → Upload Theme → select novai.zip → Install → Activate
```

### From WP-CLI

```bash
wp theme install novai.zip --activate
```

### Manual Upload

1. Extract `novai.zip` into `/wp-content/themes/novai/`
2. Go to **Appearance → Themes** → Activate **NovAI**

### Import Demo Content _(optional — ThemeForest)_

1. Install and activate [WP All Import](https://wordpress.org/plugins/wp-all-import/)
2. Go to **All Import → New Import**
3. Upload `demo/content.xml` from the theme package
4. Follow the import wizard

---

## File Structure

```
novai/
├── .context/                    # AI context files — Six-File Methodology
│   ├── project-overview.md      # Goals, templates, feature list
│   ├── architecture.md          # File boundaries, token system
│   ├── code-standards.md        # PHP, JS, CSS, pattern rules
│   ├── ui-context.md            # Color tokens, type/spacing scales
│   ├── progress-tracker.md      # Current build status
│   ├── ai-workflow-rules.md     # Scoping rules, protected files
│   └── full-feature-list.md     # Complete feature inventory ✅/❌/⏳
├── .github/
│   ├── copilot-instructions.md  # GitHub Copilot repo instructions
│   ├── agents/                  # Copilot agent definitions
│   │   ├── theme-developer.md   # Build/fix templates, theme.json, CSS, JS
│   │   ├── pattern-builder.md   # Create/fix block patterns
│   │   └── wp-reviewer.md       # WP.org + ThemeForest compliance audit
│   └── skills/                  # Copilot skill knowledge files
│       ├── wp-block-theme.md    # FSE/theme.json deep knowledge
│       ├── novai-patterns.md    # NovAI token map, pattern templates
│       ├── ui-ux-pro-max.md     # Design excellence principles
│       ├── wordpress-penetration-testing.md  # Security checklist
│       └── wordpress-plugin-core.md          # WP APIs and hooks
├── assets/
│   ├── css/
│   │   ├── custom.css           # Supplemental CSS (transitions, hover states)
│   │   └── editor.css           # Block editor dark-mode parity
│   ├── fonts/inter/             # Self-hosted Inter WOFF2 files
│   ├── images/                  # screenshot.png (1200×900) + previews
│   └── js/
│       └── navigation.js        # Sticky header + scroll reveal (vanilla JS)
├── demo/
│   └── content.xml              # One-click demo content import
├── documentation/               # ThemeForest HTML documentation
│   └── index.html
├── inc/
│   ├── block-patterns.php       # Pattern category registration
│   ├── font-preload.php         # WOFF2 <link rel="preload"> injection
│   └── performance.php          # Emoji, oEmbed, query string removal
├── languages/
│   └── novai.pot                # i18n translation template
├── parts/
│   ├── header.html              # Sticky dark navigation
│   └── footer.html              # 4-column footer, newsletter, legal
├── patterns/                    # 28 block pattern PHP files (auto-registered)
├── styles/                      # 5 style variation JSON files
├── templates/                   # 7 page template HTML files
├── .nvmrc                       # Pins Node 20.11.1 for this project
├── .wp-env.json                 # wp-env local WordPress config
├── CHANGELOG.md
├── LICENSE
├── README.md                    # This file
├── functions.php
├── index.php
├── package.json                 # npm scripts + devDependencies
├── readme.txt                   # WordPress.org readme
├── style.css                    # Theme header
└── theme.json                   # Single source of design truth
```

---

## Development

### npm Scripts

| Command             | Description                          |
| ------------------- | ------------------------------------ |
| `npm run env:start` | Start local WordPress (Docker)       |
| `npm run env:stop`  | Stop containers                      |
| `npm run env:clean` | Wipe database and restart fresh      |
| `npm run env:logs`  | Tail WordPress/PHP error logs        |
| `npm run pot`       | Regenerate `languages/novai.pot`     |
| `npm run zip`       | Package `novai.zip` for distribution |

### WP-CLI Commands (run inside wp-env)

```powershell
# Open a shell inside the WordPress container
npx wp-env run cli bash

# Or prefix any wp command directly
npx wp-env run cli wp <command>
```

```bash
# Validate all block patterns
wp block-pattern list

# List registered template parts
wp template list --type=wp_template_part

# Check for PHP errors
wp eval "echo 'PHP OK';"

# Regenerate translation template
wp i18n make-pot . languages/novai.pot --domain=novai

# Activate theme (if not auto-activated)
wp theme activate novai

# Install Theme Check plugin and run it
wp plugin install theme-check --activate
```

### Design Token System

All design values live in `theme.json`. Reference tokens correctly:

| Context              | Example                                 |
| -------------------- | --------------------------------------- |
| Block JSON attribute | `"var:preset\|color\|nova-purple"`      |
| CSS `var()`          | `var(--wp--preset--color--nova-purple)` |
| Spacing in JSON      | `"var:preset\|spacing\|2xl"`            |
| Font size in JSON    | `"var:preset\|font-size\|3xl"`          |
| Shadow in JSON       | `"var:preset\|shadow\|card"`            |

**Never** hardcode hex values, pixel sizes, or font names inside patterns or CSS — always use tokens.

### Extending the Design System

```json
// Add a new color in theme.json → settings.color.palette
{ "slug": "my-color", "color": "#hexvalue", "name": "My Color" }

// Use in block pattern JSON
"style": { "color": { "background": "var:preset|color|my-color" } }

// Use in CSS
.my-element { color: var(--wp--preset--color--my-color); }
```

### AI-Assisted Development (GitHub Copilot)

This project ships with pre-configured Copilot agents and skills. In VS Code Copilot Chat:

```
@theme-developer   Build/fix templates, theme.json, CSS, JS
@pattern-builder   Create or fix block patterns
@wp-reviewer       Audit code for WP.org + ThemeForest compliance
```

Skills auto-load when working on matching file types:

- `wp-block-theme.md` — FSE/theme.json/pattern authoring
- `novai-patterns.md` — Token map, canonical pattern templates
- `ui-ux-pro-max.md` — Design excellence, component standards
- `wordpress-penetration-testing.md` — Security escaping checklist
- `wordpress-plugin-core.md` — WP hooks, APIs, coding standards

### Packaging for Distribution

```powershell
# Creates novai.zip excluding dev files
npm run zip

# Manual — equivalent command
Compress-Archive -Path . -DestinationPath ..\novai.zip -Force
```

Files excluded from the release ZIP:
`.git/` · `.context/` · `.github/` · `.vscode/` · `node_modules/` · `.nvmrc` · `.wp-env.json`

---

## Submission Notes

### WordPress.org

- **Tags** (max 5 from approved list): `full-site-editing`, `block-patterns`, `custom-colors`, `custom-fonts`, `wide-blocks`
- **Text domain**: `novai` — matches theme folder name exactly
- **License**: GPL v2 or later
- **Inter font**: SIL Open Font License 1.1 (GPL-compatible)
- **No external HTTP calls** — all assets self-hosted
- **Screenshot**: `screenshot.png` at theme root, 1200×900 px PNG

### ThemeForest

- **Documentation**: `documentation/index.html` — full installation and usage guide
- **Demo import**: `demo/content.xml` — covers all three starter templates
- **Preview image**: 590×300 px (main) · 590×590 px (thumbnail)
- **Changelog sync**: `CHANGELOG.md` and `readme.txt` must match on every release

### Pre-Submission Checklist

```
WordPress.org
[ ] style.css — all required header fields present
[ ] readme.txt — correct WordPress.org format
[ ] screenshot.png — 1200×900 at theme root
[ ] No external HTTP calls in any file
[ ] All PHP strings use text domain 'novai'
[ ] All PHP output is escaped
[ ] All functions/constants prefixed novai_
[ ] Inter WOFF2 font files in assets/fonts/inter/
[ ] languages/novai.pot up to date
[ ] Theme Check plugin — zero errors, zero warnings

ThemeForest
[ ] documentation/index.html — complete
[ ] demo/content.xml — imports cleanly on fresh WP install
[ ] CHANGELOG.md matches readme.txt changelog
[ ] Preview images — 590×300 and 590×590
[ ] Version synced across style.css, functions.php, readme.txt

Quality Gates
[ ] Lighthouse ≥ 95 on all four metrics
[ ] WP_DEBUG=true — zero PHP errors, notices, or warnings
[ ] All 28 patterns insert without block validation errors
[ ] All 5 style variations render in Site Editor
[ ] Mobile responsive at 320px, 768px, 1280px
[ ] WCAG 2.1 AA contrast verified across all style variations
```

---

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for full version history.

### v1.0.0 — 2026-06-09

- Initial release
- Three starter templates: NovAI, Orbit, Forge
- 28 block patterns across 7 categories
- 5 style variations (Dark, Minimal, Vibrant, Corporate, Gradient)
- `theme.json` v3 full design token system (16 colors, 9 type sizes, 7 spacing sizes, 4 shadows)
- Self-hosted Inter font (400, 600 weight WOFF2)
- Supplemental CSS + vanilla JS navigation
- `wp-env` local development environment
- GitHub Copilot agents and skills pre-configured

---

## License

NovAI is licensed under the **GNU General Public License v2.0 or later**.

```
NovAI WordPress Theme
Copyright (C) 2026 NovAI

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.
```

Inter Font is licensed under the **SIL Open Font License 1.1**.  
Copyright 2020 The Inter Project Authors · [rsms.me/inter](https://rsms.me/inter/)

---

<div align="center">

Built for WordPress founders · GPL v2 · [novai.example.com](https://novai.example.com)

</div>

---

## Features

|     | Feature                 | Detail                                                       |
| --- | ----------------------- | ------------------------------------------------------------ |
| ⚡  | **Lighthouse 95+**      | Performance, Accessibility, Best Practices, SEO              |
| 🎨  | **theme.json v3**       | 16 colors · 9 fluid type sizes · 7 spacing sizes · 4 shadows |
| 🧩  | **28 Block Patterns**   | 7 categories — drag and drop to build any page               |
| 🖼  | **5 Style Variations**  | Dark · Minimal · Vibrant · Corporate · Gradient              |
| 🚀  | **3 Starter Templates** | NovAI · Orbit · Forge — complete page sets                   |
| 🔤  | **Self-Hosted Fonts**   | Inter WOFF2 bundled — zero CDN, GDPR-clean                   |
| ♿  | **WCAG 2.1 AA**         | Accessible markup, focus states, skip links                  |
| 🌍  | **Translation Ready**   | `.pot` file included · `text-domain: novai`                  |
| 📱  | **Responsive**          | Mobile-first, fluid type scale via `clamp()`                 |
| 🛒  | **WooCommerce Ready**   | Compatible (template overrides in v1.1)                      |

---

## Starter Templates

### NovAI — AI Tooling

> Deep Space · Nova Purple · Inter

The flagship template for AI product launches. Features a dark, immersive design with a terminal-style hero, feature bento grid, 3-column pricing, FAQ, and a full-width CTA.

```
Background: #0D0B1A  Accent: #6C47FF  Text: #F7F6FE
```

### Orbit — SaaS Analytics

> Dark Navy · Sky Blue · Inter

Analytics dashboard aesthetic for SaaS companies. Clean data-display layouts, stat bars, feature comparisons, and a waitlist / early-access CTA.

```
Background: #03111F  Accent: #0EA5E9  Text: #F0F9FF
```

### Forge — Developer Tools

> True Black · Amber · System Mono

Monospace-driven developer tool aesthetic. Code blocks, terminal mockups, changelog pattern, integration grid, and a minimal single-row footer.

```
Background: #0F0F0F  Accent: #EAB308  Text: #FAFAFA
```

---

## Pattern Library

**28 patterns · 7 categories**

| Category      | Count | Patterns                                                       |
| ------------- | ----- | -------------------------------------------------------------- |
| Navigation    | 3     | Dark nav, Light nav, Minimal nav                               |
| Heroes        | 4     | Dark, Split, Light, Code terminal                              |
| Features      | 4     | 3-column, Alternating, Stats + features, Bento grid            |
| Social Proof  | 4     | Logo bar, 3-col testimonials, Featured testimonial, Stats bar  |
| Pricing & CTA | 5     | 3-col pricing, 2-col comparison, Dark CTA, Light CTA, Waitlist |
| Content       | 6     | How-it-works, FAQ, Code block, Changelog, Team, Integrations   |
| Footer        | 2     | Dark footer, Minimal footer                                    |

All patterns are available in **Appearance → Editor → Patterns** or via the block inserter.

---

## Style Variations

Switch between complete color schemes in one click via **Appearance → Editor → Styles**.

| Variation            | Background                     | Feel                           |
| -------------------- | ------------------------------ | ------------------------------ |
| **Dark** _(default)_ | `#0D0B1A` Deep Space           | Flagship dark — NovAI template |
| **Minimal**          | `#F7F6FE` Lavender White       | Clean light mode               |
| **Vibrant**          | `#6C47FF` → `#38BDF8` gradient | Bold gradient hero             |
| **Corporate**        | `#FFFFFF` White                | Professional, approachable     |
| **Gradient**         | `#0D0B1A` + glow overlays      | Dark with radial accents       |

---

## Requirements

- **WordPress**: 6.4 or higher (6.6 recommended)
- **PHP**: 8.0 or higher
- **Browser**: Any modern browser (Chrome, Firefox, Safari, Edge)
- **Plugins**: None required. Optional: [WP All Import](https://wordpress.org/plugins/wp-all-import/) for demo content

---

## Installation

### From WordPress Dashboard

```
Appearance → Themes → Add New → Upload Theme → select novai.zip → Install → Activate
```

### From WP-CLI

```bash
wp theme install novai.zip --activate
```

### Manual

1. Extract `novai.zip` into `/wp-content/themes/novai/`
2. In WordPress admin: **Appearance → Themes → Activate NovAI**

### Import Demo Content _(optional)_

1. Install and activate the **WP All Import** plugin
2. Go to **Tools → Import → WP All Import**
3. Upload `demo/content.xml`
4. Follow the import wizard

---

## File Structure

```
novai/
├── .context/                    # AI development context (Six-File Methodology)
│   ├── project-overview.md
│   ├── architecture.md
│   ├── code-standards.md
│   ├── progress-tracker.md
│   ├── ui-context.md
│   └── ai-workflow-rules.md
├── .github/
│   ├── copilot-instructions.md  # GitHub Copilot repo instructions
│   └── prompts/                 # AI agent prompts
├── .vscode/                     # VS Code workspace settings
├── assets/
│   ├── css/
│   │   ├── custom.css           # Supplemental CSS (transitions, hovers)
│   │   └── editor.css           # Block editor dark-mode parity
│   ├── fonts/
│   │   ├── inter-400.woff2      # Self-hosted Inter Regular
│   │   └── inter-600.woff2      # Self-hosted Inter SemiBold
│   ├── images/
│   │   └── screenshot.png       # Theme screenshot (1200×900)
│   └── js/
│       └── navigation.js        # Sticky header + scroll reveal
├── demo/
│   └── content.xml              # One-click demo import
├── documentation/               # ThemeForest HTML docs
├── inc/
│   ├── block-patterns.php       # Pattern category registration
│   ├── font-preload.php         # WOFF2 preload link tags
│   └── performance.php          # Asset optimisation hooks
├── languages/
│   └── novai.pot                # Translation template
├── parts/
│   ├── header.html              # Sticky dark navigation
│   └── footer.html              # 4-column footer
├── patterns/                    # 28 block patterns (auto-registered)
├── styles/                      # 5 style variation JSON files
├── templates/                   # 7 page templates
├── CHANGELOG.md
├── LICENSE
├── README.md                    # This file
├── functions.php
├── index.php
├── readme.txt                   # WordPress.org readme
├── style.css                    # Theme header
└── theme.json                   # Design token system
```

---

## Development

### Prerequisites

```bash
# PHP 8.0+ and WordPress CLI
wp --version

# Local environment (choose one)
# LocalWP · XAMPP · Laragon · wp-env · Lando
```

### Setup

```bash
# Clone into your themes directory
git clone https://github.com/your-org/novai.git /path/to/wp-content/themes/novai

# Or link for development
ln -s /path/to/novai /path/to/wp-content/themes/novai
```

### Key Commands

```bash
# Check for PHP errors (with WP_DEBUG=true in wp-config.php)
wp eval "trigger_error('test');"

# Validate block patterns
wp block-pattern list

# List registered template parts
wp template list --type=wp_template_part

# Run Theme Check (after installing plugin)
wp eval "do_action('init'); echo apply_filters('theme_check_run', '');"

# Generate translation template
wp i18n make-pot . languages/novai.pot --domain=novai

# Package for distribution (excludes dev files)
zip -r novai.zip . \
  --exclude "*.git*" \
  --exclude ".context/*" \
  --exclude ".vscode/*" \
  --exclude ".github/*" \
  --exclude "node_modules/*" \
  --exclude "*.DS_Store"
```

### Design Tokens

All design decisions live in `theme.json`. To extend:

```json
// Add a color
{ "slug": "my-color", "color": "#hexvalue", "name": "My Color" }

// Use in patterns
"style": { "color": { "background": "var:preset|color|my-color" } }

// Use in CSS
var(--wp--preset--color--my-color)
```

---

## Submission Notes

### WordPress.org

- Tags: `full-site-editing`, `block-patterns`, `custom-colors`, `custom-fonts`, `wide-blocks`  
  _(Max 5 official tags from the approved list)_
- Text domain: `novai` (matches theme folder name)
- License: GPL v2 or later
- Inter font: SIL Open Font License 1.1 (GPL-compatible)
- No external HTTP calls — all assets self-hosted
- Screenshot: `assets/images/screenshot.png` at 1200 × 900 px

### ThemeForest

- Documentation: `documentation/index.html`
- Demo import: `demo/content.xml`
- Preview image: 590 × 300 main · 590 × 590 thumbnail
- Changelog: Keep `CHANGELOG.md` and `readme.txt` in sync

### Pre-Submission Checklist

```
[ ] Theme Check plugin — zero errors, zero warnings
[ ] Lighthouse — all four metrics ≥ 95
[ ] WP_DEBUG=true — zero PHP errors or notices
[ ] All 28 patterns insert cleanly in a fresh WP install
[ ] All 5 style variations render in Site Editor
[ ] readme.txt version matches style.css version
[ ] screenshot.png is current (1200×900 PNG)
[ ] Inter WOFF2 font files present in assets/fonts/
[ ] Demo XML imports cleanly
```

---

## Changelog

See [CHANGELOG.md](CHANGELOG.md) for full version history.

### v1.0.0 — 2026-06-09

- Initial release
- Three starter templates: NovAI, Orbit, Forge
- 28 block patterns across 7 categories
- 5 style variations
- theme.json v3 full design token system
- Self-hosted Inter font (400, 600)
- Supplemental CSS + navigation JS

---

## License

NovAI is licensed under the **GNU General Public License v2.0 or later**.

```
NovAI WordPress Theme
Copyright (C) 2026 NovAI

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.
```

Inter Font is licensed under the **SIL Open Font License 1.1**.  
Copyright 2020 The Inter Project Authors · [rsms.me/inter](https://rsms.me/inter/)

---

<div align="center">

Built for WordPress founders · GPL v2 · [novai.example.com](https://novai.example.com)

</div>
