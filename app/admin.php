<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('slab/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

/**
 * Admin JS
 */
add_action('admin_enqueue_scripts', function () {
    wp_enqueue_script('sage/admin', asset_path('scripts/admin.js'), [], null, true);
    wp_localize_script('sage/admin', 'sageOptions', ['colors' => get_theme_colors()]);
});
