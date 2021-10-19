<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('button');

$fields
    ->addImage('icon')
    ->addLink('link')->setRequired();

return $fields;
