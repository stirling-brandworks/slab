<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('alert');

$config = ['wrapper' => ['width' =>  '25%']];

$fields
    ->addSelect('type', [
        'choices' => [
            'info' => 'Info',
            'success' => 'Success',
            'danger' => 'Danger',
            'warning' => 'Warning'
        ],
        'default_value' => 'info',
        'wrapper' => $config['wrapper']
    ])
    ->addImage('icon', [
        'return_format' => 'ID',
        'wrapper' => $config['wrapper']
    ])
    ->addText('text', $config)->setRequired()
    ->addLink('link', $config);

return $fields;
