<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('button');

$fields
    ->addImage('icon', [
        'return_type' => 'ID'
    ])
    ->addLink('link')->setRequired();

return $fields;
