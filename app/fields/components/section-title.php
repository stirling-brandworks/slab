<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('section_title');

$fields
	->addText('title')
        ->setWrapper(['width' => '75'])
    ->addLink('link')
        ->setWrapper(['width' => '25']);

return $fields;
