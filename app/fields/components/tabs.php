<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('tabs');

$fields
    ->addRepeater('tabs')
    ->addText('title')->setRequired()
    ->addWysiwyg('content')->setRequired()
    ->endRepeater();

return $fields;
