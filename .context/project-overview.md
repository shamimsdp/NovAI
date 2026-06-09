# NovAI — Project Overview

## Overview

NovAI is a production-ready WordPress Full Site Editing (FSE) block theme targeting AI startup founders, SaaS product teams, and developer-first companies. It ships as a commercially licensable product submitted to both **ThemeForest** (premium marketplace) and **WordPress.org** (free repository). The theme is built entirely on the native WordPress block system — no page builders, no custom blocks, no external JavaScript frameworks.

## Goals

1. **Achieve ThemeForest "Power Elite" quality bar** — pixel-perfect design, thorough documentation, demo content, and a polished purchase experience
2. **Pass WordPress.org theme review** — GPL v2 compliance, full accessibility (WCAG 2.1 AA), no obfuscation, correct text domain, proper escaping/sanitization throughout
3. **Deliver Lighthouse 95+ on all four metrics** — performance-first architecture with self-hosted fonts, deferred JS, and no render-blocking resources
4. **Provide three distinct niche starter templates** so buyers can launch within minutes without custom design work

## Core User Flow

1. Buyer purchases/downloads NovAI and installs via Appearance → Themes
2. Imports demo content via the one-click demo importer (optional plugin)
3. Opens Site Editor (Appearance → Editor) and selects a starter template
4. Customises colors, typography, and layout using the Global Styles panel
5. Inserts patterns from the 28-pattern library to build pages
6. Publishes their site

## Three Starter Templates

| Template  | Niche                    | Accent                | Background           | Persona       |
| --------- | ------------------------ | --------------------- | -------------------- | ------------- |
| **NovAI** | AI tooling / LLM SaaS    | `#6C47FF` Nova Purple | `#0D0B1A` Deep Space | AI founders   |
| **Orbit** | SaaS analytics dashboard | `#0EA5E9` Sky Blue    | `#03111F` Dark Navy  | SaaS PMs      |
| **Forge** | Developer tools / CLI    | `#EAB308` Amber       | `#0F0F0F` True Black | Developer OSS |

## Features

### Pattern Library (28 patterns, 7 categories)

- Navigation (3): dark, light, minimal
- Heroes (4): dark, split, light, code terminal
- Features (4): 3-column, alternating, stats, bento grid
- Social Proof (4): logo bar, 3-column testimonials, featured testimonial, stats bar
- Pricing & CTA (5): 3-column pricing, 2-column comparison, dark CTA, light CTA, waitlist
- Content (6): how-it-works steps, FAQ, code block, changelog, team grid, integrations
- Footer (2 + template parts): dark, minimal

### Style Variations (5)

Dark · Minimal · Vibrant · Corporate · Gradient

### Technical

- `theme.json` v3 with 16 color tokens, 9 fluid font sizes, 7 spacing sizes, 4 shadows
- Self-hosted Inter WOFF2 (no Google Fonts CDN)
- Zero jQuery dependency
- Deferred/async JS loading
- Full RTL support via WordPress core

## Scope

### In Scope

- All WordPress native block markup (no shortcodes, no custom blocks)
- FSE templates and template parts
- Block patterns registered via PHP file headers
- theme.json v3 design token system
- 5 style variation JSON files
- Supplemental CSS (transitions, hover states, print) in `assets/css/custom.css`
- Navigation JS (sticky header + scroll reveal) in `assets/js/navigation.js`
- Self-hosted Inter font files in `assets/fonts/`
- Demo XML for one-click import
- Languages `.pot` file for translators
- ThemeForest documentation HTML file
- WordPress.org `readme.txt`

### Out of Scope

- Custom Gutenberg blocks (plugin territory)
- WooCommerce template overrides (future version)
- Page builder compatibility (Elementor, Divi)
- Paid plugin dependencies

## Success Criteria

1. Theme activates on a clean WordPress 6.4+ install with zero PHP errors or warnings
2. All 28 patterns insert correctly in the block editor without validation errors
3. Theme passes `Theme Check` plugin with zero errors and zero warnings
4. Lighthouse scores ≥ 95 on Performance, Accessibility, Best Practices, SEO
5. ThemeForest review team approves without hard-reject
6. WordPress.org theme review passes on first or second submission
