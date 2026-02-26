# KD Tree Service Theme (Block Theme / FSE)

A performance-first **WordPress Block Theme (Full Site Editing)** for **KD Tree Service**.

## Goals
- Build a clean, premium UI using brand colors:
  - Primary: `#02771e`
  - Accent: `#8ec740`
- Use **Block Theme (FSE)** structure:
  - Templates and template parts are **`.html`**
  - Global styles managed via `theme.json`
- Keep the theme focused on **presentation** (UI/layout/styles/patterns).
- Functionality (CPT, routing, ZIP detector, mega menu data, etc.) lives in the plugin repo.

## Requirements
- WordPress 6.4+ (recommended)
- PHP 8.0+
- Plugin: **kd-tree-service-core** (for locations, routing, ZIP detector, mega menu data)

## Folder Structure (theme folder)
This theme is located in:

`wp-content/themes/kd-tree-service/`

Key folders:
- `templates/` – site templates (**.html**)
- `parts/` – header/footer (**.html**)
- `patterns/` – registered block patterns (**.php**)
- `assets/` – CSS/JS/SVG/fonts (keep minimal)
- `languages/` – translations

## Templates
- `templates/index.html` – fallback template
- `templates/front-page.html` – home layout (optional)
- `templates/page.html` – default pages
- `templates/single.html` – default single
- `templates/archive.html` – default archive
- `templates/404.html` – not found
- `templates/single-service-location.html` – location single
- `templates/archive-service-location.html` – locations archive/hub

## Design Notes
Header must include:
- One phone CTA area (phone number + Call Now button) – no duplicates
- USA/CA switcher (SVG icons + chevron)
- ZIP code detector UI
- Locations mega menu (State → Cities)

Footer must include:
- ZIP code detector UI
- Service areas + locations links

Floating UI:
- Back to Top + Chat/Get Quote buttons (lightweight)

## Development (recommended)
Use Docker local environment from the workspace repo (or your own docker-compose).

### Quick install (manual)
1. Copy `kd-tree-service/` into `wp-content/themes/`
2. Activate the theme in **Appearance → Themes**
3. Activate `kd-tree-service-core` plugin

## Versioning & Updates
- Bump theme version in `style.css`
- Tag releases in GitHub (e.g. `v1.0.1`)
- Use **Git Updater** (or similar) on the site to pull updates via WP dashboard.

## Coding Standards
All code must follow:
- WordPress Coding Standards (PHP, HTML, CSS, JS)
- Accessibility best practices

## License
Add the chosen license here (e.g. GPL-2.0-or-later).