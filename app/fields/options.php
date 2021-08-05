<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('options');

$fields->setLocation('options_page', '==', 'theme-general-settings');

return $fields;
