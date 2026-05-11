
# BPL WordPress Project

This project is a modern WordPress-based website with a custom classic theme (bplactive), flexible campaign landing pages, and standalone HTML assets.

## Project Structure
- **WordPress Core Files**: Standard WordPress files and folders (`wp-admin`, `wp-content`, `wp-includes`, etc.).
- **Theme**: `wp-content/themes/bplactive` contains the custom classic theme with:
  - Modular header/footer using template parts
  - Modern, responsive home page (`home.php` + `assets/css/homestyle.css`)
  - Flexible campaign landing page template (`page-campaign.php`) using ACF fields
  - Custom navigation menu with logo and dropdown support
  - All CSS and JS organized in `assets/css/` and `assets/js/`
- **Custom HTMLs**: The `htmls/` directory contains standalone HTML pages and related assets.

## Getting Started
1. **WordPress Setup**:
   - Ensure you have a local server environment (e.g., XAMPP, WAMP, Local by Flywheel).
   - Place the project folder in your web server's root directory.
   - Create a database and update `wp-config.php` with the correct credentials.
   - Access the site via your local server URL to complete WordPress installation if not already done.

2. **Theme Features**:
   - Activate the `bplactive` theme in the WordPress admin.
   - Assign a menu to the "Primary Menu" location for navigation.
   - Add your logo to `assets/images/bpl-logo.png`.
   - Home page is fully responsive and visually modern.
   - Create campaign pages using the "Campaign Landing Page" template and fill content via ACF fields.

3. **Custom HTML Pages**:
   - Access custom pages directly via `/htmls/home.html`, `/htmls/contact.html`, etc.
   - Assets for these pages are in `htmls/css/`, `htmls/js/`, and `htmls/images/`.

## Development
- **Theme**: Edit files in `wp-content/themes/bplactive` for PHP, CSS, and JS changes.
- **Campaign Pages**: Use ACF to manage content for campaign landing pages.
- **Custom HTML**: Edit files in the `htmls/` directory for standalone pages.

## License
See `license.txt` for licensing information.

## Contributing
Pull requests and suggestions are welcome. For major changes, please open an issue first to discuss what you would like to change.

## Contact
For support, contact the site administrator or open an issue.
