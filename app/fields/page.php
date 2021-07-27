<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('page_settings', ['position' => 'side']);

$fields
    ->setLocation('post_type', '==', 'page');

$fields
    ->addTrueFalse('hide_sidebar')
    ->addSelect('sidebar_position', [
        'conditional_logic' => [
            ['hide_sidebar', '==', '0']
        ],
        'choices' => [
            'left' => 'Left',
            'right' => 'Right',
            'default_value' => [
                'left' => 'Left'
            ]
        ]
    ])
    ->addTrueFalse('hide_breadcrumbs');

return $fields;
