<?php

namespace App;

add_filter('allowed_redirect_hosts', function ($hosts) {
    if (!function_exists('libby_get_catalog_base_url')) {
        return $hosts;
    }
    $catalogUrl = \libby_get_catalog_base_url();
    $hosts[] = \parse_url($catalogUrl, PHP_URL_HOST);
    return $hosts;
}, 10, 1);

add_action('admin_post_libby_search', __NAMESPACE__ . '\\handle_search_request');
add_action('admin_post_nopriv_libby_search', __NAMESPACE__ . '\\handle_search_request');

function handle_search_request()
{

    // @link https://developer.wordpress.org/reference/functions/wp_safe_redirect/#comment-3974
    nocache_headers();

    if (
        empty($_POST['s']) ||
        empty($_POST['search_select']) ||
        !in_array($_POST['search_select'], ['catalog', 'site'])
    ) {
        wp_safe_redirect(get_home_url());
        exit;
    }



    $query = stripslashes(sanitize_text_field($_POST['s']));

    if ($_POST['search_select'] === 'catalog' && function_exists('libby_build_catalog_search_url')) {
        $searchUrl = \libby_build_catalog_search_url($query);
        wp_safe_redirect($searchUrl);
    } else {
        wp_safe_redirect(add_query_arg(['search_select' => 'site'], get_search_link($query)));
    }

    exit;
}