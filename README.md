# Bizmend WordPress Theme

This repository contains the Bizmend WordPress theme used by the Local WP site. It includes theme templates, PHP utilities, and a small frontend build setup for Tailwind CSS and PostCSS.

## Quick overview

- Theme root: the files in this folder are the theme (PHP templates, `functions.php`, etc).
- Frontend source files are under `src/` (Tailwind input at `src/css/input.css`, JS in `src/js`).
- Build outputs: `src/css/main.css` is the compiled Tailwind CSS used by the theme.

## Requirements

- Node.js (16+ recommended) and npm for building the CSS assets.
- Local WordPress environment (Local by Flywheel, XAMPP, MAMP, Docker, etc.) to run the theme.

## Install dependencies

Open a terminal in the theme directory and run:

```powershell
npm install
```

This will install TailwindCSS, PostCSS and related developer dependencies declared in `package.json`.

## Development

- Watch for changes and rebuild Tailwind CSS automatically:

```powershell
npm run watch
```

This command compiles `src/css/input.css` to `src/css/main.css` and watches for changes.

## Production build

To produce a minified production CSS file:

```powershell
npm run prod
```

Or the non-minified one-off build:

```powershell
npm run build
```

## Theme activation (WordPress)

1. Copy or ensure this theme folder is placed at `wp-content/themes/bizmend` in your WordPress installation.
2. In the WordPress admin go to Appearance → Themes and activate “Bizmend”.
3. Visit the site front-end to verify styles are applied. If styles look missing, ensure `src/css/main.css` exists (run the build step above).

## File structure (important files)

- `index.php`, `header.php`, `footer.php`, `functions.php` — core theme files.
- `inc/` — assorted PHP includes (ACF integration, enqueue scripts, admin helpers).
- `src/css/` — `input.css` (Tailwind source) and `main.css` (compiled output).
- `src/js/` — theme JS including `main.js` and `mobile-menu.js`.
- `template-parts/` — reusable template partials.

## Common tasks

- Lint/Format CSS: handled implicitly by the Tailwind/PostCSS toolchain when configured.
- Add new Tailwind utility classes: edit `src/css/input.css` and re-run the watcher.

## Troubleshooting

- If Tailwind commands fail, confirm Node.js and npm are installed and available in your PATH.
- If the CSS is not updating on the front-end, clear any server-side caches and browser cache.
- If PHP errors appear, check the `inc/` folder for recent changes or missing dependencies (ACF is bundled under `inc/acf`).

## Contributing

If you plan to modify the theme:

1. Create a branch for your change.
2. Keep PHP changes backward-compatible for deployments.
3. Run the build step for updated CSS before testing in WordPress.

## License

See the `LICENSE` file if present. Otherwise this project does not include an explicit license in the repository.

---

If you want, I can also:

- Add a small `README` section with specific developer notes (how ACF is included, customizer settings).
- Add a `scripts` npm entry or a `Makefile` to simplify common tasks.

Let me know which extras you'd like and I'll add them.
