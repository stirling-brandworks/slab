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

/**
 * Return controller ACF fields as array instead of object
 *
 * @link https://github.com/soberwp/controller#advanced-custom-fields-module
 */
add_filter('sober/controller/acf/array', function () {
    return true;
});

/**
 * Set the default return type for an image to be ID and not object
 *
 * @link https://www.advancedcustomfields.com/resources/acf-prepare_field/
 */
add_filter(
    'acf/prepare_field/type=image',
    function ($field) {
        if (empty($field['return_format'])) {
            $field['return_format'] = 'ID';
        };
        return $field;
    }
);
