<?php

namespace App;


if (function_exists('acf_add_options_page')) :
    /**
     * Add an ACF options page
     *
     * @link https://www.advancedcustomfields.com/resources/options-page/
     */
    \acf_add_options_page([
        'page_title'     => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);
endif;
