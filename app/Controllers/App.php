<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    use Partials\SidebarDefault;

    public function primaryMenu()
    {
        return [
            'theme_location'  => 'primary_navigation',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => null,
            'items_wrap'      => '%3$s',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new \WP_Bootstrap_Navwalker(),
        ];
    }

    public function secondaryMenu()
    {
        return [
            'theme_location'  => 'secondary_navigation',
            'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => null,
            'items_wrap'      => '%3$s',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new \WP_Bootstrap_Navwalker(),
        ];
    }

    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'slab');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'slab'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'slab');
        }
        return get_the_title();
    }
}
