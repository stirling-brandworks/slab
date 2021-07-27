<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('front_page');

$fields
    ->setLocation('page_template', '==', 'views/front-page.blade.php');

$fields
    ->addFields(get_field_partial('partials.quicklinks'));

return $fields;
