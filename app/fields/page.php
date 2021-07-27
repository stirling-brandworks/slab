<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('page');

$fields
    ->setLocation('post_type', '==', 'page');

return $fields;
