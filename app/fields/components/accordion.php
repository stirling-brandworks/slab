<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('accordion');

$fields
    ->addRepeater('accordion_items')
    ->addText('title')->setRequired()
    ->addWysiwyg('content')->setRequired()
    ->endRepeater();

return $fields;
