<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('featured_database_list');

//This is a field that allows the editor to curate a featured list of databases items

$fields
    ->addPostObject('featured_databases', [
        'label' => 'Databases',
        'instructions' => 'Select the specific resources to feature for this list.',
        'post_type' => ['database'],
        'allow_null' => 0,
        'multiple' => 1,
        'return_format' => 'object',
        'ui' => 1,
    ]);

return $fields;
