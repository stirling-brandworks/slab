<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Theme Directory
    |--------------------------------------------------------------------------
    |
    | This is the absolute path to your theme directory.
    |
    | Example:
    |   /srv/www/example.com/current/web/app/themes/slab
    |
    */

    'dir' => get_theme_file_path(),

    /*
    |--------------------------------------------------------------------------
    | Theme Directory URI
    |--------------------------------------------------------------------------
    |
    | This is the web server URI to your theme directory.
    |
    | Example:
    |   https://example.com/app/themes/slab
    |
    */

    'uri' => get_theme_file_uri(),

    /*
    |--------------------------------------------------------------------------
    | Include any Stirling theme packages
    |--------------------------------------------------------------------------
    |
    | Any packages listed must also be required by Composer in order to load.
    |
    */
    'packages' => [
        // StirlingBrandworks\Shelf\Shelf::class
    ],
];
