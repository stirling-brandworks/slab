<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'slab');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'slab'), __('Invalid PHP version', 'slab'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'slab'), __('Invalid WordPress version', 'slab'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__ . '/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Slab directory.', 'slab'),
            __('Autoloader not found.', 'slab')
        );
    }
    require_once $composer;
}

/**
 * Include the WP Bootstrap Navwalker manually. PSR Autoloading does not work
 * @link https://github.com/wp-bootstrap/wp-bootstrap-navwalker
 */
if (!class_exists('WP_Bootstrap_Navwalker')) {
    if (!file_exists($walker  = __DIR__ . '/../vendor/wp-bootstrap/wp-bootstrap-navwalker/class-wp-bootstrap-navwalker.php')) {
        $sage_error(
            __('The class-wp-bootstrap-navwalker.php file may be missing. Check your composer.json file.', 'slab'),
            __('WP_Bootstrap_Navwalker not found.', 'slab')
        );
    }
    require_once $walker;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'slab'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin', 'acf', 'cli', 'search']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/slab/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/slab/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/slab/resources
 *
 * We do this so that the Template Hierarchy will look in themes/slab/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/slab/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/slab/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/slab/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/slab/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/slab/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__) . '/config/assets.php',
            'theme' => require dirname(__DIR__) . '/config/theme.php',
            'view' => require dirname(__DIR__) . '/config/view.php',
            'services' => require dirname(__DIR__) . '/config/services.php',
            'blocks' => require dirname(__DIR__) . '/config/blocks.php',
        ]);
    }, true);


//ACF PRO Google Maps API KEY //TODO removed after latest libby core update
function my_acf_init() {
    
    acf_update_setting('google_api_key', 'AIzaSyDH4C8VwSUFTshDldzZGGHSsLkSlrV1HuI');
}

add_action('acf/init', 'my_acf_init');