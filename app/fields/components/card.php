<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('card');

$fields
    ->addSelect('layout', [
        'choices' => [
            'vertical' => 'Vertical',
            'horizontal' => 'Horizontal',
        ],
        'default_value' => 'vertical',
    ])
    ->addImage('image', [
        'return_format' => 'ID'
    ])
    ->addText('title')
    ->addTextarea('content')
    ->addLink('link');

return $fields;
