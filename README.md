# Starter Plugin for WordPress

This is a starter plugin for WordPress where I have used page builders, it adds some useful starter files to do some custom work with WordPress.

- No need to add `require` or `require_once` to load files from `custom-plugin/includes/*` folder, they load automaticly as soon as the new file is added to that folder
- Load additional scripts and styles, comment out the `add_action( 'wp_enqueue_scripts', 'custom_script' );` insde the `custom-plugin.php` file if not required
- You can disable Gutenberg Editor by removing the comment from a single line of code
- Has a structure for a working folder inside the plugin
- Includes a file called `remove-wordpress-bloat.php` to remove WordPress bloat, you can read more about [how much bloat WordPress has](https://devartur.com/blog/remove-wordpress-bloat-from-head-for-faster-sites/)
- Includes a file called `cpt.php` which sets up new custom post types in WordPress, no CPT UI plugin is required.
- Includes a file called `blog.php` where blog excerpt length, and end of the blog excerpt string can be customised
- Includes a file called `admin-login.php` which allows to customise the styles of the WordPress Admin Login page
