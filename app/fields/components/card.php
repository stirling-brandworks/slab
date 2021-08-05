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
    ->addImage('image')
    ->addText('title')
    ->addTextarea('content')
    ->addLink('link');

return $fields;
