<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('kitchen_sink');

$fields->setLocation('page_template', '==', 'views/template-kitchen-sink.blade.php');

$fields
    ->addTab('quicklinks')
    ->addFields(get_field_partial('components.quicklinks'))

    ->addTab('cards')
    ->addGroup('single_card')
    ->addFields(get_field_partial('components.card'))
    ->endGroup()
    ->addRepeater('multi_card')
    ->addFields(get_field_partial('components.card'))
    ->endRepeater()

    ->addTab('slider_carousels', ['label' => 'Sliders & Carousels'])
    ->addGroup('slider')
    ->addFields(get_field_partial('components.slider'))
    ->endGroup()
    ->addGroup('carousel')
    ->addFields(get_field_partial('components.slider'))
    ->endGroup()

    ->addTab('accordion_and_tabs', ['label' => 'Accordions & Tabs'])
    ->addFields(get_field_partial('components.accordion'))
    ->addFields(get_field_partial('components.tabs'));

return $fields;
