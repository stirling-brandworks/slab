<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('front_page');

$fields->setLocation('page_type', '==', 'front_page');

$fields
    ->addTab('hero')
    ->addFields(get_field_partial('components.slider'))
    ->addFields(get_field_partial('components.quicklinks'));

return $fields;
