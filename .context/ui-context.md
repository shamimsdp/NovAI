# UI Context

## Theme

Dark-first design language. The default style is "deep space" — near-black backgrounds, layered dark surfaces, and vivid purple/violet accents for interactive elements. Light mode is available as a style variation ("Minimal", "Corporate") but the design is conceived dark-first. All three starter templates have their own color identity but share the same typographic rhythm and spatial scale.

## Color Tokens

All colors must use WordPress preset tokens — no hardcoded hex values in patterns, templates, or CSS.

| Role              | WP Token         | Hex                     | Usage                     |
| ----------------- | ---------------- | ----------------------- | ------------------------- |
| Page background   | `nova` primary   | `#0D0B1A`               | Body background           |
| Surface (card bg) | `nebula`         | `#1E1A38`               | Cards, modals, nav        |
| Surface raised    | `surface-dark`   | `#2A2550`               | Hover states, highlights  |
| Primary accent    | `nova-purple`    | `#6C47FF`               | CTAs, links, focus rings  |
| Accent light      | `stellar-violet` | `#A78BFA`               | Hover states, icons       |
| Secondary accent  | `orbit-blue`     | `#38BDF8`               | Secondary highlights      |
| Amber (Forge)     | `forge-amber`    | `#EAB308`               | Forge template only       |
| Body text         | `cloud-white`    | `#F7F6FE`               | Primary text              |
| Secondary text    | `text-secondary` | `#C5BEE8`               | Subtitles, labels         |
| Muted text        | `text-muted`     | `#8B83C4`               | Captions, footnotes       |
| Borders           | `border-subtle`  | `rgba(108,71,255,0.15)` | Via `--novai-border-sm`   |
| White             | `white`          | `#FFFFFF`               | Override on dark surfaces |
| Black             | `black`          | `#000000`               | Absolute dark             |
| Success           | `success`        | `#22C55E`               | Status indicators         |
| Error/Danger      | `danger`         | `#EF4444`               | Error states              |
| Warning           | `warning`        | `#F59E0B`               | Warning badges            |

### Template-Specific Palettes

**NovAI Template** — Deep Space

- Background: `#0D0B1A`, Surface: `#1E1A38`, Accent: `#6C47FF`

**Orbit Template** — Dark Navy

- Background: `#03111F`, Surface: `#0B2133`, Accent: `#0EA5E9` / `#38BDF8`

**Forge Template** — True Black

- Background: `#0F0F0F`, Surface: `#1A1A1A`, Accent: `#EAB308`

## Typography

| Role                 | Font        | WP Token                                      | Fallback              |
| -------------------- | ----------- | --------------------------------------------- | --------------------- |
| UI / body / headings | Inter       | `var(--wp--preset--font-family--inter)`       | system-ui, sans-serif |
| Code / mono          | System mono | `var(--wp--preset--font-family--system-mono)` | Menlo, Consolas       |

### Type Scale (fluid)

| Slug   | Min  | Max  | Usage                   |
| ------ | ---- | ---- | ----------------------- |
| `xs`   | 11px | 12px | Labels, captions, legal |
| `sm`   | 13px | 14px | Body small, meta        |
| `base` | 15px | 16px | Body text               |
| `md`   | 17px | 18px | Lead text               |
| `lg`   | 19px | 22px | Subheadings             |
| `xl`   | 24px | 28px | Section headings        |
| `2xl`  | 30px | 36px | Page headings           |
| `3xl`  | 40px | 52px | Hero headings           |
| `4xl`  | 52px | 72px | Display / hero large    |
| `5xl`  | 64px | 96px | Oversized display       |

## Spacing Scale

| Slug  | Value | Usage                        |
| ----- | ----- | ---------------------------- |
| `xs`  | 8px   | Tight gaps, inner padding    |
| `sm`  | 16px  | Component inner padding      |
| `md`  | 24px  | Between related elements     |
| `lg`  | 48px  | Section sub-gaps             |
| `xl`  | 64px  | Small section padding        |
| `2xl` | 96px  | Standard section padding     |
| `3xl` | 128px | Hero / large section padding |

## Shadows

| Slug          | Usage                     |
| ------------- | ------------------------- |
| `card`        | Default card elevation    |
| `card-hover`  | Card hover elevation      |
| `glow-purple` | CTA buttons, accent cards |
| `glow-blue`   | Orbit template highlights |

## Border Radius

| Context              | Value   |
| -------------------- | ------- |
| Small (tags, badges) | `6px`   |
| Cards, inputs        | `12px`  |
| Large panels         | `16px`  |
| Pill buttons         | `999px` |
| Circular avatars     | `50%`   |

## Component Patterns

### Cards

Dark surface (`#1E1A38`), `border: 1px solid rgba(108,71,255,0.15)`, `border-radius: 12px`, hover: `translateY(-3px)` + stronger border. Transition: `200ms ease`.

### Buttons

- **Primary**: `background: #6C47FF`, white text, `border-radius: 10px`, hover: `translateY(-1px)` + `box-shadow: glow-purple`
- **Ghost**: transparent bg, `border: 1px solid rgba(255,255,255,0.2)`, white text, hover: border brightens
- **Minimal**: text-only link style

### Navigation

Sticky, `backdrop-filter: blur(16px)`, subtle bottom border, site logo left, nav links center/right, CTA buttons right.

### Section Layout

All sections: `padding-top: var(--wp--preset--spacing--2xl)`, `padding-bottom: var(--wp--preset--spacing--2xl)`. Max content width: `1200px`. Narrow content (articles): `760px`.

### Gradient Accents

Radial glow blobs behind hero sections via `::before` pseudo-element. Two overlapping radials: purple (20% 50%) and blue (80% 20%).

## Layout Patterns

- **Full-width sections**: `layout.type: "constrained"` with `wideSize: "1200px"` in block attributes
- **Wide blocks** (images, code windows): `align: "wide"` exceeds content width but stays within outer container
- **Full-bleed** backgrounds: `layout.type: "default"` with explicit width on the inner constrained group
- **Columns**: WordPress `core/columns` with explicit `width` percentages on each column
- **Bento grid**: nested columns with varying heights achieved via `minHeight` on individual cells

## Icons

No icon library bundled. Icons in patterns use:

- Unicode symbols for simple cases (✓, →, ×)
- SVG inline via HTML `<svg>` inside paragraph blocks (kept minimal)
- WordPress Dashicons are never used in frontend patterns (backend-only)
