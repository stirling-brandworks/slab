<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$fields = new FieldsBuilder('front_page');

$fields->setLocation('page_type', '==', 'front_page');

$fields
    ->addTab('hero')
        ->addGroup('hero_visiblity')
            ->addFields(get_field_partial('components.visiblity-toggle'))
        ->endGroup()
        ->addGroup('slider')
            ->addFields(get_field_partial('components.slider'))
        ->endGroup()
        ->addText('hero_sidebar_title')
            ->setLabel('Sidebar Title')
            ->setWrapper(['width' => '30'])
        ->addWysiwyg('hero_sidebar_content')
            ->setLabel('Sidebar Content')
            ->setWrapper(['width' => '50'])
        ->addLink('hero_sidebar_link')
            ->setLabel('Sidebar Button')
            ->setWrapper(['width' => '20'])

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
