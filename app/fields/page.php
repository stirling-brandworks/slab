<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('page_settings', ['position' => 'side']);

$fields
    ->setLocation('post_type', '==', 'page');

$fields
    ->addTrueFalse('hide_sidebar');

return $fields;
