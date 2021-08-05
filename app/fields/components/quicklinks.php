<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('quicklinks');

$fields
    ->addRepeater('quicklinks')
    ->addFields(get_field_partial('components.button'))
    ->endRepeater();

return $fields;
