<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('front_page');

$fields->setLocation('page_type', '==', 'front_page');

$fields
    ->addTab('hero')
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
        ->endGroup()

    ->addTab('quicklinks')
        ->addGroup('quicklinks_section')
            ->setLabel(null)
            ->addFields(get_field_partial('components.visiblity-toggle'))
            ->addFields(get_field_partial('components.section-title'))
        ->endGroup()
        ->addGroup('quicklinks')
            ->addFields(get_field_partial('components.quicklinks'))
        ->endGroup()

    ->addTab('books')
        ->addGroup('books')
            ->setLabel(null)
            ->addFields(get_field_partial('components.visiblity-toggle'))
            ->addFields(get_field_partial('components.section-title'))
            ->addFields(get_field_partial('components.tabs'))
        ->endGroup()

    ->addTab('resources')
        ->addGroup('resources')
            ->setLabel(null)
            ->addFields(get_field_partial('components.visiblity-toggle'))
            ->addFields(get_field_partial('components.section-title'))
        ->endGroup()

    ->addTab('news')
        ->addGroup('news')
            ->setLabel(null)
            ->addFields(get_field_partial('components.visiblity-toggle'))
            ->addFields(get_field_partial('components.section-title'))
        ->endGroup();

return $fields;
