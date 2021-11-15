<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('Settings');

$fields->setLocation('options_page', '==', 'theme-general-settings');

$fields
    ->addFields(get_field_partial('components.shelf.hours'));

return $fields;
