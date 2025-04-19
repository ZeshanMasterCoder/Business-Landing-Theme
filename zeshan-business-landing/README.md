# Zeshan Business Landing Theme

A custom single-page WordPress theme for business landing pages, developed by Zeshan Noor. Features a responsive header, hero section, about section, contact form with email functionality, and footer. Built with PHP, HTML, CSS, and JavaScript.

## Features
- **Header**: Site title and navigation menu linking to page sections.
- **Hero Section**: Eye-catching banner with customizable text and background image.
- **About Section**: Brief introduction to the business, authored by Zeshan Noor.
- **Contact Form**: AJAX-powered form that emails submissions to the site admin.
- **Footer**: Copyright and developer credit.
- **Responsive Design**: Mobile-friendly layout for all devices.

## Setup Instructions
1. **Prerequisites**:
   - WordPress 5.0 or higher installed.
   - A web server with PHP 7.4+ and MySQL.
   - Access to the WordPress admin panel.

2. **Installation**:
   - Download the theme files (`style.css`, `index.php`, `header.php`, `footer.php`, `functions.php`, `js/scripts.js`, and the `images` folder).
   - Zip the files into `zeshan-business.zip`.
   - Log into your WordPress admin panel.
   - Navigate to **Appearance > Themes > Add New > Upload Theme**.
   - Upload `zeshan-business.zip` and click **Install Now**.
   - Activate the theme.

3. **Configuration**:
   - **Background Image**: Place a `hero-bg.jpg` in the theme’s `images` folder (create if missing) for the hero section.
   - **Contact Form**: Ensure your WordPress site is configured to send emails (e.g., via an SMTP plugin like WP Mail SMTP if needed).
   - **Menu**: Set up a navigation menu in **Appearance > Menus** and assign it to the “Primary Menu” location.

4. **Testing**:
   - Visit your site’s homepage to view the landing page.
   - Test the contact form by submitting a message—it should email the admin address (set in **Settings > General**).

## File Structure
- `style.css`: Theme styles and metadata.
- `index.php`: Main template for the landing page.
- `header.php`: Header template with navigation.
- `footer.php`: Footer template with credits.
- `functions.php`: Theme setup and contact form logic.
- `js/scripts.js`: JavaScript for AJAX form submission.
- `images/`: Folder for hero background (add `hero-bg.jpg`).

## Notes
- Ensure the WordPress site has email functionality configured for the contact form to work.
- Customize text in `index.php` (e.g., hero or about section) to fit specific business needs.
- The theme is lightweight and optimized for performance.

## License
MIT License—free to use and adapt.

Developed by Zeshan Noor, 2025