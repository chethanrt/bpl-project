# Changelog

All notable changes to this project will be documented in this file.

## [2026-05-11]
- Initial project structure analysis and documentation.
- Added README.md, CHANGELOG.md, CONTRIBUTING.md, CODE_OF_CONDUCT.md files.
- Created custom classic theme `bplactive` with:
	- Modular header/footer using template parts
	- Modern, responsive home page (home.php + homestyle.css)
	- Flexible campaign landing page template (page-campaign.php) using ACF fields
	- Custom navigation menu with logo and dropdown support
	- All CSS and JS organized in assets/css/ and assets/js/
- Added fallback index.php for classic theme compliance
- Updated theme headers and functions.php for classic theme support

### [2026-05-11] Resources Vault Module
- Added full modular enterprise-grade Resources Vault system in `inc/resources-vault/`:
	- Custom Post Type: resource_vault
	- Taxonomies: Resource Categories, Resource Tags, Industries, Resource Types
	- ACF fields for resource details, product linking, gating, expiry, banners
	- Admin UI: menu, meta boxes, columns, leads list, admin enqueue
	- Frontend: archive, single, filters, modal, AJAX, templates, breadcrumbs
	- AJAX: filter, search, load more, gated download, analytics
	- Security: nonce, download handler, access validation
	- Helpers: utils, product linking, schema
	- Database: custom tables for download logs and leads
	- Assets: CSS/JS for frontend and admin, BEM structure
	- Unit tests: CPT and taxonomy registration (PHPUnit)
	- All code Git-friendly, modular, scalable, and production-ready
