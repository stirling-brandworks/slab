<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('slider');

$fields
    ->addRepeater('slides')
    ->addImage('background_image', [
        'required' => true,
    ])
    ->addText('title')
    ->addTextarea('description')
    ->addLink('link')
    ->endRepeater();

return $fields;
