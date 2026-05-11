# Installation Guide

Follow these steps to set up the BPL WordPress project locally or on your server:

## Prerequisites
- PHP 7.4 or higher
- MySQL/MariaDB
- Web server (Apache, Nginx, or similar)
- Composer (optional, for advanced development)

## Installation Steps

1. **Clone or Download the Project**
   - Place the project folder in your web server's root directory (e.g., `htdocs` for XAMPP, `www` for WAMP).

2. **Create a Database**
   - Create a new MySQL/MariaDB database for WordPress.

3. **Configure WordPress**
   - Copy `wp-config-sample.php` to `wp-config.php`.
   - Update database credentials in `wp-config.php`.

4. **Install WordPress**
   - Visit your local site URL in a browser (e.g., `http://localhost/bpl/`).
   - Follow the on-screen instructions to complete the WordPress installation.

5. **Activate the Theme**
   - Log in to the WordPress admin dashboard.
   - Go to Appearance > Themes and activate the `bplactive` theme.

6. **Install Required Plugins**
   - Recommended: Advanced Custom Fields (ACF) for campaign pages.
   - Any form plugin (e.g., Contact Form 7, Gravity Forms) for campaign forms.

7. **Set Up Menus and Logo**
   - Go to Appearance > Menus, create a menu, and assign it to the "Primary Menu" location.
   - Upload your logo to `wp-content/themes/bplactive/assets/images/bpl-logo.png`.

8. **Create Pages**
   - For a campaign page, add a new page and select the "Campaign Landing Page" template. Fill in content using ACF fields.
   - Edit the home page as needed.

9. **Permalinks**
   - Go to Settings > Permalinks and click "Save Changes" to ensure pretty URLs work.

## Optional: Custom HTML Pages
- Access standalone HTML pages in the `htmls/` directory directly via the browser.

## Support
For issues, see the README or open an issue in your repository.
