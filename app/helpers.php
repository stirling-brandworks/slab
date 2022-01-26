<?php

namespace App;

use Roots\Sage\Container;
use App\Exceptions\CompanionPluginNotAvailable;

/**
 * Get the sage container.
 *
 * @param string $abstract
 * @param array  $parameters
 * @param Container $container
 * @return Container|mixed
 */
function sage($abstract = null, $parameters = [], Container $container = null)
{
    $container = $container ?: Container::getInstance();
    if (!$abstract) {
        return $container;
    }
    return $container->bound($abstract)
        ? $container->makeWith($abstract, $parameters)
        : $container->makeWith("sage.{$abstract}", $parameters);
}

/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param array|string $key
 * @param mixed $default
 * @return mixed|\Roots\Sage\Config
 * @copyright Taylor Otwell
 * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
 */
function config($key = null, $default = null)
{
    if (is_null($key)) {
        return sage('config');
    }
    if (is_array($key)) {
        return sage('config')->set($key);
    }
    return sage('config')->get($key, $default);
}

/**
 * @param string $file
 * @param array $data
 * @return string
 */
function template($file, $data = [])
{
    /**
     * Fix for issue with MWDelaney/sage-acf-wp-blocks package and Sage 9
     *
     * @link https://github.com/MWDelaney/sage-acf-wp-blocks/issues/52#issuecomment-740865743
     */
    if (!file_exists($file) && strpos($file, 'views/blocks/') !== false) {
        $file = locate_template($file);
    }

    return sage('blade')->render($file, $data);
}

/**
 * Retrieve path to a compiled blade view
 * @param $file
 * @param array $data
 * @return string
 */
function template_path($file, $data = [])
{
    return sage('blade')->compiledPath($file, $data);
}

/**
 * @param $asset
 * @return string
 */
function asset_path($asset)
{
    return sage('assets')->getUri($asset);
}

/**
 * @param string|string[] $templates Possible template files
 * @return array
 */
function filter_templates($templates)
{
    $paths = apply_filters('slab/filter_templates/paths', [
        'views',
        'resources/views'
    ]);
    $paths_pattern = "#^(" . implode('|', $paths) . ")/#";

    return collect($templates)
        ->map(function ($template) use ($paths_pattern) {
            /** Remove .blade.php/.blade/.php from template names */
            $template = preg_replace('#\.(blade\.?)?(php)?$#', '', ltrim($template));

            /** Remove partial $paths from the beginning of template names */
            if (strpos($template, '/')) {
                $template = preg_replace($paths_pattern, '', $template);
            }

            return $template;
        })
        ->flatMap(function ($template) use ($paths) {
            return collect($paths)
                ->flatMap(function ($path) use ($template) {
                    return [
                        "{$path}/{$template}.blade.php",
                        "{$path}/{$template}.php",
                    ];
                })
                ->concat([
                    "{$template}.blade.php",
                    "{$template}.php",
                ]);
        })
        ->filter()
        ->unique()
        ->all();
}

/**
 * @param string|string[] $templates Relative path to possible template files
 * @return string Location of the template
 */
function locate_template($templates)
{
    return \locate_template(filter_templates($templates));
}

/**
 * Determine whether to show the sidebar
 * @return bool
 */
function display_sidebar()
{
    static $display;
    isset($display) || $display = apply_filters('slab/display_sidebar', false);
    return $display;
}

/**
 * Simple function to pretty up our field partial includes.
 *
 * @link https://roots.io/guides/using-acf-builder-with-sage/
 *
 * @param  mixed $partial
 * @return mixed
 */
function get_field_partial($partial)
{
    $partial = str_replace('.', '/', $partial);
    return include(config('theme.dir') . "/app/fields/{$partial}.php");
}

/**
 * Get the post object of the primary branch.
 *
 * @return WP_Post
 */
function get_primary_branch(): \WP_Post
{
    $branches = wp_count_posts('branch');
    if (!$branches || !$branches->publish) {
        throw new \Exception('No published branches found. Please create a branch.');
    }
    if ($branches->publish === 1) {
        return get_posts(['post_type' => 'branch', 'post_status' => 'publish', 'posts_per_page' => 1])[0];
    }

    $primaryBranch = get_field('main_branch_object', 'option');

    if (!$primaryBranch) {
        $primaryBranch = get_posts(['post_type' => 'branch', 'post_status' => 'publish', 'posts_per_page' => 1])[0];
        update_field('main_branch_object', $primaryBranch, 'option');
    }

    return $primaryBranch;
}

/**
 * Get the ID of the primary branch.
 *
 * @return integer
 */
function get_primary_branch_id(): int
{
    $branch = get_primary_branch();
    return $branch['ID'];
}

/**
 * Format the string for todays hours into an echoable return
 *
 * @param int    $branch_id  The id of the branch CPT
 * @param string $type       Type of hours: "regular" or "alternate"
 */
function get_todays_hours(int $branch_id = null, string $type = 'regular'): string
{
    if (!function_exists('libby_todays_hours')) {
        throw new CompanionPluginNotAvailable('libby-core');
    }
    ob_start();
    $branch_id = $branch_id ?: get_primary_branch_id();
    \libby_todays_hours($branch_id, $type);
    return ob_get_clean();
}

/**
 * Check if there are hours configured using the companion plugin.
 *
 * @param integer|null $branch_id
 * @return boolean
 */
function has_hours(int $branch_id = null): bool
{
    try {
        $branch_id = $branch_id ?: get_primary_branch_id();
        return !empty(\libby_get_hours($branch_id));
    } catch (\Exception $e) {
        return false;
    }
}

/**
 * Get the branch address
 *
 * @param integer|null $branch_id
 * @return array
 */
function get_branch_address(int $branch_id = null)
{
    try {
        $branch_id = $branch_id ?: get_primary_branch_id();
        return get_field('address', $branch_id);
    } catch (\Exception $e) {
        return [
            'name' => 'Stirling Brandworks',
            'street_number' => 1,
            'street_name' => 'Mount Vernon Street',
            'city' => 'Winchester',
            'state' => 'MA',
            'post_code' => '01890',
            'country' => 'US'
        ];
    }
}

/**
 * Get the branch phone number
 *
 * @param integer|null $branch_id
 * @return string
 */
function get_branch_phone(int $branch_id = null)
{
    try {
        $branch_id = $branch_id ?: get_primary_branch_id();
        return get_field('branch_phone_number', $branch_id);
    } catch (\Exception $e) {
        return '(781) 369-5101';
    }
}

/**
 * Get the branch email address
 *
 * @param integer|null $branch_id
 * @return string
 */
function get_branch_email(int $branch_id = null)
{
    try {
        $branch_id = $branch_id ?: get_primary_branch_id();
        return get_field('branch_email', $branch_id);
    } catch (\Exception $e) {
        return 'info@stirlingbrandworks.com';
    }
}

/**
 * Get the link to the catalog from the companion plugin.
 *
 * @return string
 */
function get_catalog_url()
{
    if (!function_exists('libby_get_catalog_base_url')) {
        throw new CompanionPluginNotAvailable('libby-core');
    }

    return \libby_get_catalog_base_url();
}


/**
 * Get the link to an account URL from the companion plugin.
 *
 * @return string
 */
function get_account_url()
{
    return get_catalog_url();
}
