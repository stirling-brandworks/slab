<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('hero');

$fields
    ->addGroup('hero')
        ->setLabel(null)
        ->addFields(get_field_partial('components.visiblity-toggle'))
    ->endGroup()
    ->addGroup('slider')
        ->addFields(get_field_partial('components.slider'))
    ->endGroup()
    ->addGroup('hero_section')
        ->setLabel('Sidebar')
        ->addFields(get_field_partial('components.section-title'))
        ->addWysiwyg('hero_sidebar_content')
            ->setLabel('Content')
    ->endGroup();

return $fields;
